<?php
	add_action('woocommerce_checkout_order_processed', 'custom_process_order');
	function custom_process_order($order_id) {
	    $order = new WC_Order( $order_id );
	    //do something
	    /*
			available variable :
			"id",
			"order_key",
			"billing_first_name",
			"billing_last_name",
			"billing_company",
			"billing_address_1",
			"billing_address_2",
			"billing_city",
			"billing_postcode",
			"billing_country",
			"billing_state",
			"billing_email",
			"billing_phone",
			"shipping_first_name",
			"shipping_last_name",
			"shipping_company",
			"shipping_address_1",
			"shipping_address_2",
			"shipping_city",
			"shipping_postcode",
			"shipping_country",
			"shipping_state",
			"shipping_method",
			"shipping_method_title",
			"payment_method",
			"payment_method_title",
			"order_subtotal",
			"order_discount",
			"cart_discount",
			"order_tax",
			"order_shipping",
			"order_shipping_tax",
			"order_total",
			"status",
			"shop_name",
			"note"
	    */
	}
?>