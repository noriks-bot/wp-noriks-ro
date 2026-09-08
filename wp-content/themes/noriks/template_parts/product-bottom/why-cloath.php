<?php
/**
 * product-bottom: Polar NORIKS Cloth XXL — krpa za ciscenje (orto-cloath).
 *
 * Broj i redoslijed sekcija preslikani s referentne stranice (6 sekcija):
 *   1. A Crystal-Clear Shower in Under a Minute   animacija cl-anim-1
 *   2. Your Mirror, Perfect in Seconds            animacija cl-anim-2
 *   3. Keep Your Bathroom Sparkling               slika 09_zena_drzi_krpu
 *   4. Holds Up To 4X Its Weight In Water         animacija cl-anim-3
 *   5. Lint-Free. Tough. Built to Last.           animacija cl-anim-4
 *   6. 60-Day Guarantee                           slika 10_zena_lice
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cl      = get_template_directory_uri() . '/img/cloath/';
$cl_path = get_template_directory() . '/img/cloath/';

$cl_img = function( $file, $alt ) use ( $cl, $cl_path ) {
  if ( file_exists( $cl_path . $file ) ) {
    return '<img src="'.esc_url($cl.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="ncl-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
$cl_anim = function( $mp4, $fallback, $alt ) use ( $cl, $cl_path, $cl_img ) {
  if ( file_exists( $cl_path . $mp4 ) ) {
    $poster = str_replace( '.mp4', '-poster.webp', $mp4 );
    return '<video class="ncl-video" src="'.esc_url($cl.$mp4).'" poster="'.esc_url($cl.$poster).'"'
         . ' autoplay muted loop playsinline preload="metadata" aria-label="'.esc_attr($alt).'"></video>';
  }
  return $cl_img( $fallback, $alt );
};
?>

<!-- ============ 1) Kristalno cist tus u manje od minute ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-1.mp4','cl-01-hero-3plus3.webp','Curățarea cabinei de duș cu laveta Polar NORIKS Cloth'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Cabină de duș impecabilă în mai puțin de un minut — fără chimicale, doar apă</h2>
      <p>Încă te lupți cu petele de apă, calcarul și depunerile de săpun, chiar și după racletă sau o lavetă ieftină din magazin?</p>
      <p>De aceea am creat <strong>Polar NORIKS Cloth</strong> — pentru toți cei sătui de frecat și de banii aruncați pe spray-uri.</p>
      <p>Câteva mișcări rapide și sticla, faianța și bateriile rămân impecabile. Fără soluții agresive, fără urme, fără nervi.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Ogledalo savrseno u nekoliko sekundi ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <h2 class="ncl-h2">Oglindă perfectă în câteva secunde — fără urme și fără efort</h2>
      <p>Te-ai săturat de petele de apă, stropi și aburire care lasă urme sau scame?</p>
      <p>Stratul dens tricotat adună murdăria și apa dintr-o singură mișcare, așa că oglinda rămâne impecabilă — fără spray și fără urme.</p>
      <p class="ncl-strong">Luciu impecabil de fiecare dată și o lavetă care rezistă spălare după spălare.</p>
    </div>
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-2.mp4','cl-08-dvostrani.webp','Ștergerea oglinzii fără urme'); ?></div>
  </div>
</section>

<!-- ============ 3) Kupaonica koja blista ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_img('cl-09-zena-krpa.webp','Baie curățată cu laveta Polar NORIKS Cloth'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">O baie care strălucește, fără să miști un deget</h2>
      <p>Sticlă curată, baterii lucioase, oglindă impecabilă — fără frecat, fără spray-uri, fără stres.</p>
      <p>Fibrele mai groase și mai dese adună calcarul, murdăria și petele de apă din câteva mișcări, doar cu apă.</p>
      <ul class="ncl-check">
        <li>Uși de sticlă și de terasă</li>
        <li>Oglinzi și ferestre mari</li>
        <li>Faianță, baterii și blaturi</li>
      </ul>
      <a class="ncl-cta" href="#bundle-selector">Alege pachetul tău</a>
    </div>
  </div>
</section>

<!-- ============ 4) Upija do 4x svoje tezine ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <h2 class="ncl-h2">Absoarbe până la 4× greutatea sa în apă și lasă suprafețele uscate</h2>
      <p>Majoritatea lavetelor doar întind apa. Polar NORIKS Cloth absoarbe <strong>până la 600 ml</strong> dintr-o dată — aproape o sticlă întreagă de apă.</p>
      <p>Câteva mișcări și cabina, faianța și bateriile sunt uscate. Fără urme, fără pete, fără așteptare.</p>
      <p class="ncl-strong">Rezultatul: o baie care rămâne curată mai mult timp, fără dezordine.</p>
    </div>
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-3.mp4','cl-07-dimenzije.webp','Absorbția apei — până la 600 ml odată'); ?></div>
  </div>
</section>

<!-- ============ 5) Bez vlakana, izdrzljiva ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-4.mp4','cl-02-stack.webp','Laveta după sute de spălări'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Fără scame. Rezistentă. Spălare după spălare.</h2>
      <p>Laveta este făcută pentru sute de utilizări. Pune-o în mașină și e din nou gata.</p>
      <p>Spre deosebire de lavetele obișnuite <strong>nu lasă scame</strong> — fără scame, fără urme, fără nervi.</p>
      <ul class="ncl-check">
        <li>Nu se decolorează și nu se destramă</li>
        <li>Se spală la mașină la 40 °C</li>
        <li>Design pe două fețe: curăță și lustruiește</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 6) 30 de zile jamstva ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <p class="ncl-eyebrow">30 de zile fără riscuri</p>
      <h2 class="ncl-h2">Plătești doar dacă îți place</h2>
      <p>Încă ai dubii? Înțelegem — sună prea bine ca să fie adevărat.</p>
      <p>De aceea poți încerca laveta complet fără riscuri <strong>30 de zile</strong>. Dacă sticla nu e impecabilă, dacă faianța nu e mai ușor de întreținut sau pur și simplu nu îți place rezultatul — trimite-o înapoi.</p>
      <p class="ncl-strong">Ori primești o baie care strălucește ca nouă, ori îți primești banii înapoi.</p>
      <a class="ncl-cta" href="#bundle-selector">Comandă fără riscuri</a>
    </div>
    <div class="ncl-media"><?php echo $cl_img('cl-10-zena-lice.webp','Garanție de returnare a banilor 30 de zile'); ?></div>
  </div>
</section>

<style>
  .ncl-sec { padding: 46px 0; background: #fff; }
  .ncl-alt { background: #f1f4ef; }
  .ncl-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .ncl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .ncl-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #2b4636; line-height: 1.2; margin: 0 0 16px; }
  .ncl-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #6f8f74; margin: 0 0 8px; }
  .ncl-copy p { font-size: 16px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .ncl-strong { font-weight: 700; color: #2b4636 !important; }
  .ncl-media img, .ncl-video { width: 100%; height: auto; display: block; border-radius: 16px; }

  .ncl-ph { width: 100%; aspect-ratio: 1/1; background: #e8eee7; border: 1px dashed #cfdccd; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .ncl-ph span { font-size: 13px; line-height: 1.45; color: #8ba38f; text-align: center; }

  .ncl-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .ncl-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #2b4636; line-height: 1.5; }
  .ncl-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #6f8f74; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .ncl-cta { display: inline-block; margin-top: 8px; background: #2b4636; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .ncl-cta:hover { background: #6f8f74; color: #fff; }

  @media (max-width: 820px) {
    .ncl-sec { padding: 30px 0; }
    .ncl-row2 { grid-template-columns: 1fr; gap: 20px; }
    .ncl-row2 .ncl-media { order: -1; }
    .ncl-h2 { font-size: 1.85rem; }
    /* tema vec ima svoj razmak na kontejneru — nas prepolovimo */
    .ncl-wrap { padding: 0 9px !important; }
  }

  /* Krpa nema velicina — bez linka na tablicu velicina. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: zelene kvacice, a prelomljeni redak pocinje ispod teksta (viseci uvlak). */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 14px; padding-left: 0; }

  /* Razmak iznad i ispod cijene izjednacen. */
  .single-product div.product .summary .price,
  .single-product div.product .summary p.price { margin: 14px 0 14px !important; }
  .woocommerce-product-details__short-description ul li {
      list-style: none; margin-left: 0; line-height: 1.55; margin-bottom: 8px;
      padding-left: 17px; text-indent: -17px;
  }
  .woocommerce-product-details__short-description .ncl-tick {
      display: inline-block; width: 17px; text-indent: 0; color: #3f8b57; font-weight: 800;
  }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }

  /* CTA gumb na sredini sekcije. */
  .ncl-copy .ncl-cta { display: block; width: max-content; margin-left: auto; margin-right: auto; }
</style>

<script>
(function(){
  document.querySelectorAll('a.ncl-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
