<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'chld_thm_cfg_locale_css' ) ) :
	function chld_thm_cfg_locale_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}
		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( ! function_exists( 'child_theme_configurator_css' ) ) :
	function child_theme_configurator_css() {
		wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'twenty-twenty-one-custom-color-overrides', 'twenty-twenty-one-style', 'twenty-twenty-one-style', 'twenty-twenty-one-print-style' ) );
		wp_enqueue_style( 'tradefair_form_style_enqueue', trailingslashit( get_stylesheet_directory_uri() ) . '/assets/css/form.css', array( 'twenty-twenty-one-custom-color-overrides', 'twenty-twenty-one-style', 'twenty-twenty-one-style', 'twenty-twenty-one-print-style' ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
add_action( 'init', 'trade_init' );

if ( ! function_exists( 'trade_init' ) ) {
	function trade_init() {
		add_action( 'wp_enqueue_scripts', 'form_script_enqueue', 10 );
		add_action(
			'rest_api_init',
			function () {
				register_rest_route(
					'trade-fair',
					'payment',
					array(
						'methods'  => 'POST',
						'callback' => 'handle_payment_form',
					)
				);
				register_rest_route(
					'trade-fair',
					'products',
					array(
						'methods'  => 'GET',
						'callback' => 'trade_handle_get_product',
					)
				);
			}
		);
		add_action( 'woocommerce_admin_order_data_after_order_details', 'trade_order_meta_general' );
	}
}
if ( ! function_exists( 'form_script_enqueue' ) ) {
	function form_script_enqueue() {
		wp_enqueue_script( 'tradefair_form_script_enqueue', trailingslashit( get_stylesheet_directory_uri() ) . '/assets/js/main.js', array() );
	}
}


function handle_payment_form( $data ) {

	$body = wc_clean( $data->get_params() );

	if ( ! $body['nonce'] ) {
		return array(
			'error'   => true,
			'message' => 'Not a valid request. __nonce',
		);
	}

	$isVerifiedRequest = wp_verify_nonce( $body['nonce'], 'trade-fair-payment-action' );

	if ( ! $isVerifiedRequest ) {
		// return array('error' => true, 'message' => 'Not a valid request ' . $isVerifiedRequest);
	}
	$files = $data->get_file_params();
	// $headers = $request->get_headers();
	if ( empty( $files ) ) {
		return array(
			'error'   => true,
			'message' => 'no file',
		);
	}

	if ( empty( trade_arr_arg( $files, 'cac_cert' ) ) || empty( trade_arr_arg( $files, 'valid_id' ) || empty( trade_arr_arg( $files, 'utility_bill' ) ) ) ) {

		return array(
			'error'   => true,
			'message' => 'missing file',
		);
	}
	$cac_cert     = $files['cac_cert'];
	$valid_id     = $files['valid_id'];
	$utility_bill = $files['utility_bill'];
	// confirm file uploaded via POST
	if ( ! is_uploaded_file( $cac_cert['tmp_name'] ) ) {

		return array(
			'error'   => true,
			'message' => 'File upload check failed ',
		);
	}
	if ( ! is_uploaded_file( $valid_id['tmp_name'] ) ) {

		return array(
			'error'   => true,
			'message' => 'File upload check failed ',
		);
	}
	if ( ! is_uploaded_file( $utility_bill['tmp_name'] ) ) {
		return array(
			'error'   => true,
			'message' => 'File upload check failed ',
		);
	}
	if ( ! $body['txref'] ) {
		return array(
			'error'   => true,
			'message' => 'Not a valid request. __ref',
		);
	}
	// if ( ! $body['email'] ) {
	// return array(
	// 'error'   => true,
	// 'message' => 'Not a valid request. __email',
	// );
	// }
	if ( $body['paymentMethod'] === 'bt' ) {
		$apiBody = array();
	} else {
		$apiResponse = wp_remote_get(
			'https://api.paystack.co/transaction/verify/' . $body['txref'],
			array(
				'headers' =>
				array( 'authorization' => 'Bearer xxxxxx' ),
			)
		);
		$apiBody     = json_decode( wp_remote_retrieve_body( $apiResponse ), true );

		if ( $apiBody['status'] != true ) {
			return array(
				'error'   => true,
				'message' => 'Could not verify reference',
			);
		}
	}
	try {
		$order = trade_order( $body, $files );
	} catch ( \Throwable $th ) {
		return array(
			'success' => false,
			'message' => $th->getMessage(),
		);
	}

	// "customer"
	return array(
		'success' => true,
		'message' => 'Order Created ' . $order->ID,
		'orderId' => $order->ID,
	);
}
function trade_get_file_data( $file ) {
	$upload_dir = wp_upload_dir();

	$size = trade_arr_arg( $file, 'size' );
	if ( $size > 2000000 ) {
		throw new Exception( $file['name'] . ' is too large', 1 );

	}
	$ext                = explode( '/', trade_arr_arg( $file, 'type' ) );
	$cac_cert_path      = 'trade_' . md5( basename( $file['name'] ) ) . '_' . time() . '.' . $ext[1];
	$full_cac_cert_path = $upload_dir['path'] . DIRECTORY_SEPARATOR . $cac_cert_path;
	// spts_add_log( $cac_cert_path );
	// spts_add_log( json_encode( $upload_dir ) );

	$result = move_uploaded_file( $file['tmp_name'], $full_cac_cert_path );
	if ( ! $result ) {

		return false;
	}

	return $upload_dir['url'] . DIRECTORY_SEPARATOR . $cac_cert_path;
}
function trade_add_files_to_order( $order, $files ) {
	try {

		$cac_file_data = trade_get_file_data( trade_arr_arg( $files, 'cac_cert' ) );
		if ( $cac_file_data ) {

			$order->update_meta_data( 'cac_cert', $cac_file_data );
		}

		$valid_id_file_data = trade_get_file_data( trade_arr_arg( $files, 'valid_id' ) );

		if ( $valid_id_file_data ) {
			$order->update_meta_data( 'valid_id', $valid_id_file_data );
		}

		$utility_file_data = trade_get_file_data( trade_arr_arg( $files, 'utility_bill' ) );

		if ( $utility_file_data ) {
			$order->update_meta_data( 'utility_bill', $utility_file_data );
		}

		// if ( $upload && ! isset( $upload['error'] ) ) {
		// $file_path = $upload['file'];

		// Add file to the order
		// $file_data = array(
		// 'name' => 'cac_cert',
		// 'file' => $file_path,
		// );
		// $order->add_file( $file_data );
		// }
		// $upload = wp_handle_upload( trade_arr_arg( $files, 'valid_id' ), array( 'valid_id' => true ) );
		// if ( $upload && ! isset( $upload['error'] ) ) {
		// $file_path = $upload['file'];

		// Add file to the order
		// $file_data = array(
		// 'name' => 'valid_id',
		// 'file' => $file_path,
		// );
		// $order->add_file( $file_data );
		// }

		// $upload = wp_handle_upload( trade_arr_arg( $files, 'utility_bill' ), array( 'utility_bill' => true ) );
		// if ( $upload && ! isset( $upload['error'] ) ) {
		// $file_path = $upload['file'];

		// Add file to the order
		// $file_data = array(
		// 'name' => 'utility_bill',
		// 'file' => $file_path,
		// );
		// $order->add_file( $file_data );
		// }
	} catch ( \Throwable $th ) {
		throw $th;
		// var_dump( $th->getMessage() );
	}

	return $order;
}
function trade_order( $body, $files ) {
	$order = wc_create_order();
	if ( $body['paymentMethod'] === 'paystack' ) {
		$order->set_status( 'wc-completed', 'Order is created with ref ' . $body['txref'] . ' and type: ' . trade_arr_arg( $body, 'businessType' ) );
	}

	// $order->set_status( 'wc-completed', 'You can pass some order notes here...' );
	// update_post_meta($order->ID, 'txref', $body['txref']);

	$order->update_meta_data( 'txref', trade_arr_arg( $body, 'txref' ) );

	$order->update_meta_data( 'storeAddress', trade_arr_arg( $body, 'store_address' ) );
	// $email = isset( $txBody['data']['customer']['email'] ) ? $txBody['data']['customer']['email'] : $txBody['email'];
	try {
		$productId = strtolower( trade_arr_arg( $body, 'businessType' ) ) === 'buyer' ? wc_get_product_id_by_sku( strtolower( trade_arr_arg( $body, 'businessType' ) ) ) : wc_get_product( trade_arr_arg( $body, 'productId' ) );
		$order->add_product( wc_get_product( $productId ), 1 );
		$order->calculate_totals();
	} catch ( \Throwable $th ) {
		// throw $th;
	}
	trade_add_files_to_order( $order, $files );
	$address = array(
		'first_name' => $body['fullname'],
		// 'email'      => $email,
		'phone'      => $body['phone'],
	);
	$order->set_address( $address, 'billing' );
	$order->set_transaction_id( $body['txref'] );
	// $amount = $txBody['amount'] / 100;
	// $order->set_total($amount);

	$order->payment_complete();
	$order->save();
	return $order;
}

function trade_handle_get_product( $data ) {

	$args     = array(
		'orderby' => 'name',
	);
	$products = wc_get_products( $args );

	// "customer"
	return array(
		'sucess' => true,
		'data'   => json_encode( $products ),
	);
}


function trade_arr_arg( $array, $key ) {
	if ( ! is_array( $array ) ) {
		return '';
	}
	if ( ! isset( $array ) ) {
		return '';
	}
	if ( ! isset( $array[ $key ] ) ) {
		return '';
	}
	return $array[ $key ];
}

function trade_order_meta_general( $order ) {

	$file = $order->get_meta( 'cac_cert' );
	echo '<p style="margin-top:20px">';
	if ( $file ) {
		echo '<b><p>CAC Certificate</p></b>';
		echo '<a href="' . esc_url( $file ) . '">';
		echo '<img src="' . esc_url( $file ) . '"  width="100px" height="100px"/>';
		echo '</a><br>';
	}
	$file = $order->get_meta( 'valid_id' );
	if ( $file ) {
		echo '<b><p>Valid Identity Card</p></b>';
		echo '<a href="' . esc_url( $file ) . '">';
		echo '<img src="' . esc_url( $file ) . '"  width="100px" height="100px"/>';
		echo '</a><br>';
	}
	$file = $order->get_meta( 'utility_bill' );
	if ( $file ) {
		echo '<b><p>Utility bill</p></b>';

		echo '<a href="' . esc_url( $file ) . '">';
		echo '<img src="' . esc_url( $file ) . '"  width="100px" height="100px"/>';
		echo '</a><br>';
	}
	echo '</p>';

}

// BRONZE TABLE - N200,000
// SILVER BOOT -N300,000
// GOLD BOOT -N400,000
// THRIFTS CANOPY- N240,000

function spts_add_log( string $message ) {
	file_put_contents( __DIR__ . '/log.txt', $message, FILE_APPEND );
}
