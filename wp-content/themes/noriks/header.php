<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">


<?php wp_head(); ?>

<style id="noriks-ro-header-fix">
.top-header {
  width: 100%;
  background: #d5d5d5;
  padding: 2px 0;
  overflow: hidden;
}

.marquee {
  width: 100%;
  overflow: hidden;
  white-space: nowrap;
  color: black;
}

.marquee-content {
  display: inline-flex;
  align-items: center;
  color: black;
  gap: 70px;
  animation: marqueeScroll 28s linear infinite;
}

.marquee-content span {
  display: inline-block;
  color: black;
}

.marquee-content a {
  color: black;
  font-size: 13px;
  font-weight: normal;
  text-decoration: none;
  text-transform: uppercase;
}

@keyframes marqueeScroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.header.navbar {
  background-color: black;
  padding: 5px 20px 5px 10px;
}

.header .container-header {
  max-width: 1800px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-left: 15px;
  padding-right: 15px;
}

.header .navbar-center {
  display: flex;
  gap: 5px;
  align-items: center;
}

.header .navbar-center a {
  color: white;
  text-decoration: none;
  margin: 0 15px;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.59px !important;
}

.header .navbar-right {
  display: flex;
  align-items: center;
}

.header .language-selector {
  display: flex;
  align-items: center;
  background: rgba(255,255,255,0.05);
  padding: 5px 10px;
  border-radius: 20px;
  margin-right: 20px;
  cursor: pointer;
}

@media (min-width: 769px) {
  .mobile-only {
    display: none !important;
  }
}

.language-selector .flag,
.language-selector img.flag,
.language-option img {
  width: 20px !important;
  max-width: 20px !important;
  min-width: 20px !important;
  height: 15px !important;
  object-fit: cover !important;
  display: inline-block !important;
}

.language-selector span {
  color: white;
  font-size: 14px;
  font-weight: 400;
}

.header .mobile-menu-toggle {
  display: none;
  font-size: 33px;
  color: white;
  cursor: pointer;
}

@media (max-width: 768px) {
  .hidden-mobile {
    display: none !important;
  }

  .header .mobile-menu-toggle {
    display: block;
  }

  .header .navbar-center {
    flex-direction: column;
    position: fixed;
    top: 0;
    left: -350px;
    width: 350px;
    height: 100vh;
    background-color: #111;
    padding: 40px 20px;
    transition: left 0.3s ease-in-out;
    z-index: 999999999;
    box-shadow: 2px 0 8px rgba(0,0,0,0.4);
  }

  .header .navbar-center.active {
    left: 0;
  }

  .header .navbar-center a {
    color: white;
    font-size: 18px;
    margin: 10px 0;
    text-decoration: none;
  }

  .header .navbar-right {
    display: none;
  }

  .language-selector.mobile-only {
    display: flex;
    align-items: center;
    margin-top: 30px;
    gap: 10px;
    color: white;
  }

  .language-selector.mobile-only .flag,
  .language-selector.mobile-only img.flag {
    width: 24px !important;
    max-width: 24px !important;
    min-width: 24px !important;
    height: auto !important;
  }
}
</style>


<!-- SqualoMail Popup -->
<!--
<script type="text/javascript" src="https://6096.squalomail.net/forms/1/popup.js" async></script>
-->


<!-- Price update script enqueued via functions.php -->
<!-- Hotjar tracking code removed -->


</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
	
	
	
	<div class="top-header">
  <div class="marquee">
    <div class="marquee-content">
      <span><a href="/ro/shop">Livrare gratuita pentru comenzi de peste 70 EUR</a></span>
      <span><a href="/ro/shop">30 de zile fara risc - incearca fara griji</a></span>
      <!--<span><a href="/ro/shop">Zimska ponuda: Do 70% popusta!</a></span>-->

      <!-- DUPLICATED for seamless infinite loop -->
      <span><a href="/ro/shop">Livrare gratuita pentru comenzi de peste 70 EUR</a></span>
      <span><a href="/ro/shop">30 de zile fara risc - incearca fara griji</a></span>
     <!-- <span><a href="/ro/shop">Zimska ponuda: Do 70% popusta!</a></span>-->
      
       <!-- DUPLICATED for seamless infinite loop -->
      <span><a href="/ro/shop">Livrare gratuita pentru comenzi de peste 70 EUR</a></span>
      <span><a href="/ro/shop">30 de zile fara risc - incearca fara griji</a></span>
     <!-- <span><a href="/ro/shop">Zimska ponuda: Do 70% popusta!</a></span>-->
    </div>
  </div>
</div>

<!-- Marquee styles moved to css/header.css -->




	
	
	
	<header class="navbar header">
	    
	    	<?php
	    	
	    //	die();
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		//do_action( 'storefront_header' );

?>


 <div class="container container-header">
     
      <!-- Hamburger Icon (Visible on mobile only) -->
    <div class="mobile-menu-toggle" onclick="toggleMobileMenu()">
      ☰
    </div>
     
     
    <div class="navbar-left">
      <a href="<?php echo get_home_url(); ?>">
        <span style="color: white; font-family: 'Roboto', sans-serif; font-size: 33px; font-weight: bold; letter-spacing: 1.75px;">NORIKS</span>
       
      </a>
    </div>

 
 
 

   <!-- Mobile + Desktop Navigation -->
<?php $header_nav = get_field("mainheader_menu", "option"); ?>
<nav class="navbar-center mobile-hidden" id="mobileMenu">
    <button class="mobile-menu-close mobile-only" onclick="toggleMobileMenu()">×</button>

    <?php if ($header_nav): ?>
        <?php $i = 0; ?>
        <?php foreach ($header_nav as $item): ?>
            <?php $link = $item['link']; $text = $item['text']; ?>


            <?php if ($i === 0): ?>
                <!-- FIRST ITEM WITH DROPDOWN -->
                <div class="nav-item has-dropdown">
                    <a href="<?php echo esc_url($link); ?>" class="nav-link">
                        <?php echo esc_html($text); ?>
                    </a>
                        
                    <!--
                    <div class="dropdown-menu">
                        <a href="/ro/shop">Creeaza-ti pachetul</a>
                        <a href="/ro/product-category/bundles/">Pachete gata pregatite</a>
                    </div>
                    -->
                </div>
                
            <?php elseif ($i === 1): ?>

                <div class="nav-item has-dropdown">
                    <a href="<?php echo esc_url($link); ?>" class="nav-link">
                        <?php echo esc_html($text); ?>
                    </a>
                    <!--
                    <div class="dropdown-menu">
                        <a href="/ro/product-category/boxeri-creeaza-pachet/">Creeaza-ti pachetul</a>
                        <a href="/ro/product-category/boxeri/">Pachete gata pregatite</a>
                    </div>
                    -->
                </div>
                
            <?php else: ?>
                <!-- NORMAL ITEMS -->
                <a href="<?php echo esc_url($link); ?>" class="nav-link">
                    <?php echo esc_html($text); ?>
                </a>
            <?php endif; ?>

            <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif; ?>


    <a class="mobile-only-menu-item" href="mailto:info@noriks.com" style="color: white;">
        <i class="fas fa-envelope" style="margin-right: 8px;"></i>info@noriks.com
    </a>

    <div class="language-selector mobile-only" onclick="openLanguageModal()">
        <img src="https://static.devit.software/countries/flags/rectangle/ro.svg" alt="" class="flag">
        <span>Romania (RO)</span>
    </div>
</nav>



<!-- Dropdown nav styles removed (were commented out) -->
    
    
    <!-- old nav without dropdown 
    

    <?php $header_nav = get_field("mainheader_menu", "option"); ?>
    <nav class="navbar-center mobile-hidden" id="mobileMenu">
        <button class="mobile-menu-close mobile-only " onclick="toggleMobileMenu()">×</button>
      <?php if ($header_nav): ?>
        <?php foreach ($header_nav as $item): ?>
          <?php $link = $item['link']; $text = $item['text']; ?>
          <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($text); ?></a>
        <?php endforeach; ?>
      <?php endif; ?>
      
            <a class="mobile-only-menu-item" href="tel:+38518801114" style="color: white;">
  <i class="fas fa-phone" style="margin-right: 8px;"></i>+385 188 011 14
</a>
<a class="mobile-only-menu-item" href="mailto:info@noriks.com" style="color: white;">
  <i class="fas fa-envelope" style="margin-right: 8px;"></i>info@noriks.com
</a>
      
        <div class="language-selector mobile-only" onclick="openLanguageModal()">
          <img src="https://static.devit.software/countries/flags/rectangle/ro.svg" alt="" class="flag">
          <span>Romania (RO)</span>
        </div>

    </nav>
    
    -->
    
    
    
    
    
    
    




    <div class="navbar-right">
      <div class="language-selector hidden-mobile" onclick="openLanguageModal()">
        <img src="https://static.devit.software/countries/flags/rectangle/ro.svg" alt="" class="flag">
        <span>Romania (RO)</span>
      </div>

      <div class="cart-auto-icon">
          
          
          
        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
            <a class="header-cart" href="/ro/cart">
                <div class="cart-icon">
                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="23" viewBox="0 0 26 23">
                    <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAXCAYAAAAV1F8QAAACM0lEQVR4AbRVPYsaURS9M07AXgURixR+dbtbS9ZSEIv8AbUTxb+w6exFLURQWxUUooWi4AciiDGdFoqIhE2tVVZEcDLngUM2mxlnwjrMee+8e8+9h3m84fGk83l4uBfv7+5EnWWky8jn84mzbzOafZ8RuB4zXUaFQoEMgkCC8IHAb2KUzWZFh8NBx+ORARwxrWaavujx8ZMYj8dZz2QySQAWiCEHfg2ajAqFIhkMBppOpzDhJCMOHDHkrpkgf9UonU6LTqeTXl5+USgUQg0DOGLIQcOCKoOqkdfrFROJBCt/evpC6/WaYwtpAEdMogQNtOBKUDUqlUpsy5bLJaVSKdnk0gwx5LCFxWLxEv7nzFerVVHpcblcrMjj8ZCSBjmI3G63ogYevN1uh+6msFgsxPf7/ZuaoPlwOCS+1WqB3xSdTof4yWTC7XY7TUbn85m63S4DuJai/X6P/49jp240GmmpoWAwSH6/nwMCgYCmmvF4zHTMqNfrsYXasFgsqN1uy0dc2g5uPp+rlbDcpTczajS+NlhUZbBarW+yNpvtTezvQLPZ/IEYM3p+/vlZ+tOxVoTZbKZcLocLT5BEQj6fF00mk0SV381mQ9vt9iMUzAgERxCzGmKxGB0OhxMQjUbVpCw3GAzYjEE2kvYc66swGo0EXBVKgj97ykb1ep07nU5S+n1e9KrVavLhkY3QvlwuY3oXVCqVV31eGUUiEU66WwjHdrVa0f8AtZlMhsLhsPw1cPwNAAD//6RURXgAAAAGSURBVAMAUxNB668Ak78AAAAASUVORK5CYII=" x="0" y="0" width="26" height="23"/>
                  </svg>
                    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </div>
            </a>
        <?php endif; ?>
                
        
        
        
        
        <!-- Cart icon styles moved to css/header.css -->
      </div>
    </div>
  </div>
</header>


<!-- Mobile nav styles moved to css/header.css, JS moved to js/header.js -->





<!-- 🌐 Language Modal -->
<div id="languageModal" class="language-modal">
  <div class="language-modal-content">
    <span class="language-close" onclick="closeLanguageModal()">&times;</span>
    <h3><?php  echo get_field("country_shop_list_POPUP_t1","options"); ?></h3>
   <div class="language-options">
 
 
      
  <a href="/" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/eu.svg"><span>English (Europe)</span>
  </a>
  
<a href="/ro" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/ro.svg"><span>Romania (RO)</span>
  </a>

<a href="/hr" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/hr.svg"><span>Croatia (HR)</span>
  </a>
  
  <!--
   <a disabled href="/hu" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/hu.svg"><span>Hungary (HU)</span>
  </a>
    <a href="/de" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/de.svg"><span>Germany (DE)</span>
  </a>
  -->

  <a href="/pl" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/pl.svg"><span>Poland (PL)</span>
  </a>
  <a href="/sk" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/sk.svg"><span>Slovakia (SK)</span>
  </a>
  <a href="/cz" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/cz.svg"><span>Czech Republic (CZ)</span>
  </a>
  <!--
  <a href="/ro" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/ro.svg"><span>Romania (RO)</span>
  </a>
  -->
  <a href="/gr" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/gr.svg"><span>Greece (GR)</span>
  </a>
  <!--
  <a href="/si" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/si.svg"><span>Slovenia (SI)</span>
  </a>
  -->
  
    <a href="https://www.noriksofficial.com/" class="language-option">
    <img src="https://static.devit.software/countries/flags/rectangle/us.svg"><span>English (USA)</span>
  </a>
  
  
</div>
  </div>
</div>

<!-- Language modal styles moved to css/header.css, JS moved to js/header.js -->


<!-- 🌐 Language Modal -->




<!-- Navbar and site layout styles moved to css/header.css -->
	
	

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full2">

		<?php
		do_action( 'storefront_content_top' );
