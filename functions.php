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
    if ($body['paymentMethod'] === 'bt') {
        $apiBody = array('email' => $body['email']);
    } else {
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
    }
    $order = trade_order($body, $apiBody);

    // "customer"
    return array('sucess' => true, 'message' => 'Order Created ' . $order->ID,  'orderId' => $order->ID);
}
function trade_order($body, $txBody)
{
    $order = wc_create_order();
    if ($body['paymentMethod'] === 'paystack') {
        $order->set_status('wc-completed', 'Order is created with ref ' . $body['txref'] . ' and type: ' . $body['businessType']);
    }

    // $order->set_status( 'wc-completed', 'You can pass some order notes here...' );
    // update_post_meta($order->ID, 'txref', $body['txref']);
    // update_post_meta($order->ID, 'businessType', $body['businessType']);
    $order->update_meta_data('businessType', $body['businessType']);
    $order->update_meta_data('txref', $body['txref']);
    $order->update_meta_data('businessName', $body['business_name']);
    $order->update_meta_data('store', $body['business_name']);
    $order->update_meta_data('storeAddress', $body['store_address']);
    $email = isset($txBody['data']['customer']["email"]) ? $txBody['data']['customer']["email"] : $txBody['email'];
    try {
        $productId = strtolower($body['businessType']) === 'seller' ? wc_get_product_id_by_sku(strtolower($body['businessType'])) : wc_get_product($body['productId']);
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
    // $amount = $txBody['amount'] / 100;
    // $order->set_total($amount);

    $order->payment_complete();
    $order->save();
    return $order;
}

function trade_handle_get_product($data)
{

    $args = array(
        'orderby'  => 'name',
    );
    $products = wc_get_products($args);

    // "customer"
    return array('sucess' => true, 'data' => json_encode($products));
}

add_action('rest_api_init', function () {
    register_rest_route('trade-fair', 'payment', array(
        'methods' => 'POST',
        'callback' => 'handle_payment_form',
    ));
    register_rest_route('trade-fair', 'products', array(
        'methods' => 'GET',
        'callback' => 'trade_handle_get_product',
    ));
});

// BRONZE TABLE - N200,000
// SILVER BOOT -N300,000
// GOLD BOOT -N400,000
// THRIFTS CANOPY- N240,000