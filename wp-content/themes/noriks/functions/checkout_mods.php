<?php
/**
 * Checkout Modifications — Vigoshop CDN CSS + WC field config
 * Works WITHIN WooCommerce checkout system (no template bypass)
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Dequeue ALL WP/WC/theme styles on checkout, load vigoshop CDN CSS
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;

    // Remove ALL registered styles except admin-bar
    global $wp_styles;
    // Styles — keep ALL (vigoshop CDN + WC + Stripe all needed)

    // Scripts — keep ALL (payment gateways need their JS to render fields)

    // Vigoshop CSS — LOCAL copies (no CDN dependency)
    $vendor = '/css/vendor/';
    $css = array(
        'vigo-select2'           => $vendor . 'select2.css',
        'vigo-brands'            => $vendor . 'brands.css',
        'vigo-child'             => $vendor . 'style.css',
        'vigo-app'               => $vendor . 'app-bb7116ca22.css',
        'vigo-swiper'            => $vendor . 'swiper.min.css',
        'vigo-brand'             => $vendor . 'vigoshop-2809b8fc43.css',
        'vigo-agent-kc'          => $vendor . 'agent-kc-d24968c5d8.css',
        'vigo-cart-warranty'     => $vendor . 'cart-warranty-294993db14.css',
        'vigo-checkout-triggers' => $vendor . 'checkout-extra-triggers-8a82c39c7f.css',
        'vigo-checkout-general'  => $vendor . 'custom-checkout-general-3ba2df51f0.css',
        'vigo-checkout-hr'       => $vendor . 'custom-checkout-hr-708bf051cd.css',
        'vigo-payment-notice'    => $vendor . 'custom-payment-notice-0baf6bff40.css',
        'vigo-header'            => $vendor . 'header-f98b75e0d2.css',
        'vigo-shop-elements'     => $vendor . 'general-shop-elements-a82fb8d5a2.css',
        'vigo-payment-fixes'     => $vendor . 'payment-methods-fixes-75bc076f0b.css',
        'vigo-checkout-review'   => $vendor . 'checkout-order-review-17423b66f5.css',
        'vigo-checkout-upsell'   => $vendor . 'checkout-upsell-49a595b20c.css',
        'vigo-shipping'          => $vendor . 'shipping-method-14ad2b0a1f.css',
        'vigo-parcel'            => $vendor . 'parcel-pickup-hr-8754cf5c08.css',
        'vigo-parcel-buttons'    => $vendor . 'extra-shipping-method-buttons-093d5c786e.css',
        'vigo-pdf'               => $vendor . 'pdf-products-2009e19a3b.css',
        'vigo-pdf-special'       => $vendor . 'pdf-special-offer-545e3ee266.css',
        'vigo-terms'             => $vendor . 'terms-and-conditions-link-4d809e8b6d.css',
        'vigo-email-checkbox'    => $vendor . 'email-checkbox-subscription-1def327263.css',
        'vigo-free-shipping'     => $vendor . 'free-shipping-above-quantity-02588a20ff.css',
        'vigo-loader'            => $vendor . 'loader-c25fc35077.css',
        'vigo-check-client'      => $vendor . 'check-client-8571deb0ef.css',
    );

    $uri = get_template_directory_uri();
    $dir = get_template_directory();
    $prev = array();
    foreach ( $css as $handle => $path ) {
        $file = $dir . $path;
        $ver = file_exists( $file ) ? filemtime( $file ) : '1';
        wp_enqueue_style( $handle, $uri . $path, $prev, $ver );
        $prev = array( $handle );
    }

    // Our checkout override CSS — LAST
    $file = $dir . '/css/checkout.css';
    wp_enqueue_style( 'noriks-checkout', $uri . '/css/checkout.css', $prev, file_exists($file) ? md5_file($file) : '1' );



    // RO checkout JS — county/locality dropdowns
    $js_file = $dir . '/js/ro-checkout-localitati.js';
    wp_enqueue_script( 'ro-checkout-localitati', $uri . '/js/ro-checkout-localitati.js', array('jquery','selectWoo'), file_exists($js_file) ? filemtime($js_file) : '1', true );
    wp_localize_script( 'ro-checkout-localitati', 'roLocalitatiConfig', array(
        'jsonUrl' => $uri . '/js/ro-localitati.json',
    ));

}, 9999 );

/**
 * Also dequeue styles that get enqueued late (after priority 9999)
 */
add_action( 'wp_print_styles', function() {
    if ( ! is_checkout() ) return;
    // Remove any storefront/theme CSS that snuck through
    $remove = array( 'storefront-style', 'storefront-woocommerce-style', 'storefront-gutenberg-blocks', 'wp-block-library' );
    foreach ( $remove as $h ) wp_dequeue_style( $h );
}, 9999 );

/**
 * Inline styles from vigoshop <head>
 */
add_action( 'wp_head', function() {
    if ( ! is_checkout() ) return;
    echo '<style>tr.cart-discount.coupon-get1free .amount{display:none;}</style>';
    echo '<style>img:is([sizes="auto" i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}</style>';
    echo '<style>.woocommerce form .form-row .required{visibility:visible;}</style>';
}, 5 );

/**
 * CSS-only overrides — injected AFTER all CDN CSS to guarantee winning specificity
 * SAFE: no script/style dequeuing, purely additive CSS
 */
add_action( 'wp_footer', function() {
    if ( ! is_checkout() ) return;
    ?>
    <style id="noriks-checkout-overrides">
    /* Payment methods — native WC rendering, no overrides */

    /* ===== ORDER SUMMARY ===== */
    .vigo-checkout-total .review-section-container {
      display: flex !important;
      align-items: center !important;
      padding: 0 0 10px !important;
      margin: 0 0 10px !important;
      border-bottom: 1px solid #e3e6e8 !important;
      color: #5f6061 !important;
      font-size: 14px !important;
      line-height: 21px !important;
      position: relative !important;
    }
    .vigo-checkout-total .review-product-info {
      display: flex !important;
      flex: 1 !important;
      min-width: 0 !important;
    }
    .vigo-checkout-total .review-product-info > div:first-child {
      white-space: nowrap !important;
      overflow: hidden !important;
      text-overflow: ellipsis !important;
    }
    .vigo-checkout-total .info-price {
      text-align: right !important;
      min-width: 60px !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
    }
    .vigo-checkout-total .review-product-remove {
      width: 0 !important;
      display: none !important;
    }
    .vigo-checkout-total__sum {
      padding: 25px 0 0 !important;
      color: #232f3e !important;
    }
    .vigo-checkout-total__sum .f--bold,
    .vigo-checkout-total__sum .price_total_wrapper {
      font-weight: 700 !important;
      color: #232f3e !important;
    }

    /* ===== FIELD DESCRIPTIONS (helper text under inputs) ===== */
    body.woocommerce-checkout .form-row .description {
      display: flex !important;
      justify-content: flex-end !important;
      font-size: 13px !important;
      color: #5f6061 !important;
      margin-top: 6px !important;
      line-height: 1.4 !important;
    }
    body.woocommerce-checkout .form-row .description .desc-left {
      margin-right: auto !important;
      text-align: left !important;
    }
    body.woocommerce-checkout .form-row .description .desc-right {
      text-align: right !important;
    }

    /* ===== SHIPPING METHOD — force show (vigoshop CSS hides, JS shows) ===== */
    #custom_shipping .shipping_method_custom {
      display: block !important;
    }
    #custom_shipping .shipping_method_custom li {
      display: list-item !important;
      list-style: none !important;
      margin: 0 0 3px !important;
    }
    #custom_shipping .shipping_method_custom label,
    #custom_shipping .checkedlabel {
      display: flex !important;
      align-items: center !important;
      background: #f2feee !important;
      border: 1px solid #47b426 !important;
      border-radius: 5px !important;
      padding: 10px 15px !important;
      cursor: pointer !important;
    }
    #custom_shipping .outer-wrapper {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      flex: 1 !important;
    }
    #custom_shipping .inner-wrapper-dates {
      display: block !important;
    }
    #custom_shipping .hs-custom-date {
      display: inline !important;
      font-weight: 700 !important;
      font-size: 14px !important;
    }
    #custom_shipping .inner-wrapper-img {
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
    }
    #custom_shipping .shipping_method_delivery_price {
      display: block !important;
      background: #9ce79c !important;
      color: #228b22 !important;
      border-radius: 5px !important;
      padding: 0 10.5px !important;
      margin: 5px 0 !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      line-height: 21px !important;
    }
    #custom_shipping .delivery_img img {
      height: 30px !important;
    }
    #custom_shipping .shipping_method_field {
      display: none !important;
    }
    #custom_shipping label svg {
      width: 19px !important;
      height: 14px !important;
      margin-right: 10px !important;
      flex-shrink: 0 !important;
    }

    /* ===== BUTTON/WARRANTY/TERMS — match form padding ===== */
    body.woocommerce-checkout #order_review,
    body.woocommerce-checkout .checkout-warranty,
    body.woocommerce-checkout .agreed_terms_txt {
      padding-left: 40px !important;
      padding-right: 40px !important;
      box-sizing: border-box !important;
    }
    @media (max-width: 560px) {
      body.woocommerce-checkout #order_review,
      body.woocommerce-checkout .checkout-warranty,
      body.woocommerce-checkout .agreed_terms_txt {
        padding-left: 15px !important;
        padding-right: 15px !important;
      }
    }
    /* Warranty margin — set below with button */
    /* Terms margin matches ref */
    body.woocommerce-checkout .agreed_terms_txt {
      margin-bottom: 24px !important;
    }
    /* Button container — tight to content above */
    body.woocommerce-checkout #order_review {
      max-width: none !important;
      margin: 0 !important;
      padding-top: 0 !important;
    }
    /* Remove form bottom padding that creates gap above button */
    body.woocommerce-checkout form.checkout {
      padding-bottom: 10px !important;
    }
    /* Tighten place-order section bottom */
    body.woocommerce-checkout .form-row.place-order {
      margin-bottom: 0 !important;
      padding-bottom: 0 !important;
    }
    /* Warranty tighter to button */
    body.woocommerce-checkout .checkout-warranty {
      margin-top: 20px !important;
      margin-bottom: 16px !important;
    }

    /* ===== Prenume + Nume side by side (50/50) ===== */
    body.woocommerce-checkout #billing_first_name_field,
    body.woocommerce-checkout #billing_last_name_field {
      width: 49% !important;
      display: inline-block !important;
      vertical-align: top !important;
      float: none !important;
    }
    body.woocommerce-checkout #billing_first_name_field {
      margin-right: 2% !important;
    }

    /* ===== Stradă + Nr side by side — Nr same width as BL/SC/ET/AP ===== */
    body.woocommerce-checkout #billing_address_1_field {
      width: 74.5% !important;
      display: inline-block !important;
      vertical-align: top !important;
      margin-right: 2% !important;
      float: none !important;
    }
    body.woocommerce-checkout #billing_address_2_field {
      width: 23.5% !important;
      display: inline-block !important;
      vertical-align: top !important;
      margin-right: 0 !important;
      float: none !important;
    }

    /* ===== BL/SC/ET/AP — 4 columns in a row ===== */
    body.woocommerce-checkout #billing_address_bl_field,
    body.woocommerce-checkout #billing_address_sc_field,
    body.woocommerce-checkout #billing_address_et_field,
    body.woocommerce-checkout #billing_address_ap_field {
      width: 23.5% !important;
      display: inline-block !important;
      vertical-align: top !important;
      margin-right: 2% !important;
      float: none !important;
    }
    body.woocommerce-checkout #billing_address_ap_field {
      margin-right: 0 !important;
    }

    /* ===== Județ / Localitate dropdowns ===== */
    body.woocommerce-checkout #billing_county_field,
    body.woocommerce-checkout #billing_locality_field {
      width: 100% !important;
    }
    body.woocommerce-checkout #billing_county_field .select2-selection,
    body.woocommerce-checkout #billing_locality_field .select2-selection {
      min-height: 50px !important;
      border: 1.5px solid #c9c9c9 !important;
      border-radius: 4px !important;
      box-shadow: inset 1px 1px 3px 0 rgba(0,0,0,0.15) !important;
      padding: 8px 12px !important;
    }
    body.woocommerce-checkout #billing_county_field .select2-selection__rendered,
    body.woocommerce-checkout #billing_locality_field .select2-selection__rendered {
      line-height: 32px !important;
      font-size: 16px !important;
      color: #333 !important;
      padding-left: 6px !important;
    }
    body.woocommerce-checkout #billing_county_field .select2-selection__arrow,
    body.woocommerce-checkout #billing_locality_field .select2-selection__arrow {
      height: 50px !important;
    }
    body.woocommerce-checkout #billing_county_field .select2-selection__placeholder,
    body.woocommerce-checkout #billing_locality_field .select2-selection__placeholder {
      color: #707070 !important;
      text-transform: uppercase !important;
    }
    /* ===== Select2 dropdown — no gap between input and list ===== */
    .select2-container--default.select2-container--open .select2-selection {
      border-bottom-left-radius: 0 !important;
      border-bottom-right-radius: 0 !important;
    }
    .select2-dropdown {
      border-color: #c9c9c9 !important;
      margin-top: -33px !important;
      border-top: none !important;
      border-top-left-radius: 0 !important;
      border-top-right-radius: 0 !important;
    }
    .select2-container--open .select2-dropdown--below {
      border-top: none !important;
    }
    .select2-search--dropdown {
      padding: 6px 8px !important;
    }
    .select2-search--dropdown .select2-search__field {
      padding: 8px !important;
      border: 1px solid #ccc !important;
      border-radius: 3px !important;
    }
    .select2-results__option {
      padding: 8px 12px !important;
    }

    /* Hide billing_postcode — not used in RO checkout */
    body.woocommerce-checkout #billing_postcode_field {
      display: none !important;
    }
    /* Hide billing_country + billing_state — force RO, use custom county */
    body.woocommerce-checkout #billing_country_field,
    body.woocommerce-checkout #billing_state_field {
      display: none !important;
    }

    /* ===== FIELD VALIDATION STATES ===== */
    /* Override WC default validation styles so ours always win */
    body.woocommerce-checkout .form-row.noriks-invalid.woocommerce-validated input,
    body.woocommerce-checkout .form-row.noriks-invalid.woocommerce-validated select,
    body.woocommerce-checkout .form-row.noriks-invalid.woocommerce-validated .select2-selection,
    /* Error state — white bg, red border */
    body.woocommerce-checkout .form-row.noriks-invalid input,
    body.woocommerce-checkout .form-row.noriks-invalid select,
    body.woocommerce-checkout .form-row.noriks-invalid .select2-selection,
    body.woocommerce-checkout #billing_county_field.noriks-invalid .select2-selection,
    body.woocommerce-checkout #billing_locality_field.noriks-invalid .select2-selection {
      border: 2px solid #CC0000 !important;
      background-color: #fff !important;
      box-shadow: none !important;
    }
    /* Error message — pink block under input */
    body.woocommerce-checkout .noriks-field-error {
      display: block !important;
      background: #FDE8E8 !important;
      color: #CC0000 !important;
      font-size: 13px !important;
      font-weight: 500 !important;
      padding: 8px 12px !important;
      margin-top: 4px !important;
      border-radius: 4px !important;
      line-height: 1.4 !important;
    }
    /* Valid state — green border, light green bg */
    body.woocommerce-checkout .form-row.noriks-valid input,
    body.woocommerce-checkout .form-row.noriks-valid select,
    body.woocommerce-checkout .form-row.noriks-valid .select2-selection,
    body.woocommerce-checkout #billing_county_field.noriks-valid .select2-selection,
    body.woocommerce-checkout #billing_locality_field.noriks-valid .select2-selection {
      border: 2px solid #4CAF50 !important;
      background-color: #E8F5E9 !important;
      box-shadow: none !important;
    }
    /* Valid label turns green */
    body.woocommerce-checkout .form-row.noriks-valid > label {
      color: #4CAF50 !important;
    }
    /* Valid checkmark inside input */
    body.woocommerce-checkout .form-row.noriks-valid .woocommerce-input-wrapper {
      position: relative !important;
    }
    body.woocommerce-checkout .form-row.noriks-valid .woocommerce-input-wrapper::after {
      content: '\2713' !important;
      position: absolute !important;
      right: 16px !important;
      top: 50% !important;
      transform: translateY(-50%) !important;
      color: #4CAF50 !important;
      font-size: 20px !important;
      font-weight: 700 !important;
      pointer-events: none !important;
    }
    </style>

    <script id="noriks-checkout-validation">
    jQuery(function($){
      var messages = {
        required: '\u2715 Câmp obligatoriu',
        billing_address_2: '\u2715 Dacă nu aveți număr, introduceți F.N.',
      };
      var submitted = false; /* only validate after first submit attempt */

      /* Intercept submit — validate all fields before WC AJAX */
      $('form.checkout').on('checkout_place_order', function(){
        submitted = true;
        var allValid = true;
        $('.woocommerce-checkout .form-row.validate-required, .woocommerce-checkout .form-row.validate-email, .woocommerce-checkout .form-row.validate-phone').each(function(){
          var input = $(this).find('input, select').first();
          if (input.length && !validateField(input[0], true)) allValid = false;
        });
        if (!allValid) {
          var firstErr = $('.form-row.noriks-invalid').first();
          if (firstErr.length) $('html, body').animate({ scrollTop: firstErr.offset().top - 100 }, 300);
          return false;
        }
        $('#place_order').css('opacity','0.6').text('Se procesează...');
        $('form.checkout').css({'opacity':'0.4','pointer-events':'none','transition':'opacity 0.3s'});
        return true;
      });

      $(document.body).on('checkout_error', function(){
        $('#place_order').css('opacity','1').text('Comandă');
        $('form.checkout').css({'opacity':'1','pointer-events':''});
        submitted = true;
        /* Re-validate all fields to show red borders */
        $('.woocommerce-checkout .form-row.validate-required, .woocommerce-checkout .form-row.validate-email, .woocommerce-checkout .form-row.validate-phone').each(function(){
          var input = $(this).find('input, select').first();
          if (input.length) validateField(input[0], true);
        });
      });

      function showError($row, msg) {
        $row.removeClass('noriks-valid woocommerce-validated').addClass('noriks-invalid woocommerce-invalid');
        if (!$row.find('.noriks-field-error').length) {
          $row.append('<span class="noriks-field-error">' + msg + '</span>');
        } else {
          $row.find('.noriks-field-error').text(msg);
        }
      }

      function showValid($row) {
        $row.removeClass('noriks-invalid woocommerce-invalid').addClass('noriks-valid woocommerce-validated');
        $row.find('.noriks-field-error').remove();
      }

      function clearState($row) {
        $row.removeClass('noriks-invalid noriks-valid woocommerce-invalid woocommerce-validated');
        $row.find('.noriks-field-error').remove();
      }

      function validateField(field, force) {
        var $row = $(field).closest('.form-row');
        var id = $row.attr('id') || '';
        var val = $(field).val()?.trim() || '';
        var isRequired = $row.hasClass('validate-required');
        var isEmail = $row.hasClass('validate-email');
        var isPhone = $row.hasClass('validate-phone');

        /* Only validate after first submit click */
        if (!submitted && !force) return true;

        /* Skip non-required empty fields */
        if (!isRequired && !val) { clearState($row); return true; }

        /* Required check */
        if (isRequired && !val) {
          showError($row, messages[id.replace('_field','')] || messages.required);
          return false;
        }

        /* Email format */
        if (isEmail && val && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
          showError($row, '\u2715 Introduceți o adresă de e-mail validă');
          return false;
        }

        /* Phone format (at least 6 digits) */
        if (isPhone && val && val.replace(/\D/g,'').length < 6) {
          showError($row, '\u2715 Introduceți un număr de telefon valid');
          return false;
        }

        /* Valid */
        if (val) showValid($row);
        return true;
      }

      /* blockUI — let WC use it natively (needed for payment method switching) */

      /* Field descriptions handled by CSS ::after — immune to WC re-renders */

      /* Re-validate on input/change — clears error when value becomes valid */
      $(document).on('input', '.woocommerce-checkout .form-row input', function(){
        if (submitted) validateField(this);
      });
      $(document).on('change', '.woocommerce-checkout .form-row select', function(){
        if (submitted) validateField(this);
      });

      /* Block WC's own validate_field from overriding our validation states */
      $(document.body).on('validate_field', function(e, el){
        var $el = $(el);
        var $row = $el.closest('.form-row');
        if ($row.hasClass('noriks-invalid') || $row.hasClass('noriks-valid')) {
          e.stopImmediatePropagation();
          return false;
        }
      });

      /* Re-apply validation after WC AJAX updates (update_checkout replaces DOM) */
      $(document.body).on('updated_checkout', function(){
        if (!submitted) return;
        $('.woocommerce-checkout .form-row.validate-required').each(function(){
          var input = $(this).find('input, select').first();
          if (input.length) validateField(input[0]);
        });
      });

      /* WC native #place_order button handles submit */
    });
    </script>
    <?php
}, 50 );

/**
 * Body classes — vigoshop expects these
 */
add_filter( 'body_class', function( $classes ) {
    if ( is_checkout() ) {
        $classes[] = 'brand-vigoshop';
        $classes[] = 'theme-vigoshop';
        $classes[] = 'theme-hsplus';
        $classes[] = 'wp-child-theme-hsplus-child';
    }
    return $classes;
});

/**
 * WC checkout field config — match vigoshop RO layout exactly
 * Custom fields: billing_county (select) + billing_locality (select) + billing_address_bl/sc/et/ap
 */
/**
 * Override WC default address field priorities so street comes AFTER our custom county/locality
 */
add_filter( 'woocommerce_default_address_fields', function( $fields ) {
    $fields['address_1']['priority'] = 70;
    $fields['address_2']['priority'] = 71;
    $fields['city']['priority']      = 60;
    $fields['state']['priority']     = 50;
    $fields['postcode']['priority']  = 130;
    return $fields;
}, 999 );

add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    // Remove WC default state/city — we use custom county/locality
    unset( $fields['billing']['billing_state'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_postcode'] );  // RO doesn't use postcode

    // Order — match vigoshop RO
    // Vigoshop RO order: phone(10) > email(20) > name(30/40) > judet(50) > localitate(60) > strada+nr(70/71) > BL/SC/ET/AP(80-83)
    $fields['billing']['billing_phone']['priority']       = 10;
    $fields['billing']['billing_email']['priority']       = 20;
    $fields['billing']['billing_first_name']['priority']  = 30;
    $fields['billing']['billing_last_name']['priority']   = 40;
    // county=50, locality=60 (set in custom field definitions below)
    $fields['billing']['billing_address_1']['priority']   = 70;
    $fields['billing']['billing_address_2']['priority']   = 71;

    // Labels, placeholders
    $fields['billing']['billing_first_name']['label'] = 'Prenume';
    $fields['billing']['billing_first_name']['placeholder'] = 'Prenume';
    $fields['billing']['billing_last_name']['label'] = 'Nume';
    $fields['billing']['billing_last_name']['placeholder'] = 'Nume';
    $fields['billing']['billing_address_1']['label'] = 'Stradă';
    $fields['billing']['billing_address_1']['placeholder'] = 'Stradă';
    $fields['billing']['billing_address_2']['label'] = 'Nr';
    $fields['billing']['billing_address_2']['placeholder'] = 'Nr';
    $fields['billing']['billing_address_2']['required'] = true;
    $fields['billing']['billing_phone']['label'] = 'Telefon';
    $fields['billing']['billing_phone']['placeholder'] = 'Număr de telefon mobil';
    $fields['billing']['billing_phone']['required'] = true;
    $fields['billing']['billing_email']['label'] = 'Adresă de e-mail';
    $fields['billing']['billing_email']['placeholder'] = 'Adresă de e-mail';
    $fields['billing']['billing_email']['required'] = true;
    $fields['billing']['billing_country']['default'] = 'RO';

    // Custom county dropdown (same IDs as vigoshop.ro)
    $county_options = array(
        '' => 'ALEGE - JUDET',
        '1'=>'Alba','2'=>'Arad','3'=>'Arges','4'=>'Bacau','5'=>'Bihor',
        '6'=>'Bistrita-Nasaud','7'=>'Botosani','8'=>'Braila','9'=>'Brasov',
        '10'=>'Bucuresti','11'=>'Buzau','12'=>'Calarasi','13'=>'Caras-Severin',
        '14'=>'Cluj','15'=>'Constanta','16'=>'Covasna','17'=>'Dambovita',
        '18'=>'Dolj','19'=>'Galati','20'=>'Giurgiu','21'=>'Gorj',
        '22'=>'Harghita','23'=>'Hunedoara','24'=>'Ialomita','25'=>'Iasi',
        '26'=>'Ilfov','27'=>'Maramures','28'=>'Mehedinti','29'=>'Mures',
        '30'=>'Neamt','31'=>'Olt','32'=>'Prahova','33'=>'Salaj',
        '34'=>'Satu Mare','35'=>'Sibiu','36'=>'Suceava','37'=>'Teleorman',
        '38'=>'Timis','39'=>'Tulcea','40'=>'Valcea','41'=>'Vaslui','42'=>'Vrancea',
    );
    $fields['billing']['billing_county'] = array(
        'type'        => 'select',
        'label'       => '',
        'required'    => true,
        'options'     => $county_options,
        'class'       => array('form-row','form-row-wide','form-group','col-xs-12','validate-required'),
        'input_class' => array('select','form-input'),
        'priority'    => 50,
        'custom_attributes' => array('data-placeholder' => 'ALEGE - JUDET', 'data-allow_clear' => 'true'),
    );

    // Custom locality dropdown (populated by JS)
    $fields['billing']['billing_locality'] = array(
        'type'        => 'select',
        'label'       => '',
        'required'    => true,
        'options'     => array('' => 'ALEGE - LOCALITATE'),
        'class'       => array('form-row','form-row-wide','form-group','col-xs-12','validate-required'),
        'input_class' => array('select','form-input'),
        'priority'    => 60,
        'custom_attributes' => array('data-placeholder' => 'ALEGE - LOCALITATE', 'data-allow_clear' => 'true'),
    );

    // BL, SC, ET, AP — match vigoshop field names
    $fields['billing']['billing_address_bl'] = array(
        'label' => 'BL', 'placeholder' => 'BL', 'required' => false,
        'class' => array('form-row','form-group','col-xs-3'),
        'input_class' => array('input-text','form-input'), 'priority' => 90,
    );
    $fields['billing']['billing_address_sc'] = array(
        'label' => 'SC', 'placeholder' => 'SC', 'required' => false,
        'class' => array('form-row','form-group','col-xs-3'),
        'input_class' => array('input-text','form-input'), 'priority' => 100,
    );
    $fields['billing']['billing_address_et'] = array(
        'label' => 'ET', 'placeholder' => 'ET', 'required' => false,
        'class' => array('form-row','form-group','col-xs-3'),
        'input_class' => array('input-text','form-input'), 'priority' => 110,
    );
    $fields['billing']['billing_address_ap'] = array(
        'label' => 'AP', 'placeholder' => 'AP', 'required' => false,
        'class' => array('form-row','form-group','col-xs-3'),
        'input_class' => array('input-text','form-input'), 'priority' => 120,
    );

    // Vigoshop CSS classes
    $fields['billing']['billing_first_name']['class'] = array('form-row','form-row-first','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_last_name']['class']  = array('form-row','form-row-last','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_address_1']['class']  = array('form-row','form-row-wide','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_address_2']['class']  = array('form-row','form-row-wide','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_phone']['class']      = array('form-row','form-row-wide','form-group','col-xs-12','validate-required','validate-phone');
    $fields['billing']['billing_email']['class']      = array('form-row','form-row-wide','form-group','col-xs-12','validate-email');

    // Input class
    foreach ( $fields['billing'] as &$f ) {
        if ( !isset($f['input_class']) ) {
            $f['input_class'] = array( 'input-text', 'form-input' );
        }
    }

    return $fields;
}, 20 );

/**
 * Address hint after last name
 */
add_filter( 'woocommerce_form_field_text', function( $field, $key ) {
    if ( $key === 'billing_last_name' ) {
        $field .= '<div class="form-row form-row-wide col-xs-12">Vă rugăm să introduceți adresa la care vă aflați <b>între orele 9:00 și 17:00</b>.</div>';
    }
    return $field;
}, 10, 2 );

/* Phone description handled by CSS ::after — immune to WC AJAX */

/**
 * Billing title
 */
add_action( 'woocommerce_before_checkout_billing_form', function() {
    echo '<h3 class="checkout-billing-title">Plată și livrare</h3>';
});

add_filter( 'default_checkout_billing_country', function() { return 'RO'; });
add_filter( 'woocommerce_order_button_text', function() { return 'Comandă'; });

/**
 * Payment gateway order: COD → Stripe → PayPal
 */
/**
 * Override COD gateway title to show fee in RON
 */
add_filter( 'woocommerce_gateway_title', function( $title, $id ) {
    if ( $id === 'cod' ) {
        return 'Plata la livrare';
    }
    return $title;
}, 10, 2 );

add_filter( 'woocommerce_available_payment_gateways', function( $gw ) {
    $order = array('cod','stripe_cc','ppcp-gateway');
    $sorted = array();
    foreach ( $order as $id ) { if ( isset($gw[$id]) ) $sorted[$id] = $gw[$id]; }
    foreach ( $gw as $id => $g ) { if ( !isset($sorted[$id]) ) $sorted[$id] = $g; }
    return $sorted;
}, 100 );

add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

/**
 * COD fee — add 1.99€ surcharge when Cash on Delivery is selected
 */
add_action( 'woocommerce_cart_calculate_fees', function( $cart ) {
    if ( is_admin() && ! defined( 'DOING_AJAX' ) ) return;

    $chosen_gateway = WC()->session->get( 'chosen_payment_method' );
    if ( $chosen_gateway === 'cod' ) {
        $cart->add_fee( 'Plata la livrare', 9.99, false );  // RON (approx 1.99 EUR)
    }
});

/**
 * Update totals when payment method changes (AJAX)
 */
/* Removed: was causing infinite loop with Stripe — WC review-order template handles updates natively */

/**
 * Coupons enabled on checkout (was disabled, now re-enabled)
 */

/**
 * Remove info-banner from checkout page content
 */
add_filter( 'the_content', function( $content ) {
    if ( is_checkout() ) {
        $content = preg_replace( '/<section class="info-banner">.*?<\/section>/s', '', $content );
    }
    return $content;
}, 999 );

/**
 * Insert order summary before submit button (inside #payment)
 * This hook fires on every AJAX update_checkout render
 */
add_action('woocommerce_review_order_before_submit', function(){
    if ( wc_coupons_enabled() ) :
    ?>
    <div class="noriks-coupon-wrap" style="margin:12px 0 16px;">
        <button type="button" id="noriks-coupon-btn" style="display:inline-flex;align-items:center;gap:5px;padding:10px 12px;background:#fff;border:1px solid #ddd;border-radius:4px;font-size:13px;color:#333;cursor:pointer;font-weight:500;line-height:1;" onclick="this.style.display='none';document.getElementById('noriks-coupon-expanded').style.display='flex';">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z'%3E%3C/path%3E%3Cline x1='7' y1='7' x2='7.01' y2='7'%3E%3C/line%3E%3C/svg%3E" style="width:14px;height:14px;vertical-align:middle;" /><span style="vertical-align:middle;">Introduceți codul cuponului</span>
        </button>
        <div id="noriks-coupon-expanded" style="display:none;gap:8px;align-items:center;">
            <input type="text" id="noriks_coupon_code" placeholder="Cod cupon" style="flex:1;padding:10px 14px;border:1px solid #ccc;border-radius:6px;font-size:14px;" />
            <button type="button" style="padding:10px 20px;background:#000;color:#fff;border:none;border-radius:6px;font-size:14px;font-weight:600;cursor:pointer;white-space:nowrap;" onclick="noriksApplyCoupon()">Aplică</button>
            <button type="button" style="padding:8px 10px;background:none;border:1px solid #ddd;border-radius:6px;font-size:14px;color:#999;cursor:pointer;line-height:1;" onclick="this.parentElement.style.display='none';document.getElementById('noriks-coupon-btn').style.display='inline-flex';">✕</button>
        </div>
        <div id="noriks-coupon-msg" style="display:none;margin-top:8px;padding:6px 10px;border-radius:4px;font-size:12px;"></div>
    </div>
    <script>
    function noriksApplyCoupon(){
        var code=document.getElementById('noriks_coupon_code').value.trim();
        if(!code)return;
        var msg=document.getElementById('noriks-coupon-msg');
        var btn=event.target;btn.textContent='...';btn.disabled=true;
        fetch('<?php echo esc_url(wc_get_checkout_url()); ?>?wc-ajax=apply_coupon',{
            method:'POST',
            body:new URLSearchParams({coupon_code:code,security:'<?php echo wp_create_nonce("apply-coupon"); ?>'}),
            headers:{'Content-Type':'application/x-www-form-urlencoded'}
        }).then(function(r){
            var ok=r.ok;return r.text().then(function(html){return{ok:ok,html:html};});
        }).then(function(res){
            msg.style.display='block';
            var isError=!res.ok||res.html.indexOf('error')!==-1||res.html.indexOf('ne postoji')!==-1||res.html.indexOf('nije valjan')!==-1||res.html.indexOf('removed')!==-1;
            if(isError){
                msg.style.background='#fde8e8';msg.style.color='#c00';
                var txt=res.html.replace(/<[^>]*>/g,'').trim();
                msg.innerHTML='❌ '+(txt||'Codul cuponului nu este valid.');
            }else{
                msg.style.background='#e8fde8';msg.style.color='#080';
                msg.innerHTML='✅ Cupon aplicat!';
                document.getElementById('noriks_coupon_code').value='';
                if(window.jQuery)jQuery('body').trigger('update_checkout');
            }
            btn.textContent='Aplică';btn.disabled=false;
        }).catch(function(){
            msg.style.display='block';msg.style.background='#fde8e8';msg.style.color='#c00';
            msg.textContent='Eroare. Încercați din nou.';btn.textContent='Aplică';btn.disabled=false;
        });
    }
    </script>
    <?php
    endif;
    echo '<h3 class="place-order-title" style="display:block;margin:15px 0 10px;">Rezumatul comenzii</h3>';
    echo '<div class="vigo-checkout-total order-total shop_table" style="margin-bottom:20px;">';
    woocommerce_order_review();
    echo '</div>';
});

/**
 * Copy ALL billing fields to shipping on checkout
 * Ensures shipping address = billing address (name, address, phone, etc.)
 */
add_action('woocommerce_checkout_create_order', function($order, $data){
    $fields = array('first_name','last_name','company','address_1','address_2','city','postcode','country','state','phone');
    foreach ($fields as $f) {
        $getter = 'get_billing_' . $f;
        $setter = 'set_shipping_' . $f;
        if (method_exists($order, $getter) && method_exists($order, $setter)) {
            $order->$setter($order->$getter());
        }
    }
}, 10, 2);

/**
 * Also populate shipping fields in $_POST so WC processes them
 */
add_filter('woocommerce_checkout_posted_data', function($data){
    $fields = ['first_name','last_name','company','address_1','address_2','city','postcode','country','state','phone'];
    foreach ($fields as $f) {
        if (!empty($data['billing_'.$f]) && empty($data['shipping_'.$f])) {
            $data['shipping_'.$f] = $data['billing_'.$f];
        }
    }
    return $data;
});

/**
 * Validate billing_address_2 (număr) is required
 */
add_action('woocommerce_checkout_process', function(){
    if ( empty( $_POST['billing_address_2'] ) ) {
        wc_add_notice( 'Vă rugăm introduceți numărul.', 'error' );
    }
});

/**
 * Save custom RO fields to order meta
 */
add_action('woocommerce_checkout_update_order_meta', function( $order_id ) {
    $custom = array('billing_county', 'billing_locality', 'billing_address_bl', 'billing_address_sc', 'billing_address_et', 'billing_address_ap');
    foreach ( $custom as $key ) {
        if ( ! empty( $_POST[$key] ) ) {
            update_post_meta( $order_id, '_' . $key, sanitize_text_field( $_POST[$key] ) );
        }
    }
    // Also save county name (not just ID) for readability
    if ( ! empty( $_POST['billing_county'] ) ) {
        $counties = array('1'=>'Alba','2'=>'Arad','3'=>'Arges','4'=>'Bacau','5'=>'Bihor','6'=>'Bistrita-Nasaud','7'=>'Botosani','8'=>'Braila','9'=>'Brasov','10'=>'Bucuresti','11'=>'Buzau','12'=>'Calarasi','13'=>'Caras-Severin','14'=>'Cluj','15'=>'Constanta','16'=>'Covasna','17'=>'Dambovita','18'=>'Dolj','19'=>'Galati','20'=>'Giurgiu','21'=>'Gorj','22'=>'Harghita','23'=>'Hunedoara','24'=>'Ialomita','25'=>'Iasi','26'=>'Ilfov','27'=>'Maramures','28'=>'Mehedinti','29'=>'Mures','30'=>'Neamt','31'=>'Olt','32'=>'Prahova','33'=>'Salaj','34'=>'Satu Mare','35'=>'Sibiu','36'=>'Suceava','37'=>'Teleorman','38'=>'Timis','39'=>'Tulcea','40'=>'Valcea','41'=>'Vaslui','42'=>'Vrancea');
        $cid = sanitize_text_field($_POST['billing_county']);
        if (isset($counties[$cid])) {
            update_post_meta( $order_id, '_billing_county_name', $counties[$cid] );
            // Map to WC billing_state for shipping compatibility
            $order = wc_get_order($order_id);
            if ($order) { $order->set_billing_state($counties[$cid]); $order->save(); }
        }
    }
    // Map locality to WC billing_city
    if ( ! empty( $_POST['billing_locality'] ) ) {
        $order = wc_get_order($order_id);
        if ($order) { $order->set_billing_city(sanitize_text_field($_POST['billing_locality'])); $order->save(); }
    }
});

/**
 * Display custom RO fields in admin order page
 */
add_action('woocommerce_admin_order_data_after_billing_address', function( $order ) {
    $county = get_post_meta( $order->get_id(), '_billing_county_name', true );
    $locality = get_post_meta( $order->get_id(), '_billing_locality', true );
    $bl = get_post_meta( $order->get_id(), '_billing_address_bl', true );
    $sc = get_post_meta( $order->get_id(), '_billing_address_sc', true );
    $et = get_post_meta( $order->get_id(), '_billing_address_et', true );
    $ap = get_post_meta( $order->get_id(), '_billing_address_ap', true );
    if ($county) echo '<p><strong>Județ:</strong> ' . esc_html($county) . '</p>';
    if ($locality) echo '<p><strong>Localitate:</strong> ' . esc_html($locality) . '</p>';
    $parts = array();
    if ($bl) $parts[] = 'BL: ' . esc_html($bl);
    if ($sc) $parts[] = 'SC: ' . esc_html($sc);
    if ($et) $parts[] = 'ET: ' . esc_html($et);
    if ($ap) $parts[] = 'AP: ' . esc_html($ap);
    if ($parts) echo '<p><strong>Bloc:</strong> ' . implode(', ', $parts) . '</p>';
});
