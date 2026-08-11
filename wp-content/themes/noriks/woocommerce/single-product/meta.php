<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<style>

      .features2 {
    margin-top: 12px;
    margin-bottom: 12px;
      }

      .features__row {
        display: flex;
        justify-content: space-between;
        gap: 28px;
      }

      .feature {
        flex: 1 1 0;
        text-align: center;
      }

      .feature__icon {
 
        margin: 0 auto 0px;
        display: block;
        margin-bottom: 0 !important;
      }

      .feature__text {
        margin: 0;
        line-height: 1.1;
    font-size: 14px;
    margin: 0;
        font-family: 'Barlow', sans-serif;
      }

      /* Responsive: stack nicely on small screens */
      @media (max-width: 640px) {
        .features__row {
     
        }
      }
    </style>


 <section class=" features2" aria-label="Beneficii">
      <div class="features__row">
        <!-- 1) Truck -->
        
        
          <div class="feature">
          
  <img src="<?php echo get_template_directory_uri(); ?>/img/cod_icon_.png" alt="Customer Support Icon" class="feature__icon info-icon">
          <p class="feature__text">Plată ramburs</p>
        </div>
        
        
        <div class="feature">
      <img src="https://noriks.com/ro/wp-content/uploads/2025/07/footer_icon1-1.png" alt="Shirt Icon" class="feature__icon info-icon">
          <p class="feature__text">Testează 30 de zile, fără risc</p>
        </div>
        
        

        <!-- 2) Smiley -->
        <div class="feature">
     
       
        <img src="https://noriks.com/ro/wp-content/uploads/2025/07/footer_icon3-1.png" alt="Shipping Icon" class="feature__icon info-icon">
          <p class="feature__text">Livrare gratuită pentru comenzi de peste 350 lei</p>
        </div>

    
    
      </div>
    </section>




<?php if ( noriks_is_type( 'ortopas' ) ) : ?>
<!-- Ortopas: kartica "preverjeno s strani zdravnika" (slika) -->
<div class="ortopas-doctor-card" style="margin:14px 0;">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ortopas/ortopas-zdravnik.png' ); ?>"
       alt="Verificat de medic — centura ortopedică NORIKS"
       style="width:100%; height:auto; display:block; border-radius:10px;"
       loading="lazy" decoding="async">
</div>
<?php endif; ?>

<!-- date and countdown section -->

<div class="shipping-box">
  <h2 id="shipping-window" class="shipping-title"></h2>
  <p class="shipping-sub">
    Comandă în următoarele <span id="midnight-countdown" class="countdown"></span>
  </p>
</div>

<style>
  .shipping-box { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#222; margin-top: 13px;
    margin-bottom: 13px; 
      
    background: #f4f4f4;
    padding: 8px 6px 8px 12px;
    border-radius: 5px;
          text-align: center;
      
      
      
  }
  .shipping-title { font-family: 'Roboto', sans-serif;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1.4 !important; margin-bottom: 0px;
    color: #222 !important; }
  .shipping-sub { font-size: 14px; margin: 0; }
  .countdown { color: #22a155; font-weight: 700; }
</style>

<script>
  (function () {
    const weekdays = ['duminică','luni','marți','miercuri','joi','vineri','sâmbătă'];

    // Helper to add business days (skip Saturday/Sunday)
    function addBusinessDays(date, days) {
      let result = new Date(date);
      let added = 0;
      while (added < days) {
        result.setDate(result.getDate() + 1);
        const day = result.getDay();
        if (day !== 0 && day !== 6) { // skip Sunday(0) + Saturday(6)
          added++;
        }
      }
      return result;
    }

    // Get shipping days: today +2 business days, today +3 business days
    const today = new Date();
    const first  = addBusinessDays(today, 2);
    const second = addBusinessDays(today, 3);

    function formatDayMonth(d) {
      return `${d.getDate()}.${d.getMonth()+1}.`; // e.g. 21.8.
    }

    const windowEl = document.getElementById('shipping-window');
    windowEl.textContent = `Livrare de la ${weekdays[first.getDay()]} ${formatDayMonth(first)} până la ${weekdays[second.getDay()]}, ${formatDayMonth(second)}`;

    // Countdown to midnight
    const cdEl = document.getElementById('midnight-countdown');

    function nextMidnight(now) {
      const n = new Date(now);
      n.setHours(24, 0, 0, 0);
      return n;
    }

    function updateCountdown() {
      const now = new Date();
      const end = nextMidnight(now);
      let diff = Math.max(0, end - now);

      const h = Math.floor(diff / 3_600_000); diff -= h * 3_600_000;
      const m = Math.floor(diff / 60_000);    diff -= m * 60_000;
      const s = Math.floor(diff / 1000);

      cdEl.textContent = `${h}h ${m}min ${s}s`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  })();
</script>


<!-- date and countdown section -->





<?php 

$is_singles_boxers = has_term( '1-bucata-boxeri', 'product_cat', $current_product_id );

$is_boxers = has_term( array( 'boxeri','orto-bokserice', 'seturi-boxeri' ), 'product_cat', $current_product_id ) && ! has_term( array( 'black-friday', 'seturi-tricouri-si-boxeri' ), 'product_cat', $current_product_id );

$is_carape = has_term( array( 'sosete', 'sosete-de-iarna' ), 'product_cat', $current_product_id );

$is_mixed_bundle = has_term( array( 'seturi', 'seturi-tricouri-si-boxeri', 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id );

?>



<?php if( !$is_boxers && !$is_carape ): ?>


<!-- my thre icons content -->


<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>


<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 15px;
    margin-bottom: 15px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>
  
 <?php endif; ?>


<!--
<div style="margin-bottom: 15px;" class="woocommerce-product-details__short-description">
    
    
	<?php echo apply_filters( 'the_content', $product->get_description() );  ?>
	
	
</div>
-->



 <!-- icons -->
 
 <!--
 <div class="info-section">

    <div class="info-box">
     
     
     
      

     <img src="<?php echo get_field("singlepp_bottomicons_img1","options"); ?>" alt="" width="25" height="25">
     <?php echo get_field("singlepp_bottomicons_t1","options"); ?>

    
     
     
    </div>
    
    
    
     <div class="info-box">
    
         <a href="tel:+38517776471" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none; ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 1 .737-.07l2.547 1.272a.678.678 0 0 1 .291.901L6.29 5.72a.678.678 0 0 0 .145.776l2.457 2.457a.678.678 0 0 0 .776.145l2.29-1.24a.678.678 0 0 1 .901.291l1.272 2.547a.678.678 0 0 1-.07.737l-1.175 1.769c-.46.692-1.232 1.043-2.036.964-2.322-.238-4.96-2.223-6.856-4.12C1.77 7.667-.214 5.03.024 2.707c.079-.804.272-1.577.964-2.036L3.654 1.33z"/>
  </svg>
  01 777 64 71
</a>

<a href="mailto:info@noriks.com" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
  </svg>
  info@noriks.com
</a>
         
   
     </div>
     

    <div class="info-grid">
      
      
      
      
      <div class="info-box">
       <img src="<?php echo get_field("singlepp_bottomicons_img2","options"); ?>" alt=""  width="25" height="25">
        <?php echo get_field("singlepp_bottomicons_t2","options"); ?>
      </div>
      <div class="info-box">
  
<img src="<?php echo get_field("singlepp_bottomicons_img3","options"); ?>" alt=""  width="25" height="25">
<?php echo get_field("singlepp_bottomicons_t3","options"); ?>
      </div>
    </div>

  </div>
  -->
  
  <style>


    .info-section {
      display: flex;
      flex-direction: column;
      gap: 7px;
      max-width: 800px;
      margin: auto;
      margin-bottom: 25px;
    }
    
    .info-section img {
      width: 25px;
    }


    .info-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: #f5f6f8;
      border-radius: 3px;
      padding: 16px;
      color: #7b8a9b;
      font-weight: 500;
      font-size: 14px;
          font-family: 'Roboto', sans-serif; 
      text-align: center;
    }

    .info-grid {
      display: flex;
      gap: 7px;
    }

    .info-grid .info-box {
      flex: 1;
    }

    .info-box svg {
      width: 24px;
      height: 24px;
      fill: #7b8a9b;
    }
  </style>









 <!-- icons -->


 <div class="accordion">


    <!-- KidsNest: primele doua locuri din accordion (continut lung din summary) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Fața copilului dumneavoastră se modelează chiar acum — și aveți timp până la vârsta de 9 ani</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Cercetătorii căilor respiratorii și stomatologii pediatri avertizează de ani de zile asupra aceluiași tipar — despre care majoritatea părinților nu au auzit niciodată. Se numește <strong>sindromul feței alungite</strong> (facies adenoidian).</p>
        <p>În fiecare noapte în care copilul doarme cu gura deschisă pe o pernă nepotrivită, se întâmplă patru lucruri deodată: limba cade spre spate, maxilarul se retrage, cerul gurii se îngustează într-o boltă înaltă, iar fața începe să crească vertical în loc de orizontal. După mii de astfel de nopți între 3 și 9 ani, schimbările se fixează.</p>
        <p>De aceea copiii de 9 ani ajung astăzi la ortodont cu bărbia retrasă, cearcăne, dinți înghesuiți — și o factură scumpă pentru aparatul dentar. Felul în care respiră copilul între 3 și 9 ani influențează puternic fața pe care o va purta toată viața.</p>
        <p>NORIKS <strong>KidsNest</strong> este conceput să acționeze asupra cauzei de bază — poziția greșită a capului și a maxilarului în cele 9 ore de somn — cu o <strong>structură ergonomică cu 3 zone</strong> care menține capul, gâtul și maxilarul în alinierea corectă încă din prima noapte.</p>
        <p><strong>Ce veți vedea la copilul dumneavoastră:</strong></p>
        <ul style="margin:6px 0 12px;padding-left:18px;">
          <li style="margin:0 0 7px;"><strong>Mai puțină respirație pe gură:</strong> buze închise pe timpul nopții, revenirea respirației pe nas, sfârșitul gurii uscate dimineața.</li>
          <li style="margin:0 0 7px;"><strong>Nopți mai liniștite:</strong> la majoritatea copiilor sforăitul se calmează în 1–2 săptămâni.</li>
          <li style="margin:0 0 7px;"><strong>Sprijin pentru maxilarul în dezvoltare:</strong> poziție corectă noapte de noapte, în anii în care contează cel mai mult.</li>
          <li style="margin:0 0 7px;"><strong>Prevenție inteligentă:</strong> o singură pernă astăzi — în locul unor corecții costisitoare mâine.</li>
        </ul>
        <p><strong>O pernă în seara asta. Sau mii mai târziu.</strong></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Mai mare de 9 ani? Fereastra se îngustează. Daunele nu se opresc.</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Sfatul pe care l-ați auzit este doar pe jumătate adevărat. Da, cerul gurii se fixează în jurul vârstei de 9 ani. Dar fața se dezvoltă până la 20 de ani, maxilarul inferior crește până la 17, iar căile respiratorii se adaptează în permanență.</p>
        <p>De aceea, fiecare noapte de respirație pe gură după 9 ani adaugă daune noi peste cele vechi: scrâșnitul dinților, dureri de cap, somn care nu odihnește, scăderea concentrării — și o oboseală pe care toți o confundă cu lenea. Adolescentul dumneavoastră nu este leneș. El abia respiră șase ore în fiecare noapte.</p>
        <p>KidsNest în mărimea <strong>9–18 ani</strong> este realizată pentru un cap, un gât și niște umeri mai mari. Alt contur, altă înălțime, alt sprijin. Același mecanism de bază: alinierea corectă a capului, gâtului și maxilarului, toată noaptea, pe un corp care încă mai crește.</p>
        <p>Ce observă părinții: sforăitul se calmează în 7 până la 14 nopți, revine energia adevărată de dimineață, durerile de cap pălesc, concentrarea se întoarce.</p>
        <p>Cea mai bună fereastră rămâne între 3 și 9 ani. O fereastră puternică este între 8 și 18. Niciuna nu este complet închisă — dar fiecare noapte de așteptare adaugă presiune unui corp care încearcă să se refacă.</p>
        <p><strong>Ziua de ieri a trecut. Seara aceasta este încă a dumneavoastră.</strong></p>
      </div>
    </div>
    <?php endif; ?>


    <!-- Perna ortopedică ErgoSit: primele doua locuri din accordion (copie a originalului, RO) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk', $current_product_id) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Specificațiile produsului</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 8px;"><strong>Husa exterioară:</strong> Tricot respirabil, detașabilă și lavabilă la mașină, hipoalergenică</li>
          <li style="margin:0 0 8px;"><strong>Nucleul:</strong> Spumă adaptivă OrthoFlex™ | Netoxică, certificată OEKO-TEX® | Concepută pentru descărcarea presiunii + alinierea posturii</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Prin ce este atât de specială?</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 10px;"><strong>Spuma cu memorie OrthoFlex™:</strong> Spumă de înaltă densitate care descarcă presiunea și se adaptează fără să se turtească — susține coccisul, șoldurile și coloana pentru confort pe toată ziua.</li>
          <li style="margin:0 0 10px;"><strong>Husa BreatheEase™:</strong> Moale, respirabilă și delicată cu pielea. Se scoate și se spală la mașină, ca perna să rămână mereu proaspătă.</li>
          <li style="margin:0 0 10px;"><strong>Sprijin echilibrat:</strong> Nici prea moale, nici prea tare. Concepută să alinieze postura și să calmeze punctele dureroase după ore lungi de stat pe scaun.</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>


    <!-- 1 - detajli --> <!-- ascuns pentru norikshers + perna ortopedică -->
    <?php if ( ! ( function_exists('noriks_is_type') && noriks_is_type('norikshers', $current_product_id) ) && ! ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk', $current_product_id) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_1","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

         <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

                NORIKS KidsNest este realizată din spumă cu memorie hipoalergenică, certificată OEKO-TEX® — fără formaldehidă, metale grele sau BPA — cu o husă respirabilă, lavabilă, care se scoate simplu.<br><br>Structura sa ergonomică cu 3 zone primește delicat capul, susține gâtul și ajută la menținerea coloanei vertebrale în aliniere naturală — chiar și atunci când copilul se întoarce mult pe timpul nopții. Astfel încurajează respirația pe nas și un somn mai liniștit și mai profund.<br><br>Disponibilă în trei mărimi (1–3, 3–9 și 9–18 ani), crește odată cu copilul dumneavoastră și oferă înălțimea de sprijin potrivită în fiecare etapă de dezvoltare.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) ): ?>

                NORIKS KneeFix este o orteză flexibilă pentru genunchi care combină patru funcții într-un singur sistem de susținere: compresie reglabilă printr-o rotiță precisă, stabilizatoare laterale duble, o pernuță din gel care descarcă rotula și o margine siliconică antiderapantă care menține orteza la locul ei.<br><br>Spre deosebire de ortezele rigide, KneeFix nu imobilizează genunchiul — îl susține în timpul mișcării naturale. Compresia se reglează într-o secundă: dimineața mai strâns, după-amiaza mai lejer, în funcție de cât stai în picioare. Genunchiul capătă astfel stabilitate la ridicare, pe scări, la plimbare și la statul prelungit în picioare.<br><br>Materialul este ușor, respirabil și evacuează umezeala, așa că orteza poate fi purtată ore întregi fără transpirație și fără să taie. Este subțire și discretă — sub pantaloni aproape că nu se observă.<br><br>Este disponibilă în mărimi de la S la 2XL în funcție de greutatea corporală și în variante pentru genunchiul stâng și drept, astfel încât potrivirea rămâne precisă.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Boxerii NORIKS pentru incontinență sunt realizați din fibră de bambus moale, antibacteriană, cu un strat exterior hidrofob. În centru se află nucleul PureDry™ cu 7 straturi, care absoarbe instantaneu și blochează până la 300 ml de lichid, astfel încât pielea rămâne uscată, iar scurgerile rămân înăuntru.<br><br>Croiala este subțire și discretă — arată și se simte ca lenjeria obișnuită, fără volum inutil și fără senzația de „scutec”. Protecția pe lângă picioare previne scurgerile laterale, iar controlul mirosului menține prospețimea pe tot parcursul zilei.<br><br>Sunt lavabili și reutilizabili — își păstrează puterea de absorbție sute de spălări, ca alternativă ecologică și rentabilă la absorbantele și scutecele de unică folosință.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                NORIKS FIT este realizat dintr-o țesătură compresivă ionică avansată, care oferă o croială mulată, cu susținere. Compresia țintită strânge uniform abdomenul și șoldurile, netezește silueta și susține o postură dreaptă — fără o strângere care să limiteze respirația sau mișcarea.<br><br>Fibrele micro-țesute stimulează circulația și vă ajută să stați mai drept pe parcursul zilei și să vă simțiți mai sigur pe dumneavoastră. Țesătura este ușoară, respirabilă și absoarbe transpirația, astfel încât rămâneți uscat și confortabil.<br><br>Croiala subțire și discretă îl face invizibil sub orice cămașă, putând servi totodată și ca tricou sport. Rezultatul: un aspect mai îngrijit, o postură mai bună și încredere în sine — din clipa în care îl îmbrăcați.

         <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>



        <?php echo get_field("singlepp_acc_t_1","options"); ?>
        
        
        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        
                Tricourile noastre premium sunt fabricate dintr-un amestec premium de 60% bumbac filat în inel și 40% poliester, ceea ce asigură o țesătură extrem de moale și rezistentă la șifonare. <br><br>Boxerii NORIKS sunt fabricați dintr-un amestec premium de 95% modal și 5% elastan, ceea ce asigură o țesătură extrem de moale și elastică, care se adaptează perfect corpului. Talia elastică este concepută pentru o potrivire optimă, oferind confort fără constricție și un aspect perfect sub haine. <br>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) ): ?>

                NORIKS FisioRest este o pernă terapeutică pentru gât care combină tracțiunea, căldura și masajul prin vibrații într-un design ergonomic din spumă cu memorie. Întinde ușor gâtul la unghiul potrivit, descarcă coloana cervicală și eliberează tensiunea musculară prin căldură și masaj. Fără fir, reîncărcabilă și învelită în mătase moale și răcoritoare – sigură chiar și pentru somn.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) ): ?>

                Corectorul de halux NORIKS, cu terapie avansată de aliniere și mecanism articulat patentat, readuce ușor degetul mare în poziția sa naturală, ameliorează disconfortul și previne creșterea ulterioară a proeminenței. Designul flexibil îți permite să și mergi cu el. Se potrivește tuturor mărimilor de picior, fără parte stângă sau dreaptă. Pentru utilizare în repaus – în timpul odihnei, la TV, citind sau dormind.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

                Centura ortopedică NORIKS stabilizează țintit zona inferioară a spatelui cu ajutorul compresiei țintite, aliniază corect bazinul și descarcă nervul sciatic. Subțire și discretă sub haine, cu nivel de sprijin reglabil. Potrivită în caz de dureri lombare, sciatică, tensiune musculară și probleme ale articulației SI.

        <?php else: ?>
        
        
        
            <?php echo get_field("__overwrite_sekcije_bellow_1"); ?>
            
            
        <?php endif; ?>



      </div>
    </div>
    <?php endif; // /ascuns detalii pentru norikshers ?>




     <!-- 2 - slika tablica velicina -->
     <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : // nu există tabel de mărimi pentru bunion + fisiorest + norikshers + perna ortopedică ?>
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Tabel de mărimi</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine-ro.webp" alt="Mărimi KidsNest în funcție de vârstă" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
            <p style="margin:0;line-height:1.6;"><strong>Copilul este între două mărimi?</strong> Alegeți întotdeauna mărimea mai mare. Perna este concepută să susțină o aliniere sănătoasă pe măsură ce copilul crește — mărimea mai mare oferă mai mult spațiu și o perioadă de utilizare mai lungă.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $current_product_id) ): ?>

          <div class="lbx-size">
            <p style="margin:0 0 6px;font-weight:700;">Cum se măsoară șoldurile</p>
            <p style="margin:0 0 14px;line-height:1.6;">Înfășurați centimetrul în jurul celei mai late părți a șoldurilor (peste fese), fără a strânge. Stați relaxat și drept și notați măsura în centimetri.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#12233b;color:#fff;">
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Mărime</th>
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Șolduri (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lbx_sizes = array(
                  array('S','până la 76 cm','până la 30"'),
                  array('M','77 – 85 cm','30 – 33"'),
                  array('L','86 – 94 cm','34 – 37"'),
                  array('XL','95 – 102 cm','37 – 40"'),
                  array('2XL','103 – 114 cm','41 – 45"'),
                  array('3XL','115 – 121 cm','45 – 48"'),
                  array('4XL','122 – 129 cm','48 – 51"'),
                  array('5XL','130 – 137 cm','51 – 54"'),
                  array('6XL','138 – 145 cm','54 – 57"'),
                  array('7XL','146 – 153 cm','57 – 60"'),
                  array('8XL','154 cm și peste','61" și peste'),
                );
                foreach ( $lbx_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7fafb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Sunteți între două mărimi?</strong> Recomandăm întotdeauna mărimea mai mare, pentru confort optim și absorbție maximă.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $current_product_id) ): ?>

          <div class="kmf-size">
            <table style="width:100%;border-collapse:collapse;font-size:15px;">
              <thead>
                <tr style="background:#111;color:#fff;">
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Mărime</th>
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Greutate corespunzătoare</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kmf_sizes = array(
                  array('S','50 – 70 kg'), array('M','70 – 90 kg'), array('L','90 – 110 kg'), array('XL','110 – 130 kg'),
                  array('2XL','130 – 150 kg'), array('3XL','150 – 170 kg'), array('4XL','170 – 190 kg'), array('5XL','190 – 210 kg'),
                );
                foreach ( $kmf_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f4f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eaeaea;">
                    <td style="padding:9px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:9px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;">Alegeți mărimea în funcție de greutatea dumneavoastră. Sunteți între două mărimi? Pentru o compresie mai puternică, alegeți mărimea mai mică.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : circumferința șoldurilor 75–110 cm<br>
            <strong>L/XL</strong> : circumferința șoldurilor 110–140 cm<br><br>
            Vă rugăm să măsurați circumferința șoldurilor pentru a găsi mărimea potrivită.
          </div>

        <?php elseif( $is_boxers ): ?>


          <img src="/ro/wp-content/uploads/2025/12/boxers_size.jpg">




        <?php elseif( noriks_is_type( 'kompresijske-nogavice', $current_product_id ) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : mărime încălțăminte 36–40 / circumferința gambei : 23–36 cm<br>
            <strong>L/XL</strong> : mărime încălțăminte 40–44 / circumferința gambei : 36–45 cm<br>
            <strong>2XL</strong> : mărime încălțăminte 44–48 / circumferința gambei : 45–56 cm<br><br>
            Vă rugăm să măsurați circumferința gambei în cel mai lat punct pentru a găsi mărimea potrivită.<br><br>
            Recomandăm să alegeți mărimea după circumferința gambei, nu după mărimea obișnuită la încălțăminte.
          </div>

        <?php elseif(  $is_carape ): ?>


                  <img src="https://noriks.com/ro/wp-content/uploads/2026/04/nogavice_ro.jpg">

    <?php elseif(  $is_mixed_bundle ): ?>

     <img src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
<img src="https://noriks.com/ro/wp-content/uploads/2026/04/bokserice_ro.jpg">

          <?php else: ?>


       <img src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">


        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /nu există tabel de mărimi pentru bunion + fisiorest ?>


    <!-- 3 - savjeti za pranje--> <!-- ascuns si pentru kidsnest -->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('ortopas', $current_product_id) || noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('kidsnest', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // fără sfaturi de spălare pentru centură/bunion/fisiorest/norikshers/kidsnest/perna ortopedică ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Spălați la 30–40 °C, pe un program pentru rufe delicate. Fără balsam și fără înălbitor. Uscați la aer. Își păstrează puterea de absorbție sute de spălări.

             <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                Spălare la mașină, la rece, pe program delicat. Fără înălbitor și fără balsam. Nu uscați în uscător — uscați la aer pentru a păstra compresia și forma.

             <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>
        <?php echo get_field("singlepp_acc_t_2","options"); ?>


        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>



                      Spălați culorile cu alte culori. Ciclu delicat în apă rece. Uscați întins sau în uscător la temperatură joasă. Nu folosiți clor.


          <?php else: ?>
            <?php echo get_field("__overwrite_sekcije_bellow_3"); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /fără sfaturi de spălare pentru centură/bunion/fisiorest ?>



    <!-- 4 povrati in menjave -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
       <p></p>
       Suntem atât de siguri că veți iubi NORIKS, că aveți <b data-stringify-type="bold">30 de zile</b> pentru returnare sau schimb gratuit.
Fără birocrație, fără stres – rezolvăm totul în câteva clicuri. </p>

<p>
    



  <a href="mailto:info@noriks.com" style="display: flex; align-items: center; text-decoration: none; color: #333;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" style="margin-right: 6px;" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
    </svg>
    info@noriks.com
  </a>
</p>
<p>Trimiteți-ne un e-mail în care să spuneți că doriți un înlocuitor și <b data-stringify-type="bold">ne vom ocupa imediat de asta.</b></p>
       
       
      </div>
    </div>



    <!-- 5 - infomraicje o dostavi -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_4","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <?php echo get_field("singlepp_acc_t_4","options"); ?>
      </div>
    </div>
    
    
    <!-- konec 5 acrodinov -->

  </div>

  <script>
    function toggleAccordion(header) {
      const item = header.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }
  </script>
  
  
  <style>
      
       .accordion {
      border-top: 1px solid #ddd;
    }

    .accordion-item {
      border-bottom: 1px solid #ddd;
    }

    .accordion-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 5px 5px 0px;
      cursor: pointer;
    }

    .accordion-header h3 {
      display: flex;
      align-items: center;
      font-weight: 500;
      font-size: 16px;
      margin: 0;
      gap: 2px;
      font-family: 'Roboto', sans-serif;  
    }

    .accordion-content {
      padding: 0 0 0 0;
      display: none;
      font-size: 14px;
      font-family: 'Roboto', sans-serif;  
      line-height: 1.6;
      color: black;
    }

    .accordion-item.open .accordion-content {
      display: block;
    }

    .icon {
      width: 24px;
      height: 24px;
      display: inline-block;
      background-size: contain;
      background-repeat: no-repeat;

    }
    
    .icon-details {
   
      margin: 0 0px 0 10px !important;
    }
    
    .icon-size {
   
      margin: 0 0px 0 10px !important;
    }

    /* Placeholder icons using emojis 
    
    .icon.details::before { content: "📝"; }
     .icon.size::before { content: "👕"; }
    .icon.laundry::before { content: "🧺"; }
    .icon.returns::before { content: "↩️"; }
    .icon.shipping::before { content: "📦"; }
*/
    .toggle {
      font-size: 24px;
      transition: transform 0.3s ease;
    }

    .accordion-item.open .toggle {
      transform: rotate(45deg);
    }
  </style>








<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
