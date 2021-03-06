<?php
/**
 * Checkout shipping information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-shipping.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 3.0.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="woocommerce-shipping-fields">
	<?php if ( true === WC()->cart->needs_shipping_address() ) : ?>

		<?php
			if ( empty( $_POST ) ) {

				$ship_to_different_address = get_option( 'woocommerce_ship_to_destination' ) === 'shipping' ? 1 : 0;
				$ship_to_different_address = apply_filters( 'woocommerce_ship_to_different_address_checked', $ship_to_different_address );

			} else {

				$ship_to_different_address = $checkout->get_value( 'ship_to_different_address' );

			}
		?>

		<div id="ship-to-different-address">
			<input id="ship-to-different-address-checkbox" class="input-checkbox sc-checkbox" <?php checked( $ship_to_different_address, 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" />
			<label for="ship-to-different-address-checkbox" class="checkbox"><?php _e( 'Ship to a different address?', 'woocommerce' ); ?></label>
		</div>

		<?php
			$collumns = 2;
			$fields_per_collumn = ceil(count($checkout->checkout_fields['shipping']) / $collumns);
			$index = 0;
			$index_collumns = 1;
		?>

		<div class="shipping_address">

			<?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>

			<div class="woocommerce-billing-collumns">
				<div class="woocommerce-billing-collumn odd clearfix">
					<?php foreach ( $checkout->get_checkout_fields( 'shipping' ) as $key => $field ) : ?>
						<?php if ($index >= $fields_per_collumn && $index_collumns < $collumns): ?>
							<?php
								$index_collumns++;
							?>
							</div><div class="woocommerce-billing-collumn <?php echo ($index_collumns % 2 == 0 ? 'even' : 'odd'); ?> clearfix">
						<?php endif; ?>

						<?php
							if (!empty($field['type']) && $field['type'] == 'checkbox')
								$field['input_class'] = 'sc-checkbox';
							woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
							$index++;
						?>

					<?php endforeach; ?>
				</div>
			</div>

			<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>

		</div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

	<?php if ( apply_filters( 'woocommerce_enable_order_notes_field', 'yes' === get_option( 'woocommerce_enable_order_comments', 'yes' ) ) ) : ?>

		<?php if ( ! WC()->cart->needs_shipping() || wc_ship_to_billing_address_only() ) : ?>

			<h3><?php _e( 'Additional information', 'woocommerce' ); ?></h3>

		<?php endif; ?>

		<?php
			$collumns = 2;
			$fields_per_collumn = ceil(count($checkout->get_checkout_fields( 'order' )) / $collumns);
			$index = 0;
			$index_collumns = 1;
		?>

		<div class="woocommerce-billing-collumns bottom-collumns">
			<div class="woocommerce-billing-collumn odd clearfix">
				<?php foreach ( $checkout->get_checkout_fields( 'order' ) as $key => $field ) : ?>
					<?php if ($index >= $fields_per_collumn && $index_collumns < $collumns): ?>
						<?php
							$index_collumns++;
						?>
						</div><div class="woocommerce-billing-collumn <?php echo ($index_collumns % 2 == 0 ? 'even' : 'odd'); ?> clearfix">
					<?php endif; ?>

					<?php
						if (!empty($field['type']) && $field['type'] == 'checkbox')
							$field['input_class'] = 'sc-checkbox';
						woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
						$index++;
					?>

				<?php endforeach; ?>
			</div>
		</div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
	<div class="shiping-address-continue shipping_address_bottom"><a class="button sc-button woocommerce-button-next-step"><?php _e( 'Continue', 'scalia' ); ?></a></div>
</div>
