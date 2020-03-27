<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

wp_enqueue_script('scalia-checkout');
wp_enqueue_script('scalia-woocommerce');

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div id="woo-checkout" class="sc-tabs sc-tabs-style-1 sc_content_element">
			<div class="sc_wrapper sc_tour_tabs_wrapper ui-tabs clearfix">
				<ul class="sc_tabs_nav ui-tabs-nav resp-tabs-list clearfix">
					<li class="checkout_billing_tab">
						<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>
							<?php _e( 'Billing &amp; Shipping', 'woocommerce' ); ?>
						<?php else : ?>
							<?php _e( 'Billing details', 'woocommerce' ); ?>
						<?php endif; ?>
					</li>
					<?php if (WC()->cart->needs_shipping() ) : ?>
					<li class="checkout_shipping_tab">
						<?php _e( 'Shipping address', 'woocommerce' ); ?>
					</li>
					<?php endif; ?>
					<li class="checkout_order_review_tab">
						<?php _e( 'Review & Payment', 'scalia' ); ?>
					</li>
				</ul>
				<div class="resp-tabs-container">
					<div class="sc_tab ui-tabs-panel sc_ui-tabs-hide clearfix" id="tab-checkout_billing">
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
					</div>

					<?php if (WC()->cart->needs_shipping() ) : ?>
					<div class="sc_tab ui-tabs-panel sc_ui-tabs-hide clearfix" id="tab-checkout_shipping">
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
					<?php endif; ?>
					<div class="sc_tab ui-tabs-panel sc_ui-tabs-hide clearfix" id="tab-checkout_order_review">
						<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

						<div id="order_review" class="woocommerce-checkout-review-order">
							<?php do_action( 'woocommerce_checkout_order_review' ); ?>
						</div>

						<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
					</div>
				</div>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
	<?php endif; ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
