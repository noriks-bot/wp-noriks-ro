<?php
/**
 * Template Name: Vigo Checkout (Standalone)
 * Description: Pixel-perfect vigoshop.hr checkout replica - standalone HTML, no WP template.
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Output clean HTML directly - no wp_head(), no WP template
?>
<!DOCTYPE html>
<html lang="ro" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="pingback" href="">
    <title>Checkout &#8211; Noriks</title>
<style>tr.cart-discount.coupon-get1free .amount{ display:none;}</style><meta name='robots' content='max-image-preview:large, noindex, follow' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	        <meta name="robots" content="noindex, nofollow"><link rel='dns-prefetch' href='//widget.trustpilot.com' />
<link rel='dns-prefetch' href='//static.klaviyo.com' />
<link rel='dns-prefetch' href='//js.braintreegateway.com' />
<meta name="title" content="Finalizati comanda" />
<meta name="description" content="Tot ce aveti nevoie intr-un singur loc. Descoperiti o selectie mare de produse la cele mai bune preturi. Faceti clic acum si bucurati-va de cele mai bune oferte si de o varietate mare!" />
<meta name="image" content="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x310.png" />
<meta property="og:locale" content="ro" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Finalizati comanda" />
<meta property="og:description" content="Tot ce aveti nevoie intr-un singur loc. Descoperiti o selectie mare de produse la cele mai bune preturi. Faceti clic acum si bucurati-va de cele mai bune oferte si de o varietate mare!" />
<meta property="og:image" content="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x310.png" />
<meta property="og:image:alt" content="Vigoshop - Finalizati comanda" />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='select2-css' href='https://vigoshop.hr/app/plugins/woocommerce/assets/css/select2.css' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='brands-styles-css' href='https://vigoshop.hr/app/plugins/woocommerce/assets/css/brands.css' type='text/css' media='all' />
<link rel='stylesheet' id='hsplus-child-style-css' href='https://vigoshop.hr/app/themes/hsplus-child/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='app-css' href='https://vigoshop.hr/app/themes/hsplus/dist/app-bb7116ca22.css' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-style-css' href='https://vigoshop.hr/app/themes/hsplus/assets/plugins/swiper/swiper.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='app-extra-css' href='https://vigoshop.hr/app/themes/hsplus/dist/vigoshop-2809b8fc43.css' type='text/css' media='all' />
<link rel='stylesheet' id='agent-kc-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/agent-kc/css/agent-kc-d24968c5d8.css' type='text/css' media='all' />
<link rel='stylesheet' id='cart-warranty-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/cart-warranty/css/cart-warranty-294993db14.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-extra-triggers-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-extra-triggers/css/checkout-extra-triggers-8a82c39c7f.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-validation-styles-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-general-3ba2df51f0.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-checkout-hr-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-hr-708bf051cd.css' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-consent-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/cookie-consent/css/cookie-consent-0f1f70401c.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-payment-notice-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/custom-payment-notice/css/custom-payment-notice-0baf6bff40.css' type='text/css' media='all' />
<link rel='stylesheet' id='header-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/header/css/header-f98b75e0d2.css' type='text/css' media='all' />
<link rel='stylesheet' id='hide-payments-test-product-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/hide-payments-test-product/css/hide-payments-test-product-e46f2e914d.css' type='text/css' media='all' />
<link rel='stylesheet' id='general-shop-elements-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/homepage-shop-elements/css/general-shop-elements-a82fb8d5a2.css' type='text/css' media='all' />
<link rel='stylesheet' id='lazy-load-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/image-lazy-load/css/lazy-load-4b6eac4005.css' type='text/css' media='all' />
<link rel='stylesheet' id='payment-methods-fixes-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/payment-methods-fixes/css/payment-methods-fixes-75bc076f0b.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-page-courier-info-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/product-page-courier-info/css/product-page-courier-info-96801577cc.css' type='text/css' media='all' />
<link rel='stylesheet' id='product-page-warranty-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/product-page-warranty/css/product-page-warranty-7d50f99458.css' type='text/css' media='all' />
<link rel='stylesheet' id='sv-wc-payment-gateway-payment-form-v5_15_10-css' href='https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/css/frontend/sv-wc-payment-gateway-payment-form.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wc-braintree-css' href='https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/assets/css/frontend/wc-braintree.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='video-in-product-gallery-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/video-in-product-gallery/css/video-in-product-gallery-89309214b3.css' type='text/css' media='all' />
<link rel='stylesheet' id='abandoned-cart-restore-addons-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/abandoned-cart-restore-addons/css/abandoned-cart-restore-addons-740a577066.css' type='text/css' media='all' />
<link rel='stylesheet' id='cart-item-restore-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/cart-item-restore/css/cart-item-restore-b6a0f18b47.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-order-review-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-order-review/css/checkout-order-review-17423b66f5.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-timer-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-timer/css/checkout-timer-73c98a5995.css' type='text/css' media='all' />
<link rel='stylesheet' id='checkout-upsell-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-upsell/css/checkout-upsell-49a595b20c.css' type='text/css' media='all' />
<link rel='stylesheet' id='coupon-banner-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/coupon-banner/css/coupon-banner-d56e152358.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-cta-settings-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/custom-cta-settings/css/custom-cta-settings-0fd450b106.css' type='text/css' media='all' />
<link rel='stylesheet' id='email-checkbox-subscription-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/email-checkbox-subscription/css/email-checkbox-subscription-1def327263.css' type='text/css' media='all' />
<link rel='stylesheet' id='free-shipping-above-quantity-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/free-shipping-above-quantity/css/free-shipping-above-quantity-02588a20ff.css' type='text/css' media='all' />
<link rel='stylesheet' id='loader-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/loader/css/loader-c25fc35077.css' type='text/css' media='all' />
<link rel='stylesheet' id='notice-test-product-only-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/notice-test-product-only/css/notice-test-product-only-21c486c451.css' type='text/css' media='all' />
<link rel='stylesheet' id='order-received-popup-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/order-received-popup/css/order-received-popup-c97d38fd18.css' type='text/css' media='all' />
<link rel='stylesheet' id='parcel-pickup-hr-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/parcel-pickup/css/parcel-pickup-hr-8754cf5c08.css' type='text/css' media='all' />
<link rel='stylesheet' id='extra-shipping-method-buttons-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/parcel-pickup/css/extra-shipping-method-buttons-093d5c786e.css' type='text/css' media='all' />
<link rel='stylesheet' id='pdf-products-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-products-2009e19a3b.css' type='text/css' media='all' />
<link rel='stylesheet' id='pdf-special-offer-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-special-offer-545e3ee266.css' type='text/css' media='all' />
<link rel='stylesheet' id='pdf-special-offer-homepage-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-special-offer-homepage-eca0ed3481.css' type='text/css' media='all' />
<link rel='stylesheet' id='shipping-method-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/shipping-method/css/shipping-method-14ad2b0a1f.css' type='text/css' media='all' />
<link rel='stylesheet' id='terms-and-conditions-link-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/terms-and-conditions-link/css/terms-and-conditions-link-4d809e8b6d.css' type='text/css' media='all' />
<link rel='stylesheet' id='virtual-products-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/virtual-products/css/virtual-products-ff847d8762.css' type='text/css' media='all' />
<link rel='stylesheet' id='quantity-discount-price-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/quantity-discount-price/css/quantity-discount-price-86d6e7d23e.css' type='text/css' media='all' />
<link rel='stylesheet' id='hsplus-css' href='https://vigoshop.hr/app/plugins/mk-abandoned/public/css/hsplus-public.css' type='text/css' media='all' />
<script type="text/javascript" src="https://vigoshop.hr/wp/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
<script type="text/javascript" src="https://vigoshop.hr/app/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js" id="selectWoo-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://vigoshop.hr/wp/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://vigoshop.hr/wp/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="https://vigoshop.hr/app/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js" id="wc-jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://vigoshop.hr/app/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js" id="wc-js-cookie-js" data-wp-strategy="defer"></script>
<link rel="icon" href="https://vigoshop.hr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://vigoshop.hr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://vigoshop.hr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://vigoshop.hr/app/uploads/2018/03/cropped-vigoshop-fb-profilna-puscica-1-270x270.png" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
          href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/favicon-128.png" sizes="128x128"/>
    <link rel="icon" type="image/png" href="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/favicon-196x196.png" sizes="196x196"/>
    <meta name="application-name" content="vigoshop"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="https://vigoshop.hr/app/themes/hsplus/images/favicon/vigoshop/mstile-310x310.png"/>
    </head>
<body class="wp-singular page-template-default page page-id-6 wp-theme-hsplus wp-child-theme-hsplus-child  theme-vigoshop theme-hsplus woocommerce-checkout woocommerce-page woocommerce-no-js brand-vigoshop" data-hswooplus="10.3.7"  >

<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'>
          <!--          --><!--          <div class="vigo-cart-header-banner">-->
<!--            <div class="vigo-cart-header" id="vigo-slick-header">-->
<!--              <div class="vigo-slick-slide vigo-slick-slide-first">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-return.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-safe.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-delivery.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-payment.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        -->            </div>
  <div class='flex flex--middle flex--apart flex--gaps'>  </div>
</header>
<main id="content" class="main">
        <div class="container container--l checkout-container">

  <article class="post-6 page type-page status-publish hentry">
    <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><div class="woocommerce-notices-wrapper"></div><div class="container container--xs bg--white wc-checkout-wrap ">
<style>
  
  </style>


<div class="before_form container container--xs">

  <form name="checkout" method="post" class="checkout woocommerce-checkout"
        action="#" enctype="multipart/form-data" aria-label="Plata">

    
              <div class="col2-set" id="customer_details">
        <div class="col-1 clearfix">
          <div class="woocommerce-billing-fields">
  
    <h3 class="checkout-billing-title">Plata si livrare</h3>

  
  
  <div class="woocommerce-billing-fields__field-wrapper">
    <p class="form-row form-row-first form-group col-xs-12 validate-required" id="billing_first_name_field" data-priority="30"><label for="billing_first_name" class="required_field">Prenume&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_first_name" id="billing_first_name" placeholder="Prenume"  value="" aria-required="true" maxlength="80" autocomplete="given-name" /></span></p><p class="form-row form-row-last form-group col-xs-12 validate-required" id="billing_last_name_field" data-priority="40"><label for="billing_last_name" class="required_field">Nume&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_last_name" id="billing_last_name" placeholder="Nume"  value="" aria-required="true" maxlength="80" autocomplete="family-name" /></span></p><div class="form-row form-row-wide col-xs-12">Introduceti adresa la care veti fi disponibil intre <b>8:00 si 16:00</b>.</div><p class="form-row form-row-wide address-field form-group form-group col-xs-12 validate-required" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="required_field">Strada&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_address_1" id="billing_address_1" placeholder="Strada"  value="" aria-required="true" maxlength="80" autocomplete="address-line1" /></span></p><p class="form-row form-row-wide address-field form-group form-group col-xs-12 validate-required" id="billing_address_2_field" data-priority="60"><label for="billing_address_2" class="screen-reader-text required_field">Numar&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text form-input" name="billing_address_2" id="billing_address_2" placeholder="Numar"  value="" autocomplete="address-line2" maxlength="80" aria-required="true" /></span></p><p class="form-row form-row-wide address-field form-group form-group col-xs-12 validate-required validate-postcode" id="billing_postcode_field" data-priority="70"><label for="billing_postcode" class="required_field">Cod postal&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text form-input" name="billing_postcode" id="billing_postcode" placeholder="Cod postal"  value="" aria-required="true" maxlength="30" autocomplete="postal-code" /></span></p><p class="form-row form-row-wide dropdown form-group form-group col-xs-12 validate-required" id="billing_city_field" data-priority=""><label for="billing_city" class="required_field">Oras&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><select name="billing_city" id="billing_city" class="select form-input" aria-required="true" data-allow_clear="true" data-placeholder="Alegeti orasul">
							<option value=""  selected='selected'>Alegeti orasul</option>
						</select></span></p><p class="form-row form-row-wide form-group col-xs-12 validate-required validate-phone" id="billing_phone_field" data-priority="10"><label for="billing_phone" class="required_field">Telefon&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text form-input" name="billing_phone" id="billing_phone" placeholder="Numar de telefon mobil"  value="" maxlength="17" aria-required="true" autocomplete="tel" /></span></p><p class="form-row form-row-wide form-group col-xs-12 validate-email" id="billing_email_field" data-priority="20"><label for="billing_email" class="">E-mail adresa&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text form-input" name="billing_email" id="billing_email" placeholder="E-mail adresa"  value="" maxlength="80" autocomplete="email" /></span></p><p class="form-row form-row-wide address-field form-group col-xs-12 validate-state" id="billing_state_field" data-priority="80"><label for="billing_state" class="">Judet&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><select name="billing_state" id="billing_state" class="state_select form-input" autocomplete="address-level1" data-placeholder="placeholder_province"  data-input-classes="form-input" data-label="Judet">
						<option value="">Alegeti judetul&hellip;</option><option value="B">Bucuresti</option><option value="CJ">Cluj</option><option value="TM">Timis</option><option value="IS">Iasi</option><option value="CT">Constanta</option><option value="BV">Brasov</option><option value="PH">Prahova</option><option value="AG">Arges</option></select></span></p><p class="form-row form-row-wide address-field update_totals_on_change form-group col-xs-12 validate-required" id="billing_country_field" data-priority="90"><label for="billing_country" class="required_field">Country / Region&nbsp;<span class="required" aria-hidden="true">*</span></label><span class="woocommerce-input-wrapper"><strong>Romania</strong><input type="hidden" name="billing_country" id="billing_country" value="RO" aria-required="true" autocomplete="do-not-autofill" class="country_to_state" readonly="readonly" /></span></p><p class="form-row kl_newsletter_checkbox_field form-group col-xs-12" id="kl_newsletter_checkbox_field" data-priority=""><span class="woocommerce-input-wrapper"><label class="checkbox " ><input type="checkbox" name="kl_newsletter_checkbox" id="kl_newsletter_checkbox" value="1" class="input-checkbox form-input"  /> Inscrieti-ma pentru actualizari si noutati prin e-mail&nbsp;<span class="optional">(optional)</span></label></span></p><p class="form-row form-row-wide hsplus-checkout-field hsplus-checkout-field--no-top-margin hsplus-checkout-field--hidden" id="hsplus_accepts_marketing_field" data-priority="11"><span class="woocommerce-input-wrapper"><label class="checkbox " ><input type="checkbox" name="hsplus_accepts_marketing" id="hsplus_accepts_marketing" value="1" class="input-checkbox woocommerce-form__input woocommerce-form__input-checkbox hsplus-checkbox"  /> Inscrieti-va pentru oferte exclusive si noutati prin SMS&nbsp;<span class="optional">(optional)</span></label></span></p>  </div>

  </div>

        </div>

        <div class="col-2">
          <div class="woocommerce-shipping-fields">
	</div>
<div class="woocommerce-additional-fields">
	
	
		
			<h3>Informatii suplimentare</h3>

		
		<div class="woocommerce-additional-fields__field-wrapper">
							<p class="form-row notes form-group col-xs-12" id="order_comments_field" data-priority=""><label for="order_comments" class="">Note privind comanda&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text form-input" id="order_comments" placeholder="Note despre comanda dvs.  "  rows="2" cols="5"maxlength="80"></textarea></span></p>					</div>

	
	<div id="custom_shipping">

        <h3>Livrare</h3>
    
        <ul class="shipping_method_custom">

                    <li class="standard-shipping shipping-tab">
                <input name="shipping_method[0]" data-index="0" id="shipping_method_0_standard_custom"
                       value="standard" class="shipping_method shipping_method_field" type="radio">
                <label
                    for="shipping_method_0_standard_custom" class="checkedlabel">
                    <svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994 -0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078 -0.137536 16.9909 -0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z" /></svg>                                        <div class="outer-wrapper">
                        <div class="inner-wrapper-dates">
                        <strong
                            class="hs-custom-date">miercuri, 18.3. - joi, 19.3.</strong>
                        </div>
                        <div class="inner-wrapper-img">
                                                        <span class="shipping_method_delivery_price tag tag--red">
                                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>                            </span>
                                                        <span class="delivery_img"><img decoding="async" class="romania_posta standard" src="https://images.vigo-shop.com/general/curriers/home_small_pachet24@2x.png"/></span>
                        </div>
                    </div>
                </label>
            </li>
            
    </ul>

        <div class="delivery-from-eu-warehouse">
        <img decoding="async" class="delivery-from-eu-warehouse__icon"
            src="https://images.vigo-shop.com/general/flags/eu-warehouse.svg"><span
            class="delivery-from-eu-warehouse__text">Depozit in UE</span>
    </div>
    </div>
<div class="sup_outher_wrapper">

    <div class="surprise_upsells_wrapper">
                    <div class="vigo-surprise surprise_item product_457583 vigo-gift border border--yellow border--all-2 border-radius--m m-top--m " data-product_id = "457583">
                <div class="vigo-gift__tooltip">
                    <div class="flex flex--autosize flex--middle">
                        <div class="flex__item down_arrow "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.061,12.354a1.5,1.5,0,0,0-2.122,0L13.5,14.793V6a1.5,1.5,0,0,0-3,0v8.793L8.061,12.354a1.5,1.5,0,0,0-2.122,2.121l3.586,3.586a3.5,3.5,0,0,0,4.95,0l3.586-3.586A1.5,1.5,0,0,0,18.061,12.354Z"/></svg></div>
                        <div class="flex__item f--bold">  Adaugati la comanda</div>
                    </div>
                </div>
                <div class="flex sup_inner_wrapper">
                    <div>
                        <div class="surprise_product_click flex flex--wrap flex--autosize flex--gaps flex--middle">
                            <div>
                                <label for="surprise_item_upsell_0" class=""></label>
                                <input id="surprise_item_upsell_0" type="checkbox" class="checkbox-simple checkbox-simple--green val--bottom"  disabled/>
                            </div>
                            <div class="f--l f--bold surprise_title">Produs surpriza</div>
                            <div class="tag_wrapper">
                                <div class="tag tag--red">
                                    <span class="woocommerce-Price-amount amount"><bdi>3,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>                                </div>
                            </div>
                        </div>
                        <div class="f--m c--darkgray s-top--s">U vrijednosti intre 5 € i 15 €.</div>
                    </div>
                    <div class="vigo-checkout-gift__img">
                        <img decoding="async" class="img" src="https://images.vigo-shop.com/general/present_responsive.svg" alt="Gift icon">
                    </div>
                </div>
                <div class="c--darkgray remove_wrapper">
                    <div class="remove_surprise vigo-checkout-total__trash hide"><svg viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.4286 1.15398H15.4286C15.7429 1.15398 16 1.41215 16 1.7309V2.88474C16 3.20334 15.7442 3.46166 15.4286 3.46166H0.571429C0.255857 3.46166 0 3.20334 0 2.88474V1.7309C0 1.41222 0.255857 1.15398 0.571429 1.15398H4.57143L4.98536 0.318892C5.08214 0.123461 5.27996 0 5.49643 0H10.5039C10.7204 0 10.9183 0.123461 11.015 0.318892L11.4286 1.15398ZM1.14286 16.7308C1.14286 17.6863 1.91071 18.4615 2.85714 18.4615H13.1429C14.0893 18.4615 14.8571 17.6863 14.8571 16.7308V4.61549H1.14286V16.7308ZM10.8571 7.50009C10.8571 7.17917 11.1107 6.92317 11.4286 6.92317C11.7464 6.92317 12 7.18008 12 7.50009V15.5769C12 15.897 11.7455 16.1539 11.4286 16.1539C11.1116 16.1539 10.8571 15.897 10.8571 15.5769V7.50009ZM8 6.92317C7.68214 6.92317 7.42857 7.17917 7.42857 7.50009V15.5769C7.42857 15.897 7.68304 16.1539 8 16.1539C8.31696 16.1539 8.57143 15.897 8.57143 15.5769V7.50009C8.57143 7.18008 8.31786 6.92317 8 6.92317ZM4 7.50009C4 7.17917 4.25357 6.92317 4.57143 6.92317C4.88929 6.92317 5.14286 7.18008 5.14286 7.50009V15.5769C5.14286 15.8979 4.88929 16.1539 4.57143 16.1539C4.25357 16.1539 4 15.897 4 15.5769V7.50009Z" /></svg>                        <span>Ukloni</span></div>
                </div>

            </div>
        
    </div>
</div>

    <h3 class="payment-title">Metoda de plata</h3>
    <div id="payment" class="woocommerce-checkout-payment">
			<ul class="wc_payment_methods payment_methods methods">
			<li class="wc_payment_method payment_method_cod">
  <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  checked='checked' data-order_button_text="" />

  <label for="payment_method_cod">
    Plata la livrare <span class="payment-fee-not-free"><span class="woocommerce-Price-amount amount">1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></span></span><div class="hs-checkout__payment-method-cod-icon-container">
        <img decoding="async" class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" />
    </div>  </label>
  </li>
<li class="wc_payment_method payment_method_braintree_credit_card">
  <input id="payment_method_braintree_credit_card" type="radio" class="input-radio" name="payment_method" value="braintree_credit_card"  data-order_button_text="Comanda" />

  <label for="payment_method_braintree_credit_card">
    Kreditna kartica <span class="payment-fee-free">Besplatno</span><div class="sv-wc-payment-gateway-card-icons"><img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-visa.svg" alt="visa" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" /><img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-mastercard.svg" alt="mastercard" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" /><img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-maestro.svg" alt="maestro" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" /></div>  </label>
      <div class="payment_box payment_method_braintree_credit_card" style="display:none;">
      <fieldset id="wc-braintree-credit-card-credit-card-form" aria-label="Informacije o platestenju"><legend style="display:none;">Informacije o platestenju</legend><div class="wc-braintree-credit-card-new-payment-method-form js-wc-braintree-credit-card-new-payment-method-form"><input type="hidden" name="wc-braintree-credit-card-card-type" value="" /><input type="hidden" name="wc-braintree-credit-card-3d-secure-enabled" value="" /><input type="hidden" name="wc-braintree-credit-card-3d-secure-verified" value="" /><input type="hidden" name="wc-braintree-credit-card-3d-secure-order-total" value="21.98" />		<input type="hidden" id="wc_braintree_credit_card_payment_nonce" name="wc_braintree_credit_card_payment_nonce" />
		<input type="hidden" id="wc-braintree-credit-card-device-data" name="wc_braintree_device_data" />
				<div class="form-row ">
			<label for="wc-braintree-credit-card-context-hosted"></label>
			<div id="wc-braintree-credit-card-context-hosted" class="" data-placeholder=""></div>
		</div>
				<div class="form-row form-row-wide wc-braintree-hosted-field-card-number-parent wc-braintree-hosted-field-parent">
			<label for="wc-braintree-credit-card-account-number-hosted">Broj kartice<abbr class="required" title="required">&nbsp;*</abbr></label>
			<div id="wc-braintree-credit-card-account-number-hosted" class="js-sv-wc-payment-gateway-credit-card-form-inputjs-sv-wc-payment-gateway-credit-card-form-account-number wc-braintree-hosted-field-card-number wc-braintree-hosted-field" data-placeholder="•••• •••• •••• ••••"></div>
		</div>
				<div class="form-row form-row-first wc-braintree-hosted-field-card-expiry-parent wc-braintree-hosted-field-parent">
			<label for="wc-braintree-credit-card-expiry-hosted">Datum isteka<abbr class="required" title="required">&nbsp;*</abbr></label>
			<div id="wc-braintree-credit-card-expiry-hosted" class="js-sv-wc-payment-gateway-credit-card-form-inputjs-sv-wc-payment-gateway-credit-card-form-expiry wc-braintree-hosted-field-card-expiry wc-braintree-hosted-field" data-placeholder="MM/GG"></div>
		</div>
				<div class="form-row form-row-last wc-braintree-hosted-field-card-csc-parent wc-braintree-hosted-field-parent">
			<label for="wc-braintree-credit-card-csc-hosted">CVV<abbr class="required" title="required">&nbsp;*</abbr></label>
			<div id="wc-braintree-credit-card-csc-hosted" class="js-sv-wc-payment-gateway-credit-card-form-inputjs-sv-wc-payment-gateway-credit-card-form-csc wc-braintree-hosted-field-card-csc wc-braintree-hosted-field" data-placeholder="CVV"></div>
		</div>
		<div class="clear"></div></div><!-- ./new-payment-method-form-div --></fieldset><style>
			#payment ul.payment_methods li label[for='payment_method_braintree_credit_card'] { display: flex; flex-wrap: wrap; row-gap: 10px; }
			#payment ul.payment_methods li label[for='payment_method_braintree_credit_card'] > img { margin-left: auto; }
		</style>    </div>
  </li>
<li class="wc_payment_method payment_method_braintree_paypal">
  <input id="payment_method_braintree_paypal" type="radio" class="input-radio" name="payment_method" value="braintree_paypal"  data-order_button_text="Comanda" />

  <label for="payment_method_braintree_paypal">
    PayPal <span class="payment-fee-free">Besplatno</span><img decoding="async" src="https://images.vigo-shop.com/general/checkout/paypal/PayPal.svg" alt="PayPal">  </label>
      <div class="payment_box payment_method_braintree_paypal" style="display:none;">
      <fieldset id="wc-braintree-paypal-paypal-form" aria-label="Informacije o platestenju"><legend style="display:none;">Informacije o platestenju</legend><div class="wc-braintree-paypal-new-payment-method-form js-wc-braintree-paypal-new-payment-method-form">		<input type="hidden" id="wc_braintree_paypal_payment_nonce" name="wc_braintree_paypal_payment_nonce" />
		<input type="hidden" id="wc-braintree-paypal-device-data" name="wc_braintree_device_data" />
		<p class="form-row " id="wc-braintree-paypal-context_field" data-priority=""><span class="woocommerce-input-wrapper"><input type="hidden" class="input-hidden " name="wc-braintree-paypal-context" id="wc-braintree-paypal-context" value="shortcode"  /></span></p>
		
		<div id="wc_braintree_paypal_container" ></div>

		<input type="hidden" name="wc_braintree_paypal_amount" value="21.98" />
		<input type="hidden" name="wc_braintree_paypal_currency" value="EUR" />
		<input type="hidden" name="wc_braintree_paypal_locale" value="en_us" />

		<div class="clear"></div></div><!-- ./new-payment-method-form-div --></fieldset><style>
			#payment ul.payment_methods li label[for='payment_method_braintree_paypal'] { display: flex; flex-wrap: wrap; row-gap: 10px; }
			#payment ul.payment_methods li label[for='payment_method_braintree_paypal'] > img { margin-left: auto; }
		</style>    </div>
  </li>
		</ul>
		<div class="form-row place-order">
		<div class="woocommerce-terms-and-conditions-wrapper">
		
			</div>
	
		        <div id="hs-cod-checkout-prompt" style="display:none;">
            <div class="cod-prompt-text">Finalizati comanda acum, <strong>platiti ramburs 🙂</strong></div>
            <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
        </div>


                <div id="hs-vat-tax-checkout-prompt">
            <span class="tax-and-vat-checkout-claims">Fara costuri suplimentare de vama</span>
            <span class="tax-and-vat-checkout-claims">TVA-ul este inclus in pret</span>
        </div>
        <div id="pdf">
    <div class="pdf-title-container">
        <h3 class="pdf-title">
            KUPITE E-KNJIGU<!--            <span class="green-label">-->
<!--                --><!--            </span>-->
        </h3>
    </div>
    <p class="pdf-description">Kada kupite e-knjigu, besplatno Vam dajemo costurile livrarii.</p>

    <div id="pdf-grid">
        <div class="table-grid">
            <div class="cell-grid">
                <img decoding="async" class="pdf-image" src="https://images.vigo-shop.com/general/pdf_book.png">
            </div>
            <div id="pdf-select-true" class="cell-grid column-option top" >
                <input type="radio" id="ebook_true" name="ebook_offer" value="true" >
<!--                <div class="top-price-label">-->
<!--                    <span>--><!--</span>-->
<!--                </div>-->
                <label for="ebook_true">E-knjiga</label>
            </div>
            <div id="pdf-select-false" class="cell-grid column-selected top">
                <input type="radio" id="ebook_false"  name="ebook_offer" value="false" checked>
                <label for="ebook_false">Ne dorestem e-knjigu</label>
            </div>

            <div class="cell-grid">
                E-knjiga:
            </div>
            <div class="cell-grid column-option">
                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>            </div>
            <div class="cell-grid column-selected">
                /
            </div>

            <div class="cell-grid">
                Livrare:
            </div>
            <div class="cell-grid column-option">
                Besplatno            </div>
            <div class="cell-grid column-selected">
                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>            </div>
                        <div class="cell-grid">
                Ukupna comanda:
            </div>
            <div class="cell-grid totals column-option bottom">
                <span class="totals"><span class="woocommerce-Price-amount amount"><bdi>21,98<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>
            </div>
            <div class="cell-grid column-selected bottom">
                <span class="woocommerce-Price-amount amount"><bdi>21,98<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>            </div>
        </div>
    </div>
    <p class="pdf-more-info">
        <img decoding="async" src="https://images.vigo-shop.com/general/checkout/pdf_info_icon.svg">
        <u>Mai multe informatii despre e-book</u>
    </p>
    <p class="pdf-more-info-description">
        Alegeti e-book-ul nostru si obtineti acces la sfaturi utile, idei practice si continut valoros. In plus, economisiti la livrare. Alegeti e-book-ul pentru o experienta mai simpla si mai avantajoasa!</p>
</div>


<h3 class="place-order-title" style="display: block;">Rezumatul comenzii</h3>
<div class="vigo-checkout-total order-total shop_table woocommerce-checkout-review-order-table">
    <div class="grid m-top--s review-all-products-container">

        <div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">
                            <div class="c--darkgray review-section-container">
                    <div class="review-product-info">
                        <div>
                            1x Nano sprej za popravak ogrebotina na automobilu | CAREASE                        </div>
                        <div class="review-product-info__attributes">
                                                                                </div>
                                            </div>
                    <div class="info-price">
                        <span class="review-sale-price"> <span class="woocommerce-Price-amount amount"><bdi>18,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>                    </div>
                    <div class="review-product-remove">
                                            </div>
                </div>

                            
            
            <!--  Shipping section-->
            <div class="c--darkgray review-section-container review-addons shipping_order_review">
                <div class="review-addons-title">
                    <div>
                        Serviciu de livrare rapida                    </div>
                </div>

                                    <div class="review-addons-price review-sale-price"> <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>                    </div>
                
                <div class="review-product-remove"></div>

            </div>
        </div>
    </div>

        <div class="vigo-checkout-total__sum flex flex--middle border_price">
        <div class="flex__item f--l">
            Total: <span class="f--bold price_total_wrapper"><span class="woocommerce-Price-amount amount"><bdi>21,98<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>        </div>
    </div>
</div>

		
		
			</div>
</div>
</div>
        </div>
      </div>

      
    
    

    
        <div id="order_review" class="woocommerce-checkout-review-order container container--xs bg--white">
            <button type="submit" class="button alt button--l button--block button--green button--rounded button--green-gradient" name="woocommerce_checkout_place_order" id="place_order" data-value="Comanda" />Comanda</button></div><div class="checkout-warranty flex flex--center flex--middle">
    <div class="flex__item--autosize checkout-warranty__icon">
       <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_hr.png">
    </div>
    <div class="flex__item--autosize f--m checkout-warranty__text">
        <strong>Cumparati fara griji </strong><br>
        Rambursare posibila in termen de 90 de zile    </div>
</div>

<div class="agreed_terms_txt">
    <span class="policy-agreement-obligation">Prin apasarea butonului <strong>Comanda</strong> accept comanda cu obligatia de plata.</span> <br>
            <div class="terms-checkbox-and-links">
            <label class="checkbox">
                <input type="checkbox" class="input-checkbox" name="agree_to_checkout_terms" id="agree_to_terms_checkbox" value="1">
            </label>
            Am citit si accept <a href="#" id="terms_conditions_link"> termenii si conditiile de vanzare </a> si <a href="#" id="withdrawal_policy_link"> dreptul de retragere </a>.        </div>
    </div>

<div id="terms-conditions-popup" class="checkout-popup" style="display: none;">
    <div class="checkout-popup-wrapper">
        <div id="terms-conditions-content">
<h2 class="ql-align-justify"><strong>Termeni si conditii generale</strong></h2>
<p class="ql-align-justify"><a class="button" href="https://images.hs-plus.com/legal/terms-conditions/terms-conditions_Vigoshop_hr.pdf" style="background-color: lightgray">Salvati si imprimati</a></p>
<p class="ql-align-justify">Bine ati venit pe site-ul NORIKS. Acesti termeni si conditii se aplica utilizarii magazinului online si tuturor comenzilor plasate prin intermediul acestuia.</p>
<p class="ql-align-justify">Prin utilizarea site-ului si prin finalizarea unei comenzi, confirmati ca ati citit, ati inteles si ati acceptat acesti termeni si conditii.</p>
<h2 class="ql-align-justify"><strong>1. Informatii generale</strong></h2>
<p class="ql-align-justify">Operatorul magazinului este HS PLUS d.o.o., Gmajna 8, SI-1236 Trzin, Slovenia.</p>
<p class="ql-align-justify">Site-ul poate fi actualizat, modificat sau completat fara notificare prealabila. Depunem eforturi rezonabile pentru ca informatiile publicate sa fie corecte si actualizate.</p>
<h2 class="ql-align-justify"><strong>2. Comenzi</strong></h2>
<p class="ql-align-justify">Contractul de vanzare se considera incheiat in momentul in care clientul finalizeaza comanda si primeste confirmarea prin e-mail.</p>
<p class="ql-align-justify">Preturile afisate sunt in EUR si includ TVA, cu exceptia cazului in care este mentionat altfel. Costurile de livrare sunt afisate inainte de finalizarea comenzii.</p>
<h2 class="ql-align-justify"><strong>3. Plata si livrare</strong></h2>
<p class="ql-align-justify">Magazinul accepta plata ramburs, plata cu cardul si plata prin PayPal, in functie de optiunile disponibile la checkout.</p>
<p class="ql-align-justify">Termenul estimat de livrare este afisat in procesul de comanda. In cazul unor intarzieri independente de controlul nostru, termenul se poate modifica.</p>
<h2 class="ql-align-justify"><strong>4. Reclamatii si defecte</strong></h2>
<p class="ql-align-justify">Daca produsul primit are un defect de fabricatie sau nu corespunde comenzii, ne puteti contacta pentru inlocuire, rambursare sau alta solutie legala aplicabila.</p>
<p class="ql-align-justify">Solicitarile se proceseaza in termen rezonabil, iar echipa noastra de suport va ofera instructiunile necesare pentru solutionare.</p>
<h2 class="ql-align-justify"><strong>5. Raspundere</strong></h2>
<p class="ql-align-justify">Site-ul si serviciile sunt furnizate in forma disponibila. Nu garantam functionarea neintrerupta a site-ului si nu raspundem pentru indisponibilitati temporare, erori tehnice sau intarzieri cauzate de terti.</p>
<h2 class="ql-align-justify"><strong>6. Dispozitii finale</strong></h2>
<p class="ql-align-justify">Pentru orice intrebare legata de comenzi, livrare, retur sau reclamatii, ne puteti contacta prin canalele de suport afisate pe site.</p>
<p class="ql-align-justify"><strong>HS PLUS d.o.o.</strong> / Gmajna 8 / SI-1236 Trzin / Slovenia</p>
</div>
        <img decoding="async" id="close_terms_conditions" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
    </div>
</div>

<div id="withdrawal-policy-popup" class="checkout-popup" style="display: none;">
    <div class="checkout-popup-wrapper">
        <div id="withdrawal-policy-content">
<h2 class="ql-align-justify"><strong>Dreptul de retragere din cumparare</strong></h2>
<p class="ql-align-justify">Puteti renunta la cumparare in termen de <strong>90 de zile de la livrare</strong>, fara a oferi un motiv.</p>
<p class="ql-align-justify">Produsul returnat trebuie sa fie, pe cat posibil in mod rezonabil, in stare buna, cu toate accesoriile primite si intr-un ambalaj adecvat pentru transport.</p>
<p class="ql-align-justify">Pentru schimb sau rambursare, completati cererea in aplicatia RMA sau contactati-ne prin e-mail. Dupa trimiterea cererii, veti primi instructiuni pentru retur.</p>
<p class="ql-align-justify">Daca folositi formularul de retur, introduceti toate datele necesare si includeti documentele solicitate in colet. Acest lucru accelereaza procesarea cererii.</p>
<p class="ql-align-justify">Aveti la dispozitie <strong>14 zile</strong> de la inregistrarea cererii pentru a trimite coletul catre adresa noastra de retur.</p>
<p class="ql-align-justify"><strong>HS PLUS d.o.o.</strong></p>
<p class="ql-align-justify"><strong>Postanska ulica 25</strong></p>
<p class="ql-align-justify"><strong>10410 Velika Gorica</strong></p>
<p class="ql-align-justify">Dupa receptionarea si verificarea produsului returnat, rambursarea va fi efectuata prin aceeasi metoda de plata folosita la comanda sau printr-o alta metoda convenita cu dvs.</p>
<p class="ql-align-justify">Daca produsul returnat prezinta deteriorari sau urme de utilizare excesiva, magazinul isi rezerva dreptul de a aplica o diminuare proportionala a valorii rambursate, in conformitate cu legislatia aplicabila.</p>
</div>
        <img decoding="async" id="close_withdrawal_policy" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
    </div>
</div>
        <div id="custom_mailing_checkout_field">
            <p class="form-row email_opt_in" id="email_opt_in_field" data-priority="15"><span class="woocommerce-input-wrapper"><label class="checkbox " ><input type="checkbox" name="email_opt_in" id="email_opt_in" value="1" class="input-checkbox "  /> Da, doresc sa aflu primul despre ofertele curente. <span id="mailing_read_more_link" style="text-decoration: underline">Mai multe informatii</span>&nbsp;<span class="optional">(optional)</span></label></span></p>        </div>
        <div id="checkout-popup">
            <div class="checkout-popup-wrapper">
                <img decoding="async" class="img-info" src="https://images.vigo-shop.com/general/vigoshop_info.svg">
                <span>HSplus d.o.o. poate utiliza datele personale trimise (inclusiv istoricul comenzilor si preferintele dvs.) pentru comunicari personalizate prin SMS, telefon, cataloage tiparite si/sau e-mail despre produse, oferte speciale, cercetari, promotii, evenimente si alte comunicari. Va puteti retrage consimtamantul pentru e-mail in orice moment prin linkul de dezabonare din fiecare mesaj. Informatii suplimentare, inclusiv despre exercitarea drepturilor dvs. privind datele personale colectate, gasiti in                     <span id="terms-conditions-content_email-checkbox">
                        TERMENII SI CONDITIILE                    </span>.
                        <div class="terms-conditions-content_email" style="display: none;">
<h2 class="ql-align-justify"><strong>Termeni si conditii generale</strong></h2>
<p class="ql-align-justify">Datele personale trimise pot fi folosite pentru informari comerciale legate de produse, oferte speciale, noutati si campanii promotionale, doar in conditiile prevazute de legislatia aplicabila si conform preferintelor dvs.</p>
<p class="ql-align-justify">Va puteti retrage acordul in orice moment, iar detalii suplimentare despre prelucrarea datelor personale si drepturile dvs. sunt disponibile in politica de confidentialitate si in termenii magazinului.</p>
</div>
                    </div>
            </div>
    
  </form>
  </div>

</div>
      </article>

  </div>
</main>
<div class="footer-wrap">

    
<footer class="footer">
  <div class="general-sub-banner-wrapper">
    <div class="inner_wrapper">

        

        <div class="partial_inner_section">
            <img src="https://images.vigo-shop.com/general/banner_icons/delivery_icon.svg" alt="">
            <div class="text_wrapper">
                Dostavlja: Serviciu de livrare rapida            </div>
        </div>

                    <div class="partial_inner_section">
                <img src="https://images.vigo-shop.com/general/banner_icons/COD_icon.svg" alt="">
                <div class="text_wrapper">Plata ramburs</div>
            </div>
                <div class="partial_inner_section delivery-from-eu-warehouse ">
            <img class="delivery-from-eu-warehouse__icon" src="https://images.vigo-shop.com/general/flags/eu-warehouse.svg">
            <div class="text_wrapper delivery-from-eu-warehouse__text">Depozit in UE</div>
        </div>
            </div>
</div>
<div class="footer-payment bg--primary-dark c--white ">
    <div class="footer-payment__content container container--l">
        <div class="footer-mobile-payment hiddenOnDesktop">

            <div class="footer-mobile-payment__links">
                <div class="footer-mobile-payment__links-content  s-left--s s-right--s s-bottom--m opened">
                    <div class="footer-main__links">
                        <ul>
                                                            <li>
                                    <a href="https://vigoshop.hr/termeni-si-conditii/"
                                       class="button button--link c--gray">Termeni si conditii generale</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.hr/politica-de-confidentialitate/"
                                       class="button button--link c--gray">Politica de confidentialitate</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.hr/politica-de-cookies/"
                                       class="button button--link c--gray">Politica de cookies</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.hr/drept-de-retragere/"
                                       class="button button--link c--gray">Drept de retragere</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.hr/reclamatii-si-litigi/"
                                       class="button button--link c--gray">Reclamatii si litigii</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.hr/schimb-in-garantie/"
                                       class="button button--link c--gray">Schimb in garantie</a>
                                </li>
                                                            <li>
                                    <a href="https://vigoshop.hr/despre-companie/"
                                       class="button button--link c--gray">Despre companie</a>
                                </li>
                                                            <li>
                                    <a href="https://manuals.hs-plus.com/ro?brand=vigoshop"
                                       class="button button--link c--gray">Instructiuni de utilizare</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
            </div>
                            <div class="footer-payment__top footer-payment__top--mobile hiddenOnDesktop s-top--m">
                    <a class="button button--link" id="scroll-to-top">
                        <div class="flex flex--autosize flex--middle flex--center">
                            <div class="flex__item back-top-icon"><svg viewBox="0 0 17 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" /></svg></div>
                            <div class="flex__item f--m c--lightgray scroll-to-top-text">Natrag na vrh</div>
                        </div>
                    </a>
                </div>
                    </div>
        <div class="flex flex--autosize flex--apart footer-payment--wrapper">
            <div class="flex__item col-md-5 footer-payment__first">
                <div class="flex flex--center flex--wrap flex--autosize flex--gaps flex--bottom">
                    <div class="smdWrapperTag"></div>                                       <div class="flex__item norton-security-logo">
                        <img src="https://images.vigo-shop.com/general/footer/norton_logo.svg">
                    </div>
                                        <div class="flex__item">
                        <div class="flex flex--autosize flex--bottom">
                            <div class="flex__item"><svg viewBox="0 0 13 17" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M10.9107 7.38848H11.6071C12.3761 7.38848 13 8.04356 13 8.85098V14.701C13 15.5084 12.3761 16.1635 11.6071 16.1635H1.39286C0.623884 16.1635 0 15.5084 0 14.701V8.85098C0 8.04356 0.623884 7.38848 1.39286 7.38848H2.08929V5.19473C2.08929 2.64145 4.0683 0.563477 6.5 0.563477C8.9317 0.563477 10.9107 2.64145 10.9107 5.19473V7.38848ZM4.41071 5.19473V7.38848H8.58928V5.19473C8.58928 3.98512 7.65201 3.00098 6.5 3.00098C5.34799 3.00098 4.41071 3.98512 4.41071 5.19473Z" fill="white"/>
            </svg></div>
                            <div
                                class="flex__item f--bold c--gray">100% sigurna kupnja</div>
                        </div>
                        <div
                            class="f--s c--gray">securizat prin criptare pe 256 de biti</div>
                    </div>
                </div>
            </div>
                        <div class="flex__item col-md-3 footer-payment__top hiddenOnMobile">
                <a class="button button--link" id="scroll-to-top">
                    <div class="flex flex--autosize flex--middle">
                        <div class="flex__item"><svg viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" fill="#99A0A7"/></svg></div>
                        <div class="flex__item f--m c--lightgray">Natrag na vrh</div>
                    </div>
                </a>
            </div>
                                    <div class="flex__item col-md-4 footer-payment__badges">
                <div class="flex flex--center flex--wrap flex--middle">
                                                <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/visa.svg" alt="Visa">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/mastercard_icon.svg" alt="Mastercard">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/general_cod_payment_icon.svg" alt="COD">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/paypal_icon.svg" alt="Paypal">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/maestro-icon.svg" alt="Maestro">
                            </div>
                                        </div>
                            </div>
                    </div>
    </div>
</div>
    <div class="footer-copyright bg--primary-dark c--white">
        <div class="footer-copyright__content">
            <div class="t--center f--s c--gray">Copyright © 2018 - 2026 -  internetska trgovina Vigoshop (HS plus d.o.o)</div>
        </div>
    </div>
</footer>
<footer class="footer-mobile">
  </footer>
            <div class="hs_loader">
                <img src="https://images.vigo-shop.com/general/logo_loader_simple.svg">
            </div>
        <div id="contact-info-modal" class="mobile-notice-modal hidden">
    <div class="wrapper">
        <div class='mobile-notice-modal__content'>
                    <div class="modal-close">
                <img id="close_terms_conditions" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
            </div>
            <div class='mobile-notice-modal__head s-all--s'>
                <div class="f--l f--bold c--darkgray">Aveti nevoie de ajutor la cumparare?</div>
                <div class="f--s c--gray">Za Vas smo dostupni svaki radni dan od <strong>07:00 - 19:00</strong>, a vikendom od <strong>08:00 - 18:00.</strong></div>
            </div>
                <div class="mobile-notice-modal__body">
            <div class="flex flex--vertical">
               
                                                    <div class="border border--top border--light"></div>
                    <a class="  flex__item t--no-decoration c--text s-all--s"
                       href="https://api.whatsapp.com/send?phone=+386 64 109 783&text=Pozdrav,%20zanimam%20se%20za%20kupovinu%20produsului: (vigoshop)">
                        <div class="flex flex--autosize flex--gaps">
                            <div class="flex__item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs><linearOrasient id="ge5urdfv4a" x1=".5" x2=".5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#66ff74"/><stop offset="1" stop-color="#00b822"/></linearOrasient><clipPath id="1s5y4t255b"><path data-name="Rectangle 3641" style="fill:none" d="M0 0h17.171v17.296H0z"/></clipPath></defs><path data-name="Path 11937" d="M4 0h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" style="fill:#00b822"/><g data-name="Group 10478"><g data-name="Group 10477" style="clip-path:url(#1s5y4t255b)" transform="translate(3.415 3)"><path data-name="Path 11934" d="M8.594 1.484a7.093 7.093 0 1 1-3.846 13.052.142.142 0 0 0-.114-.018l-1.128.3L2.1 15.2l.377-1.406.29-1.084a.142.142 0 0 0-.021-.118 7.091 7.091 0 0 1 5.848-11.1m0-1.492a8.577 8.577 0 0 0-7.443 12.84.142.142 0 0 1 .014.108l-.123.459-.377 1.406L0 17.3l2.483-.665 1.406-.377.526-.141a.142.142 0 0 1 .1.013A8.577 8.577 0 1 0 8.594 0" style="fill:#fff"/><path data-name="Path 11935" d="M52.9 55.99a1.835 1.835 0 0 1 .8-.027.4.4 0 0 1 .293.226c.324.688.431.961.663 1.486a.986.986 0 0 1-.233 1.118 12.15 12.15 0 0 0-.333.316c-.168.179.9 2.308 3.106 2.9a.276.276 0 0 0 .284-.092c.223-.271.438-.554.659-.828a.4.4 0 0 1 .459-.118c.732.286.942.448 1.675.734a.378.378 0 0 1 .284.386 1.781 1.781 0 0 1-1.2 1.845 2.723 2.723 0 0 1-.462.076c-2.867.179-6.64-2.839-7.028-5.7A2.291 2.291 0 0 1 52.9 55.99" transform="translate(-47.575 -51.327)" style="fill:#fff"/></g></g></svg></div>
                            <div
                                class="flex__item desktop_contact desktop_whatsapp_contact">Trimiteti-ne un mesaj pe WhatsApp</div>
                            <div class="flex__item mobile_contact mobile_whatsapp_contact">
                                <strong>Whatsapp</strong></div>
                        </div>
                    </a>
                                                                    <div class="border border--top border--light"></div>
                    <a class="  flex__item t--no-decoration c--text s-all--s" href="tel:+385-1-3300-004">
                        <div class="flex flex--autosize flex--gaps">
                            <div class="flex__item"><svg viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path d="M18.298 13.0304L14.2715 11.3042C13.7973 11.0989 13.241 11.2374 12.9189 11.6374L11.2827 13.6346C8.71287 12.3729 6.62544 10.2833 5.36371 7.71585L7.36059 6.08161C7.75952 5.75577 7.89534 5.20253 7.69361 4.72829L5.96763 0.702075C5.74148 0.185903 5.18461 -0.0964881 4.63947 0.03005L0.8988 0.89281C0.369985 1.01341 0 1.47911 0 2.02312C0 11.3855 7.61494 19 16.9777 19C17.5221 19 17.9864 18.6301 18.1077 18.1012L18.9705 14.3608C19.0955 13.8171 18.8139 13.2531 18.298 13.0304Z"/></svg></div>
                            <div class="flex__item desktop_contact desktop_phone_contact">Pentru comenzi sunati la: <span class="phone-padding-top"><strong>01 3300 004</strong></span></div>
                            <div class="flex__item mobile_contact mobile_phone_contact">
                                <strong>01 3300 004</strong></div>
                        </div>
                    </a>
                                <!--                ALL-14367 Remove contact support icon-->
<!--                -->                                <div class="border border--top border--light"></div>
                <a class="flex__item t--no-decoration c--text s-all--s" href="/cdn-cgi/l/email-protection#b4dddad2dbf4c2ddd3dbc7dcdbc49adcc6">
                    <div class="flex flex--autosize flex--gaps">
                        <div class="flex__item"><svg viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92539 9.625L0.636328 3.17578C0.234766 2.86328 0 2.38281 0 1.875C0 0.839453 0.839453 0 1.875 0H18.125C19.1602 0 20 0.839453 20 1.875C20 2.38281 19.7305 2.86328 19.3652 3.17578L11.0762 9.625C10.4438 10.1172 9.55781 10.1172 8.92539 9.625ZM8.15781 10.609C8.70859 11.0382 9.3543 11.25 10 11.25C10.6445 11.25 11.293 11.0391 11.8438 10.6133L20 4.26562V13.125C20 14.1605 19.1605 15 18.125 15H1.875C0.839453 15 0 14.1602 0 13.125V4.26562L8.15781 10.609Z"/></svg></div>
                        <div
                            class="flex__item"><strong><span class="__cf_email__" data-cfemail="89e0e7efe6c9ffe0eee6fae1e6f9a7e1fb">[email&#160;protected]</span></strong></div>
                    </div>
                </a>
            </div>
                        <!--                ALL-14367 Remove contact support icon-->
<!--            --><!--            <div class="border border--top border--light"></div>-->
<!--            <a class="flex__item t--no-decoration c--text s-all--s" href="--><!--">-->
<!--                <div class="flex flex--autosize flex--gaps">-->
<!--                    <div class="flex__item">--><!--</div>-->
<!--                    <div-->
<!--                        class="flex__item">--><!--</div>-->
<!--                </div>-->
<!--            </a>-->
        </div>
<!--    -->    </div>
</div>
    </div>
        <link rel='stylesheet' id='check-client-css' href='https://vigoshop.hr/app/plugins/core/resources/dist/css/check-client/css/check-client-8571deb0ef.css' type='text/css' media='all' />
</div>
</body>
</html>
