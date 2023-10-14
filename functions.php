<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_separate', trailingslashit(get_stylesheet_directory_uri()) . 'ctc-style.css', array('twenty-twenty-one-custom-color-overrides', 'twenty-twenty-one-style', 'twenty-twenty-one-style', 'twenty-twenty-one-print-style'));
        wp_enqueue_style('tradefair_form_style_enqueue', trailingslashit(get_stylesheet_directory_uri()) . '/assets/css/form.css', array('twenty-twenty-one-custom-color-overrides', 'twenty-twenty-one-style', 'twenty-twenty-one-style', 'twenty-twenty-one-print-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION

if (!function_exists('form_script_enqueue')) :
    function form_script_enqueue()
    {
        wp_enqueue_script('tradefair_form_script_enqueue', trailingslashit(get_stylesheet_directory_uri()) . '/assets/js/main.js', array());
    }
endif;
add_action('wp_enqueue_scripts', 'form_script_enqueue', 10);
function handle_payment_form($data)
{


    $body = wc_clean($data->get_params());

    if (!$body['nonce']) {
        return array('error' => true, 'message' => 'Not a valid request. __nonce');
    }

    $isVerifiedRequest = wp_verify_nonce($body['nonce'], 'trade-fair-payment-action');

    if (!$isVerifiedRequest) {
        // return array('error' => true, 'message' => 'Not a valid request ' . $isVerifiedRequest);
    }

    if (!$body['txref']) {
        return array('error' => true, 'message' => 'Not a valid request. __ref');
    }
    if (!$body['email']) {
        return array('error' => true, 'message' => 'Not a valid request. __email');
    }
    $apiResponse =  wp_remote_get(
        'https://api.paystack.co/transaction/verify/' . $body['txref'],
        array(
            'headers' =>
            array('authorization' => 'Bearer xxxxxx')
        )
    );
    $apiBody     = json_decode(wp_remote_retrieve_body($apiResponse), true);

    if ($apiBody['status'] != true) {
        return array('error' => true, 'message' => 'Could not verify reference');
    }

    $order = trade_order($body, $apiBody);

    // "customer"
    return array('sucess' => true, 'message' => 'Order Created ' . $order->ID,  'orderId' => $order->ID);
}
function trade_order($body, $txBody)
{
    $order = wc_create_order();
    $order->set_status('wc-completed', 'Order is created with ref ' . $body['txref'] . ' and type: ' . $body['businessType']);
    // $order->set_status( 'wc-completed', 'You can pass some order notes here...' );
    update_post_meta($order->ID, 'txref', $body['txref']);
    update_post_meta($order->ID, 'businessType', $body['businessType']);
    $email = $txBody['data']['customer']["email"];
    try {
        $productId = wc_get_product_id_by_sku(strtolower($body['businessType']));
        $order->add_product(wc_get_product($productId), 1);
        $order->calculate_totals();
    } catch (\Throwable $th) {
        //throw $th;
    }

    $address = array(
        'first_name'  => $body['fullname'],
        'email'      => $email,
        'phone'      => $body['phone']
    );
    $order->set_address($address, 'billing');
    $order->set_transaction_id($body['txref']);
    $amount = $txBody['amount'] / 100;
    // $order->set_total($amount);

    $order->payment_complete();
    $order->save();
    return $order;
}

add_action('rest_api_init', function () {
    register_rest_route('trade-fair', 'payment', array(
        'methods' => 'POST',
        'callback' => 'handle_payment_form',
    ));
});
