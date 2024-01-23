<?php

/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio_Grade
 */

get_header( 'home' );
$products      = wc_get_products(
	array(
		'category' => array( 'vendors' ),
		'orderby'  => 'menu_order',
		'order'    => 'asc',
	)
);
$buyerproducts = wc_get_products(
	array(
		'category' => array( 'buyers' ),
		'orderby'  => 'menu_order',
		'order'    => 'asc',
	)
);
$categories    = get_categories(
	array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => false,
	)
);


?>
<header style="transform: translateY(-43px);">
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
	<nav>
		<div class="c-nav c-nav--green">
			<div class="c-nav--left">
				<a href="https://blessingudor.com" class="c-nav__logo">
					<img src="http://9jababytradefair.com/wp-content/uploads/2023/10/Logo-png-1.png" alt="" width="100">
				</a>
			</div>
			<div class="c-nav--right">

			</div>
		</div>
		<div class="c-nav c-nav--mobile-only c-nav--green">

		</div>
	</nav>

</header>
<div class="sg-home">

	<!-- ABOUT SECTION -->

	<section class="l-section l-section--pad-top l-section--pad-bottom l-section--blue">
		<div class="c-section-pattern "></div>
		<div class="l-container l-container--lg form-box">
			<h2>
				Register
			</h2>
			<div id="show-payment-form">
				<form name="signupForm" class="form-validation ng-invalid ng-invalid-required ng-valid-email ng-valid-pattern ng-dirty ng-valid-parse">
					<input type="hidden" name="_tradewpnonce" value="<?php echo wp_create_nonce( 'trade-fair-payment-action' ); ?>">
					<?php wp_nonce_field( 'make_payment', 'trade_nonce' ); ?>
					<div class="form-group">
						<label class="control-label ng-binding">Name</label>
						<input type="text" name="fullname" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required>
					</div>
					<!-- <div class="form-group">
					<label class="control-label ng-binding">Email</label>
					<input type="email" name="email" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="">
				</div> -->

					<div class="form-group">
						<label class="control-label ng-binding">Phone</label>
						<input type="text" name="phone" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="">
					</div>
					<div class="form-group">
						<label class="control-label ng-binding">IG Handle</label>
						<input type="text" name="ig_handle" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="">
					</div>
					<!-- <div class="form-group">
					<label class="control-label ng-binding">Business Name</label>
					<input type="text" name="businessname" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="">
				</div> -->
					<div class="form-group">
						<label class="control-label ng-binding">Store Address</label>
						<input type="text" name="storeaddress" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="">
					</div>
					<div class="form-group">
						<label class="control-label ng-binding">Category</label>
						<select name="category" id="" class="form-control">
							<?php
							foreach ( $categories as $category ) {

								$category_details = json_encode(
									array(
										'id'   => $category->term_id,
										'name' => $category->name,
									)
								);
								?>
								<option value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label ng-binding">Upload CAC cert</label>
						<input type="file" name="cac_cert" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" accept="image/png,image/jpg,image/jpeg">
						<small>Accepts: jpg and png file. Max size: 2MB</small>
					</div>
					<div class="form-group">
						<label class="control-label ng-binding">Upload the utility bill</label>
						<input type="file" name="utility_bill" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" accept="image/png,image/jpg,image/jpeg">
						<small>Accepts: jpg and png file. Max size: 2MB</small>
					</div>
					<div class="form-group">
						<label class="control-label ng-binding">Upload of valid ID</label>
						<input type="file" name="valid_id" class="form-control input-sm ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" accept="image/png,image/jpg,image/jpeg">
						<small>Accepts: jpg and png file. Max size: 2MB</small>
					</div>
					<!-- Name ;
Email;
Phone number ;
IG handle ; 
Store Address ; 
Upload CAC cert, 
Upload the utility bill,
Upload of valid ID 
=====
buyer
=====
name, phone number, email, remove the business name, then make the store address normal address.
-->
					<div class="form-group">
						<label class="control-label ng-binding">Choose How you want to participate?</label>
						<div class="radio">
							<select name="productId" id="" class="form-control" value=<?php echo trade_arr_arg( $_GET, 'productId' ); ?>>
								<?php
								if ( trade_arr_arg( $_GET, 'businessType' ) ) :
									?>
									<option value="<?php echo $buyerproducts->get_id(); ?>">Buyer</option>
									<?php
								else :
									?>
									<?php
									foreach ( $products as $product ) {
										$product_details = json_encode(
											array(
												'id'    => $product->get_id(),
												'price' => $product->get_price(),
												'name'  => $product->get_name(),
											)
										);
										?>
										<option 
										<?php
												echo trade_arr_arg( $_GET, 'productId' ) == $product->get_id() ?
													'selected' : '';
										?>
												 value="<?php echo $product->get_id(); ?>" data-price="<?php echo $product->get_price(); ?>"><?php echo $product->get_name(); ?> (<?php echo $product->get_price_html(); ?>)</option>
										<?php
									}
								endif;
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label ng-binding">Payment method</label>
						<select name="paymentMethod" id="" class="form-control">

							<option value="bt">Bank Transfer</option>

						</select>
					</div>
					<div class="form-group">
						<div class="flex-just-content">

							<button class="payment-submit .c-button--primary">
								submit
							</button>
							<!-- <div>
										<h2> NGN <span id="trade-fair-form-price"> </span></h2>
									</div> -->
						</div>

					</div>
				</form>
			</div>
		</div>
	</section>

</div>

<?php
get_footer( 'home', array( 'products' => $products ) );
