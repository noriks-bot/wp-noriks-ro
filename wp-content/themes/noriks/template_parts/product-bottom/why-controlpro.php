<?php
/**
 * product-bottom: NORIKS ControlPro (orto-controlpro).
 * Preneseno s hrvaskega trga 1:1 — iste 4 sekcije, ista postavitev, prevedeno.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cp      = get_template_directory_uri() . '/img/controlpro/';
$cp_path = get_template_directory() . '/img/controlpro/';
$cp_img = function( $file, $alt ) use ( $cp, $cp_path ) {
  if ( file_exists( $cp_path . $file ) ) {
    return '<img src="'.esc_url($cp.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="cpr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('08-vjezba-1.webp','Exercițiu cu antrenorul NORIKS ControlPro'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">De ce a simți contracția și a întări cu adevărat planșeul pelvin nu este același lucru</h2>
      <p>Medicul v-a spus să faceți exerciții Kegel. Așa că ați strâns. Și ați simțit că funcționează — acea tensiune, acea contracție. De aceea ați continuat. Săptămâni, poate luni.</p>
      <p>Iar scurgerile nu s-au oprit.</p>
      <p>Motivul e simplu: a simți contracția și a construi cu adevărat forța planșeului pelvin nu sunt același lucru. Fără rezistență, mușchiul doar se activează — nu se antrenează. Strângeți în gol, iar niciun mușchi din corp nu a devenit astfel mai puternic.</p>
      <p>ControlPro schimbă asta. Îi oferă planșeului pelvin ceva împotriva căruia să împingă — rezistență fizică reală, care solicită exact mușchii ce controlează vezica.</p>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('09-vjezba-2.webp','Strângere cu rezistență — 3 serii a câte 10 repetări pe zi'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">3 serii a câte 10 strângeri pe zi. Atât.</h2>
      <p>Așezați-vă pe scaun și puneți ControlPro între genunchi. Strângeți împotriva rezistenței — 3 serii a câte 10 repetări pe zi.</p>
      <p>Fără inserție, fără cabluri, fără aplicații. Arată ca un aparat de exercițiu, pentru că asta și este. Îl folosiți la știri sau la birou — nimeni nu trebuie să vadă.</p>
      <a class="cpr-cta" href="#bundle-selector">Recâștigați controlul astăzi</a>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('01-usporedba.png','Comparație: absorbante, aparate EMS, exerciții Kegel simple și NORIKS'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">De ce funcționează când nimic altceva nu a funcționat</h2>
      <p>Absorbantele și protecțiile atenuează simptomul — le veți cumpăra lună de lună, la nesfârșit, iar nimic nu devine mai puternic.</p>
      <p>Aparatele EMS (175–350 €) contractă mușchiul <em>în locul dumneavoastră</em>, ca și cum altcineva ar face flotările pentru dumneavoastră — legătura creier–mușchi nu se formează niciodată, iar multe necesită sonde interne.</p>
      <p>Exercițiile Kegel simple sunt o idee bună, dar fără rezistență și fără feedback majoritatea bărbaților se antrenează în orb și renunță în câteva săptămâni.</p>
      <p>NORIKS ControlPro se plătește o singură dată, vă obligă să faceți munca singur împotriva unei rezistențe reale și aplică același principiu al încărcării progresive care întărește orice alt mușchi.</p>
      <p>Planșeul dumneavoastră pelvin nu este stricat.</p>
      <p class="cpr-strong">Este doar insuficient antrenat.</p>
    </div>
  </div>
</section>

<section class="cpr-sec cpr-revs">
  <div class="cpr-wrap">
    <h2 class="cpr-h2 cpr-center">Bărbați ca dumneavoastră văd deja rezultate</h2>
    <div class="cpr-rev-grid">
      <?php foreach ( array(
        array( 'De la 4 absorbante pe zi la 0', 'După operația de prostată am făcut exerciții Kegel mai bine de un an fără progres. Am fost sceptic, dar îl folosesc de vreo cinci săptămâni și de la patru absorbante pe zi am ajuns la zero.', 'Mihai R.' ),
        array( 'Am fost sceptic', 'Am avut scurgeri doi ani, iar exercițiile nu au adus nicio schimbare. Diferența se simte imediat când mușchii au rezistență reală. Acum nu mai am scurgeri.', 'George P.' ),
        array( 'Simplu și bine făcut', 'Aparat simplu și bine construit. Strângeți și eliberați, iar în timp obțineți mult mai mult control. Evitați copiile ieftine — nu au aceeași rezistență.', 'Andrei T.' ),
      ) as $rv ) : ?>
        <article class="cpr-rev">
          <span class="cpr-quote" aria-hidden="true">&#10077;</span>
          <div class="cpr-stars" aria-label="5/5">★★★★★</div>
          <p class="cpr-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="cpr-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="cpr-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .cpr-sec { padding: 46px 0; }
  .cpr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .cpr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .cpr-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .cpr-center { text-align: center; }
  .cpr-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .cpr-strong { font-weight: 700; color: #141414; }
  .cpr-media img { width: 100%; height: auto; display: block; border-radius: 6px; }

  .cpr-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 6px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .cpr-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .cpr-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .cpr-cta:hover { background: #E8450E; color: #fff; }

  /* 4) kartice recenzija */
  .cpr-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .cpr-rev { position: relative; background: #f4f4f4; border-radius: 10px; padding: 22px 20px; text-align: center; }
  .cpr-quote { position: absolute; top: 14px; right: 16px; font-size: 20px; line-height: 1; color: #141414; }
  .cpr-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .cpr-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0 10px; }
  .cpr-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .cpr-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    /* enakomeren razmik: med sekcijama isto kao med sliku i tekst (18px) */
    .cpr-sec { padding: 9px 0; }
    .cpr-sec:first-of-type { padding-top: 0; }
    .cpr-wrap { padding-left: 0; padding-right: 0; }
    .cpr-row2 { grid-template-columns: 1fr; gap: 18px; }
    .cpr-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .cpr-copy p { margin-bottom: 12px; }
    .cpr-cta { margin-top: 2px; }
    .cpr-rev-grid { grid-template-columns: 1fr; gap: 18px; margin-top: 18px; }
  }

  /* Nema "Tablica veličina" linka na ControlPro uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: skupljeni razmaci — i kad su točke <li> i kad su odvojeni <p>.
     (Ovaj se predložak učitava samo na orto-controlpro stranicama.) */
  .woocommerce-product-details__short-description { margin-bottom: 10px !important; }
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin: 0 0 4px; line-height: 1.4; }
  .woocommerce-product-details__short-description p { margin: 0 0 5px !important; line-height: 1.4; }
  /* viseći uvod: prijelom u drugi red poravnan s tekstom, ne s ✓ */
  .woocommerce-product-details__short-description ul li,
  .woocommerce-product-details__short-description p { padding-left: 1.6em; text-indent: -1.6em; }
  .woocommerce-product-details__short-description p:last-child { margin-bottom: 0 !important; }
  .woocommerce-product-details__short-description br { line-height: 0.9; }
  /* prazni odstavci/prijelomi u kratkom opisu ne smiju stvarati praznine */
  .woocommerce-product-details__short-description p:empty,
  .woocommerce-product-details__short-description br:first-child,
  .woocommerce-product-details__short-description br + br { display: none !important; }

  /* manji odmak između kratkog opisa i cijene te između cijene i scarcity bara */
  .single-product .summary .price,
  .single-product div.product p.price { margin-top: 4px !important; margin-bottom: 8px !important; }
  .single-product .gck-countdown { margin-top: 8px !important; }
  .single-product .summary > p:empty, .single-product .summary > br { display: none !important; }
</style>

<script>
(function(){
  /* Kratki opis iz admina cesto sadrzi prazne odstavke (<p>&nbsp;</p>) koji rade
     velike praznine iznad cijene — CSS ih ne moze uhvatiti, pa ih uklonimo. */
  function cprTrimDesc(){
    var box = document.querySelector('.woocommerce-product-details__short-description');
    if (!box) { return; }
    box.querySelectorAll('p, div').forEach(function(el){
      if (el.querySelector('img, ul, ol, svg')) { return; }
      var t = (el.textContent || '').replace(/\u00a0/g, ' ').trim();
      if (t === '') { el.remove(); }
    });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', cprTrimDesc); } else { cprTrimDesc(); }

  document.querySelectorAll('a.cpr-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
