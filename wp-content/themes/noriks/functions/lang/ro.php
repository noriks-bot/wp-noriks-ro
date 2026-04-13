<?php

add_filter( 'gettext', 'translate_attribute_labels', 20, 3 );

function translate_attribute_labels( $translated_text, $text, $domain ) {
    if ( $text === 'Choose your size' ) {
        $translated_text = 'Mărime';
    }
    return $translated_text;
}

add_filter( 'woocommerce_checkout_fields', 'custom_billing_phone_placeholder' );
function custom_billing_phone_placeholder( $fields ) {
    $fields['billing']['billing_phone']['placeholder'] = 'Număr de telefon mobil';
    return $fields;
}

add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number' );
function change_woocommerce_order_number( $order_id ) {
    return 'NORIKS-RO-' . $order_id;
}

add_filter( 'default_checkout_billing_country', '__return_ro' );
add_filter( 'default_checkout_shipping_country', '__return_ro' );
function __return_ro() {
    return 'RO';
}

add_filter( 'woocommerce_checkout_fields', 'fix_country_to_romania_and_hide' );
function fix_country_to_romania_and_hide( $fields ) {
    WC()->customer->set_billing_country( 'RO' );
    WC()->customer->set_shipping_country( 'RO' );

    unset( $fields['billing']['billing_country'] );
    unset( $fields['shipping']['shipping_country'] );

    return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'hide_checkout_fields' );
function hide_checkout_fields( $fields ) {
    unset( $fields['billing']['billing_state'] );
    unset( $fields['shipping']['shipping_state'] );

    return $fields;
}
