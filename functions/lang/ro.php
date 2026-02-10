<?php
/**
 * Romanian (RO) Language Configuration
 * Noriks Romania Store
 */

// Translate WooCommerce attribute labels
add_filter( 'gettext', 'translate_attribute_labels_ro', 20, 3 );
function translate_attribute_labels_ro( $translated_text, $text, $domain ) {
    $translations = array(
        'Choose your size' => 'Alegeți mărimea',
        'Choose an option' => 'Alegeți o opțiune',
        'Add to cart' => 'Adaugă în coș',
        'Select options' => 'Selectați',
        'View cart' => 'Vezi coșul',
        'Checkout' => 'Finalizare comandă',
        'Proceed to checkout' => 'Continuă la plată',
        'Update cart' => 'Actualizează coșul',
        'Apply coupon' => 'Aplică cupon',
        'Coupon code' => 'Cod cupon',
        'Cart totals' => 'Total coș',
        'Subtotal' => 'Subtotal',
        'Total' => 'Total',
        'Shipping' => 'Livrare',
        'Free shipping' => 'Livrare gratuită',
    );
    
    if ( isset( $translations[$text] ) ) {
        return $translations[$text];
    }
    return $translated_text;
}

// Checkout phone placeholder
add_filter( 'woocommerce_checkout_fields', 'custom_billing_phone_placeholder_ro' );
function custom_billing_phone_placeholder_ro( $fields ) {
    $fields['billing']['billing_phone']['placeholder'] = 'Mobil (exemplu: 0721123456)';
    return $fields;
}

// Order number prefix
add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number_ro' );
function change_woocommerce_order_number_ro( $order_id ) {
    $prefix = 'NORIKS-RO-';
    return $prefix . $order_id;
}

// Force country to Romania
add_filter( 'default_checkout_billing_country', '__return_ro' );
add_filter( 'default_checkout_shipping_country', '__return_ro' );
function __return_ro() {
    return 'RO';
}

// Force country to Romania and hide country fields
add_filter( 'woocommerce_checkout_fields', 'fix_country_to_romania_and_hide' );
function fix_country_to_romania_and_hide( $fields ) {
    WC()->customer->set_billing_country( 'RO' );
    WC()->customer->set_shipping_country( 'RO' );
    
    unset( $fields['billing']['billing_country'] );
    unset( $fields['shipping']['shipping_country'] );
    
    return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'hide_checkout_fields_ro' );
function hide_checkout_fields_ro( $fields ) {
    unset( $fields['billing']['billing_state'] );
    unset( $fields['shipping']['shipping_state'] );
    unset( $fields['shipping']['shipping_address_2'] );
    return $fields;
}

/**
 * Romanian translations for hardcoded strings
 */
function noriks_ro_translations() {
    return array(
        // Hero section
        'Tričko, které řeší všechny problémy.' => 'Tricoul care rezolvă toate problemele.',
        'KOUPIT TEĎ' => 'CUMPĂRĂ ACUM',
        
        // Collections
        'Nakupujte podle kolekce' => 'Cumpărați pe colecții',
        'Všechny produkty' => 'Toate produsele',
        
        // Category names
        'Trička' => 'Tricouri',
        'Boxerky' => 'Boxeri',
        'Sady' => 'Seturi',
        'Startovací balíček' => 'Pachet de start',
        
        // Category descriptions
        'Pohodlí po celý den. Bez vytahování.' => 'Confort toată ziua. Fără să se ridice.',
        'Měkké. Prodyšné. Spolehlivé.' => 'Moi. Respirabile. De încredere.',
        'Nejlepší poměr ceny a kvality v setu.' => 'Cel mai bun raport calitate-preț în set.',
        'Vyzkoušej NORIKS výhodněji.' => 'Încearcă NORIKS la un preț mai bun.',
        
        // Header marquee
        'Doprava zdarma pro objednávky nad 1700 Kč' => 'Livrare gratuită pentru comenzi peste 150 lei',
        'Doprava zdarma při objednávkách nad 1700 Kč' => 'Livrare gratuită pentru comenzi peste 150 lei',
        '30 dní bez rizika – vyzkoušej bez obav' => '30 de zile fără risc – încearcă fără griji',
        
        // Product page features
        'Platba na dobírku' => 'Ramburs la livrare',
        'Vyzkoušejte 30 dní, bez rizika' => 'Încercați 30 de zile, fără risc',
        
        // Shipping/delivery
        'Objednejte během následujících' => 'Comandați în următoarele',
        'Doručení od' => 'Livrare de la',
        'do' => 'până la',
        
        // Cart
        'Prosím, pospěš si! Někdo si právě objednal jeden z produktů ve tvém košíku. Rezervace platí už jen' => 'Vă rugăm să vă grăbiți! Cineva tocmai a comandat unul dintre produsele din coșul dvs. Rezervarea este valabilă pentru',
        'minut' => 'minute',
    );
}

/**
 * Romanian weekday names
 */
function noriks_ro_weekdays() {
    return array(
        'Duminică',
        'Luni',
        'Marți',
        'Miercuri',
        'Joi',
        'Vineri',
        'Sâmbătă'
    );
}
