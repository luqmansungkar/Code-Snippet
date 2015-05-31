<?php
	add_filter('woocommerce_available_payment_gateways','filter_gateways');

	function filter_gateways($gateways){
	global $woocommerce;
	$chosen_methods = WC()->session->get( 'chosen_shipping_methods' );
	$chosen_shipping = $chosen_methods[0];

	//when cod is selected, remove other payment method, vice versa
	if ($chosen_shipping == 'flat_rate:cod-luar-jadetabek' || $chosen_shipping == 'flat_rate:cod-jadetabek' ) {
	    unset($gateways['bacs']);
	    unset($gateways['cheque']);
	}elseif ($chosen_shipping == 'jne_shipping') {
	    unset($gateways['cod']);
	}
	return $gateways;
	}
?>