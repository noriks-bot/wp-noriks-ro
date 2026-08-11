<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/. Svaka sekcija ima sliku s jedne
 * i tekst s druge strane (naizmjenično) — nema sekcija koje su samo slika.
 *   1. Când fiecare pas devine neplăcut   slika lijevo   13_stepenice
 *   2. Poate nu este vorba doar de uzură   slika desno    14_zglob
 *   3. Sprijin pentru genunchi activi         slika lijevo   08_aktivno
 *   4. 4 funcții. Un sentiment mai stabil.    slika desno    03_funkcije
 *   5. Sprijin confortabil în 3 pași          slika lijevo   04_koraki
 *   6. Mai mult confort în fiecare zi      slika desno    05_lifestyle
 *   7. Preporučeno za potporu koljena     slika lijevo   06_zdravnik
 *   8. Diferența se simte                  slika desno    07_vs
 *   9. Ce spun clienții noștri                3 kartice      10/11/12
 * Recenzije i FAQ renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf      = get_template_directory_uri() . '/img/kneefix/';
$kf_path = get_template_directory() . '/img/kneefix/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$kf_img = function( $file, $alt ) use ( $kf, $kf_path ) {
  if ( file_exists( $kf_path . $file ) ) {
    return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="kfx-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Când fiecare pas devine neplăcut ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('13_stepenice.jpg','Durere de genunchi la coborârea scărilor'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Când fiecare pas devine neplăcut</h2>
      <p class="kfx-lead">La început este adesea doar o ușoară tensiune.</p>
      <p>Apoi apar momentele în care simțiți genunchiul mult mai intens:</p>
      <ul class="kfx-list">
        <li>La ridicare</li>
        <li>Pe scări</li>
        <li>După ce ați stat mult jos</li>
        <li>La mers sau în picioare timp îndelungat</li>
      </ul>
      <p>Mulți încep atunci să evite automat mișcarea. Merg mai încet, descarcă genunchiul fără să își dea seama sau se simt nesiguri în mișcările zilnice.</p>
      <p class="kfx-strong">Problema este că, cu cât vă mișcați mai precaut, cu atât genunchiul devine centrul zilei dumneavoastră.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Poate nu este vorba doar de uzură ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Poate nu este vorba doar de uzură</h2>
      <p>Multe explicații obișnuite vorbesc doar despre „uzură". Însă durerea de genunchi se simte adesea mai degrabă ca <strong>presiune, iritație sau instabilitate</strong>.</p>
      <p>Unul dintre motivele posibile este membrana articulară iritată — pelicula interioară sensibilă a articulației genunchiului. Când acest țesut se irită, genunchiul poate reacționa mai sensibil la efort. Se poate manifesta prin:</p>
      <ul class="kfx-inline-list">
        <li>Senzație de presiune în jurul rotulei</li>
        <li>Rigiditate după repaus</li>
        <li>Nesiguranță la mișcare</li>
        <li>Sensibilitate la efort</li>
      </ul>
      <p>Multe orteze clasice încearcă să rezolve problema prin stabilizare rigidă. Ortezele dure sunt însă adesea incomode, alunecă sau limitează mișcarea naturală. Tocmai de aceea <strong>NORIKS KneeFix</strong> a fost conceput diferit.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('14_zglob.jpg','Membrana articulară iritată a articulației genunchiului'); ?></div>
  </div>
</section>

<!-- ============ 3) Sprijin pentru genunchi activi ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('08_activi_RO.webp','Rămâneți activ — fără limitări la genunchi'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Sprijin pentru genunchi activi</h2>
      <p><strong>NORIKS KneeFix</strong> combină mai multe funcții într-un sistem flexibil de sprijin pentru fiecare zi. În loc de o orteză grea primiți:</p>
      <ul class="kfx-check">
        <li>Compresie pe care o reglați singur</li>
        <li>Stabilizare laterală</li>
        <li>Pernuță din gel pentru descărcarea rotulei</li>
        <li>Margine antiderapantă aderentă</li>
      </ul>
      <p>Scopul nu este să vă imobilizeze genunchiul. KneeFix a fost conceput să sprijine genunchiul mai confortabil în mișcarea de zi cu zi — la mers, la muncă, la cumpărături sau în deplasări.</p>
    </div>
  </div>
</section>

<!-- ============ 4) 4 funcții. Un sentiment mai stabil. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">4 funcții. Un sentiment mai stabil.</h2>
      <p>KneeFix nu face un singur lucru — mai multe sisteme de sprijin acționează simultan:</p>
      <ul class="kfx-check">
        <li><strong>Rotiță precisă pentru compresie</strong> — compresie reglabilă și fixare sigură</li>
        <li><strong>Stabilizatoare laterale duble</strong> — stabilitate laterală a genunchiului</li>
        <li><strong>Pernuță din gel pentru rotulă</strong> — descărcarea presiunii și amortizarea șocurilor</li>
        <li><strong>Prindere siliconică antialunecare</strong> — textura moale din silicon împiedică alunecarea și răsucirea</li>
      </ul>
    </div>
    <div class="kfx-media"><?php echo $kf_img('03_functii_RO.webp','Patru funcții ale ortezei NORIKS KneeFix'); ?></div>
  </div>
</section>

<!-- ============ 5) Sprijin confortabil în 3 pași ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('04_pasi_RO.webp','Sprijin confortabil în trei pași — trageți, aliniați, reglați'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Sprijin confortabil în 3 pași</h2>
      <ol class="kfx-steps">
        <li><strong>Trageți orteza peste genunchi.</strong> Trageți-o în sus pentru o fixare sigură și confortabilă.</li>
        <li><strong>Aliniați pernuța din gel.</strong> Așezați-o centrat în jurul rotulei.</li>
        <li><strong>Reglați compresia.</strong> Rotiți rotița pentru a regla sprijinul și stabilitatea.</li>
      </ol>
      <p>Fără curele complicate și reglaje — sunteți gata în câteva secunde.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Mai mult confort în fiecare zi ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Mai mult confort în fiecare zi</h2>
      <p>Mulți nu vor o orteză sportivă grea. Vor pur și simplu:</p>
      <ul class="kfx-check">
        <li>Să meargă mai sigur</li>
        <li>Să urce scările mai relaxat</li>
        <li>Să stea mai mult în picioare</li>
        <li>Să se miște mai liber</li>
      </ul>
      <p>NORIKS KneeFix a fost conceput pentru a face mișcările zilnice mai plăcute — fără limitări inutile. Materialul flexibil se adaptează mai bine zilei dumneavoastră și sprijină genunchiul exact acolo unde este nevoie.</p>
      <a class="kfx-cta" href="#bundle-selector">Alege-ți mărimea →</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('05_lifestyle_RO.webp','KneeFix în fiecare zi — plimbare, bicicletă, antrenament'); ?></div>
  </div>
</section>

<!-- ============ 7) Recomandat pentru sprijinul zilnic al genunchiului ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('06_medic_RO.webp','Recomandat pentru sprijinul zilnic al genunchiului'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Recomandat pentru sprijinul zilnic al genunchiului</h2>
      <ul class="kfx-check">
        <li>Sprijin compresiv reglabil</li>
        <li>Stabilizează și protejează genunchiul</li>
        <li>Confortabil pentru purtare zilnică</li>
      </ul>
      <p>KneeFix este gândit ca sprijin zilnic, nu ca tratament medical. Dacă aveți o accidentare acută sau probleme persistente, consultați medicul înainte de purtare.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Diferența se simte ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Diferența se simte</h2>
      <p>Ortezele tradiționale rezolvă adesea problema imobilizând genunchiul. KneeFix merge pe altă cale — sprijină mișcarea în loc să o blocheze.</p>
      <ul class="kfx-check">
        <li>Mers natural în loc de rigiditate la mișcare</li>
        <li>Postură relaxată în loc de o poziție incomodă</li>
        <li>Libertate de mișcare și confort în loc de o încărcare vizibilă a genunchiului</li>
      </ul>
      <a class="kfx-cta" href="#bundle-selector">Comandă KneeFix</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('07_vs_RO.webp','Orteza de genunchi NORIKS comparativ cu o orteză tradițională'); ?></div>
  </div>
</section>

<!-- ============ 9) Ce spun clienții noștri ============ -->
<section class="kfx-sec kfx-revs">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">Ce spun clienții noștri</h2>
    <p class="kfx-sub kfx-center"><strong>Mii de clienți poartă deja zilnic NORIKS KneeFix</strong> pentru că a fost conceput să sprijine genunchiul în mod țintit — în loc să limiteze inutil mișcarea sau să acopere pe termen scurt disconfortul.</p>
    <div class="kfx-rev-grid">
      <?php foreach ( array(
        array( '10_review-1.jpg', 'În sfârșit un mers mai stabil', 'Am încercat deja câteva orteze, dar erau fie prea rigide, fie alunecau mereu. Aceasta stă vizibil mai confortabil și oferă genunchiului mult mai multă stabilitate la mers și pe scări.', 'Damir P.' ),
        array( '11_review-3.jpg', 'Mai multă siguranță pe scări', 'Ani de zile scările au fost un chin pentru mine, pentru că genunchiul îmi părea instabil. De când port KneeFix mă simt mult mai sigură. Aproape că nu alunecă nici la plimbări mai lungi.', 'Sanja M.' ),
        array( '12_review-6.jpg', 'Plăcut în fiecare zi', 'O port la serviciu și nu credeam că va fi atât de confortabilă. Materialul este flexibil, compresia se reglează ușor, iar pe sub pantaloni aproape că nu se observă.', 'Vesna N.' ),
      ) as $rv ) : ?>
        <article class="kfx-rev">
          <div class="kfx-rev-img"><?php echo $kf_img( $rv[0], 'Client purtând orteza NORIKS KneeFix' ); ?></div>
          <div class="kfx-rev-body">
            <div class="kfx-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
            <p class="kfx-rev-title"><?php echo esc_html( $rv[1] ); ?></p>
            <p class="kfx-rev-text"><?php echo esc_html( $rv[2] ); ?></p>
            <p class="kfx-rev-name"><?php echo esc_html( $rv[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 820px; margin: 0 auto 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .kfx-steps { list-style: none; counter-reset: kfxstep; margin: 0 0 16px; padding: 0; }
  .kfx-steps li { counter-increment: kfxstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .kfx-steps li:before { content: counter(kfxstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }

  /* 9) recenzije s fotografijama kupaca */
  .kfx-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .kfx-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; overflow: hidden; }
  .kfx-rev-img img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; border-radius: 0; }
  .kfx-rev-body { padding: 16px 18px 18px; text-align: center; }
  .kfx-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; }
  .kfx-rev-title { font-weight: 700; color: #141414; font-size: 15px; margin: 8px 0 8px; }
  .kfx-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 12px; }
  .kfx-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 10px; border-top: 1px solid #ededed; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-rev-grid { grid-template-columns: 1fr; }
    .kfx-rev-img img { aspect-ratio: 4/3; }
  }

  /* Nema "Tablica veličina" linka na KneeFixu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅
     iz teksta; razmak između "Prednosti:" i liste te ispod liste.
     (Ovaj se predložak učitava samo na orto-kneefix stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
      line-height: 1.55;
      margin-bottom: 6px;
  }
  /* razmak iznad "Prednosti:" (paragraf neposredno prije liste) */
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
