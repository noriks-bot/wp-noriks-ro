<?php
/**
 * Currency override — display prices in RON (lei) on frontend
 * WC store currency stays EUR, prices in DB are EUR
 * Frontend display converts EUR → RON using fixed rate
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/* EUR → RON conversion rate (1 EUR = X RON) */
define( 'NORIKS_EUR_TO_RON', 5.10 );

/**
 * Override currency symbol to "lei" on frontend only
 */
add_filter( 'woocommerce_currency_symbol', function( $symbol, $currency ) {
    if ( ! is_admin() ) {
        return 'lei';
    }
    return $symbol;
}, 9999, 2 );

/**
 * Override product prices — convert EUR to RON for display
 */
add_filter( 'woocommerce_product_get_price', 'noriks_eur_to_ron', 9999, 2 );
add_filter( 'woocommerce_product_get_regular_price', 'noriks_eur_to_ron', 9999, 2 );
add_filter( 'woocommerce_product_get_sale_price', 'noriks_eur_to_ron_sale', 9999, 2 );
add_filter( 'woocommerce_product_variation_get_price', 'noriks_eur_to_ron', 9999, 2 );
add_filter( 'woocommerce_product_variation_get_regular_price', 'noriks_eur_to_ron', 9999, 2 );
add_filter( 'woocommerce_product_variation_get_sale_price', 'noriks_eur_to_ron_sale', 9999, 2 );

function noriks_eur_to_ron( $price, $product ) {
    if ( is_admin() && ! wp_doing_ajax() ) return $price;
    if ( $price === '' || $price === null ) return $price;
    return round( (float) $price * NORIKS_EUR_TO_RON, 2 );
}

function noriks_eur_to_ron_sale( $price, $product ) {
    if ( is_admin() && ! wp_doing_ajax() ) return $price;
    if ( $price === '' || $price === null ) return '';
    return round( (float) $price * NORIKS_EUR_TO_RON, 2 );
}

/**
 * Override price format — put "lei" after number
 */
add_filter( 'wc_price_args', function( $args ) {
    if ( ! is_admin() ) {
        $args['currency'] = 'RON';
    }
    return $args;
});

/**
 * Cart/order shipping, fees, totals — already calculated from converted product prices
 * No additional conversion needed since product prices are already in RON
 */
