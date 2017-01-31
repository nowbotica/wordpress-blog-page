<?php
/**
 * Redeem gift card template.
 *
 * This template can be overriden by copying this file to your-theme/woocommerce-plugin-templates/redeem-gift-card.php
 *
 * @author 		Jeroen Sormani
 * @package 	WooCommerce Plugin Templates/Templates
 * @version     1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Don't allow direct access
?><div class='redeem-gift-card'>

	<form method='post'>
		<label><strong><?php _e( 'Your gift card code', 'wordpress' ); ?></strong>
			<input type='text' name='gift_card' id='gift-card-input'>
		</label>
		<input type='submit'>
	</form>

</div>