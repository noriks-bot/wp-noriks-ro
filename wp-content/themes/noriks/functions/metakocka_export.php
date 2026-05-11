<?php
/**
 * Metakocka export — REST API order response massaging
 *
 * Background-only handler: user keeps filling the checkout exactly as before.
 * When Metakocka pulls an order via the WooCommerce REST API
 * (woocommerce_rest_prepare_shop_order_object), we:
 *   1. Force billing.country and shipping.country to "RO".
 *   2. Backfill shipping.email / phone / city / state from custom meta when set.
 *   3. Prefix the custom RO address fields with "BL:", "SC:", "ET:", "AP:"
 *      on the BILLING and SHIPPING meta keys so Metakocka can map them
 *      straight into the delivery address.
 *   4. Translate the WC state code (AB, AR, …) into the full judet name
 *      (Alba, Arad, …) for both billing and shipping.
 *   5. Fall back to billing values when shipping.city / shipping.state are
 *      empty (covers checkouts without a separate shipping form).
 *
 * Logic is a 1:1 port of the working filter from the reference theme
 * (storefront-child / checkout_fiters.php → my_wc_prepare_shop_order).
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

    // 1) Force country = RO
    $order_data['billing']['country']  = 'RO';
    $order_data['shipping']['country'] = 'RO';

    // 2) Backfill shipping contact + locality info from custom meta if present
    $shipping_email = get_post_meta( $order_id, '_shipping_email', true );
    $shipping_phone = get_post_meta( $order_id, '_shipping_phone', true );
    $shipping_city2 = get_post_meta( $order_id, '_shipping_city2', true );
    $shipping_jud   = get_post_meta( $order_id, '_shipping_jud', true );

    if ( $shipping_email !== '' ) { $order_data['shipping']['email'] = $shipping_email; }
    if ( $shipping_phone !== '' ) { $order_data['shipping']['phone'] = $shipping_phone; }
    if ( $shipping_city2 !== '' ) { $order_data['shipping']['city']  = $shipping_city2; }
    if ( $shipping_jud   !== '' ) { $order_data['shipping']['state'] = $shipping_jud; }

    // 3) Prefix BL/SC/ET/AP meta values so Metakocka picks up labelled parts.
    //    We persist the prefix to the DB only if the stored value does not
    //    already contain the label, then expose the prefixed value back
    //    through meta_data on the response.
    $prefix_map = array(
        '_billing_address_bl'  => 'BL:',
        '_billing_address_sc'  => 'SC:',
        '_billing_address_et'  => 'ET:',
        '_billing_address_ap'  => 'AP:',
        '_shipping_address_bl' => 'BL:',
        '_shipping_address_sc' => 'SC:',
        '_shipping_address_et' => 'ET:',
        '_shipping_address_ap' => 'AP:',
    );

    foreach ( $prefix_map as $meta_key => $label ) {
        $stored = get_post_meta( $order_id, $meta_key, true );

        // Skip if there is nothing to label.
        if ( $stored === '' || $stored === null ) {
            continue;
        }

        // Only add the prefix if it is not already present.
        if ( strpos( (string) $stored, $label ) === false ) {
            $stored = $label . $stored;
            update_post_meta( $order_id, $meta_key, $stored );
        }

        // Reflect the (possibly updated) value in the REST response too.
        if ( ! empty( $order_data['meta_data'] ) && is_array( $order_data['meta_data'] ) ) {
            foreach ( $order_data['meta_data'] as $idx => $meta_obj ) {
                $key = is_object( $meta_obj ) ? $meta_obj->key : ( isset( $meta_obj['key'] ) ? $meta_obj['key'] : null );
                if ( $key === $meta_key ) {
                    if ( is_object( $meta_obj ) && isset( $meta_obj->value ) ) {
                        $order_data['meta_data'][ $idx ]->value = $stored;
                    } elseif ( is_array( $meta_obj ) ) {
                        $order_data['meta_data'][ $idx ]['value'] = $stored;
                    }
                }
            }
        }
    }

    // 4) Map state code → full judet name (defensive — in noriks-ro the
    //    state is usually already a full name, but we keep parity with the
    //    reference theme in case a code slips through).
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

    // 5) Fall back to billing values when shipping is empty
    if ( empty( $order_data['shipping']['state'] ) ) {
        $order_data['shipping']['state'] = $order_data['billing']['state'];
    }
    if ( empty( $order_data['shipping']['city'] ) ) {
        $order_data['shipping']['city'] = $order_data['billing']['city'];
    }

    $response->set_data( $order_data );
    return $response;
}
