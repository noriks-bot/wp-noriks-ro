<?php
/**
 * Metakocka export — REST API order response massaging
 *
 * Background-only handler. The user keeps filling the checkout exactly as
 * before; this only adjusts what Metakocka sees when it pulls orders via
 * the WooCommerce REST API (woocommerce_rest_prepare_shop_order_object).
 *
 * Behaviour is matched 1:1 to the reference project
 * (storefront-child / functions/checkout_fiters.php :: my_wc_prepare_shop_order)
 * which is known to import correctly into Metakocka.
 *
 * What we change in the REST response:
 *   1. Force billing.country and shipping.country to "RO".
 *   2. Backfill shipping.email / phone / city / state from custom meta
 *      (_shipping_email, _shipping_phone, _shipping_city2, _shipping_jud)
 *      when those keys exist. Older RO order flows use them; in noriks-ro
 *      they are typically empty and this is a no-op.
 *   3. Translate the WC state code (AB, AR, ...) to the full judet name
 *      (Alba, Arad, ...) for both billing and shipping — defensive, since
 *      noriks-ro usually stores the full name already (set_billing_state
 *      with the resolved county name).
 *   4. Fall back to billing values when shipping.city / shipping.state are
 *      empty (covers checkouts without a separate shipping form, which is
 *      the standard noriks-ro flow).
 *
 * What we deliberately DO NOT change:
 *   - The raw stored values of _billing_address_bl|sc|et|ap and the
 *     _shipping_* counterparts. The reference theme has a block that
 *     looks like it prefixes them with "BL:"/"SC:"/"ET:"/"AP:" but the
 *     condition is structured so update_post_meta is never reached
 *     (the constructed string always starts with the label, so
 *     `strpos !== false` is always true and the else branch never runs).
 *     The values therefore remain unprefixed in the database and in
 *     meta_data on the REST response. We mirror that behaviour exactly
 *     so:
 *       - the admin order page in noriks-ro (which prepends "BL: " when
 *         rendering, see checkout_mods.php) keeps showing a single
 *         label, not a doubled "BL: BL:5".
 *       - Metakocka receives the same shape it currently consumes from
 *         the reference store.
 *
 * @package noriks
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_filter( 'woocommerce_rest_prepare_shop_order_object', 'noriks_ro_metakocka_prepare_order', 10, 3 );

function noriks_ro_metakocka_prepare_order( $response, $object, $request ) {

    $order_data = $response->get_data();
    if ( empty( $order_data['id'] ) ) {
        return $response;
    }

    $order_id = $order_data['id'];

    // 1) Force country = RO on both addresses
    $order_data['billing']['country']  = 'RO';
    $order_data['shipping']['country'] = 'RO';

    // 2) Backfill shipping contact + locality info from custom meta if present
    $shipping_email = get_post_meta( $order_id, '_shipping_email', true );
    $shipping_phone = get_post_meta( $order_id, '_shipping_phone', true );
    $shipping_city2 = get_post_meta( $order_id, '_shipping_city2', true );
    $shipping_jud   = get_post_meta( $order_id, '_shipping_jud',   true );

    if ( $shipping_email !== '' ) { $order_data['shipping']['email'] = $shipping_email; }
    if ( $shipping_phone !== '' ) { $order_data['shipping']['phone'] = $shipping_phone; }
    if ( $shipping_city2 !== '' ) { $order_data['shipping']['city']  = $shipping_city2; }
    if ( $shipping_jud   !== '' ) { $order_data['shipping']['state'] = $shipping_jud; }

    // 3) Judet code -> full name (defensive; usually no-op in noriks-ro
    //    because billing_state is already a full name)
    $county_map = array(
        'AB' => 'Alba',
        'AR' => 'Arad',
        'AG' => 'Arges',
        'BC' => 'Bacau',
        'BH' => 'Bihor',
        'BN' => 'Bistrita-Nasaud',
        'BT' => 'Botosani',
        'BR' => 'Braila',
        'BV' => 'Brasov',
        'B'  => 'Bucuresti',
        'BZ' => 'Buzau',
        'CL' => 'Calarasi',
        'CS' => 'Caras-Severin',
        'CJ' => 'Cluj',
        'CT' => 'Constanta',
        'CV' => 'Covasna',
        'DB' => 'Dambovita',
        'DJ' => 'Dolj',
        'GL' => 'Galati',
        'GR' => 'Giurgiu',
        'GJ' => 'Gorj',
        'HR' => 'Harghita',
        'HD' => 'Hunedoara',
        'IL' => 'Ialomita',
        'IS' => 'Iasi',
        'IF' => 'Ilfov',
        'MM' => 'Maramures',
        'MH' => 'Mehedinti',
        'MS' => 'Mures',
        'NT' => 'Neamt',
        'OT' => 'Olt',
        'PH' => 'Prahova',
        'SJ' => 'Salaj',
        'SM' => 'Satu Mare',
        'SB' => 'Sibiu',
        'SV' => 'Suceava',
        'TR' => 'Teleorman',
        'TM' => 'Timis',
        'TL' => 'Tulcea',
        'VL' => 'Valcea',
        'VS' => 'Vaslui',
        'VN' => 'Vrancea',
    );

    $bs = isset( $order_data['billing']['state'] )  ? $order_data['billing']['state']  : '';
    $ss = isset( $order_data['shipping']['state'] ) ? $order_data['shipping']['state'] : '';

    if ( $bs !== '' && isset( $county_map[ $bs ] ) ) {
        $order_data['billing']['state'] = $county_map[ $bs ];
    }
    if ( $ss !== '' && isset( $county_map[ $ss ] ) ) {
        $order_data['shipping']['state'] = $county_map[ $ss ];
    }

    // 4) Fall back to billing values when shipping is empty
    if ( empty( $order_data['shipping']['state'] ) ) {
        $order_data['shipping']['state'] = $order_data['billing']['state'];
    }
    if ( empty( $order_data['shipping']['city'] ) ) {
        $order_data['shipping']['city'] = $order_data['billing']['city'];
    }

    $response->set_data( $order_data );
    return $response;
}
