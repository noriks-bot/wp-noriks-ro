<?php
/**
 * product-bottom: NORIKS Pal — stap s dvije rucke, svjetiljkom i alarmom (orto-pal).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana). Iznimka je galerija kupaca (12).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$pl      = get_template_directory_uri() . '/img/pal/';
$pl_path = get_template_directory() . '/img/pal/';
$pl_vid  = function( $file, $poster, $alt ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<video class="npl-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $pl . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $pl . $file ) . '" type="video/mp4"></video>';
};
$pl_img  = function( $file, $alt, $cls = '' ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $pl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) USTAJANJE -->
<!-- 1) PROBLEM — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-rucke.jpg', 'Mânere ortopedice pentru sprijin' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Al doilea mâner</p>
      <h2 class="npl-h2">Sprijin exact acolo unde aveți nevoie</h2>
      <p>Pe lângă mânerul de sus, bastonul are și un <strong>al doilea mâner mai jos</strong>. De el vă prindeți când vă ridicați din fotoliu, din pat sau de pe un scaun jos.</p>
      <p>Presiunea merge vertical în jos, în baza stabilă — nu în față, unde v-ar scoate din echilibru. De aceea vă ridicați dintr-o singură mișcare, fără să vă aplecați și fără ajutorul altcuiva.</p>
      <ul class="npl-check">
        <li>Ridicarea din fotoliu, din pat sau de pe o bancă</li>
        <li>Mânerele nu rănesc palma nici după o plimbare mai lungă</li>
        <li>Fără să așteptați să vă ajute cineva</li>
      </ul>
      <a class="npl-cta" href="#bundle-selector">Vezi oferta</a>
    </div>
  </div>
</section>

<!-- 3) PREGLED ŠTAPA — slika lijevo -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Stabilitate</p>
      <h2 class="npl-h2">Stă singur — nu trebuie să vă aplecați după baston</h2>
      <p>Patru picioare de cauciuc țin bastonul drept când îl lăsați. Nu cade pe jos lângă canapea, lângă masă sau în sala de așteptare, așa că nu trebuie să vă aplecați după el.</p>
      <p>Este mărunțișul pe care îl observați chiar din prima zi: bastonul vă așteaptă acolo unde l-ați lăsat.</p>
    </div>
    <div class="npl-media"><?php echo $pl_vid( 'pal-video.mp4', 'pal-video.jpg', 'Bastonul stă singur pe patru picioare' ); ?></div>
  </div>
</section>

<!-- 5) PROTUKLIZNA BAZA — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-pregled.jpg', 'Prezentarea bastonului: două mânere, lanternă, alarmă, patru picioare' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Ce primiți</p>
      <h2 class="npl-h2">Cinci lucruri într-un singur baston</h2>
      <div class="npl-points">
        <div class="npl-point"><h3>Două mânere</h3><p>Cel de sus pentru mers, cel de jos pentru ridicare.</p></div>
        <div class="npl-point"><h3>Patru picioare</h3><p>Bastonul stă singur și nu cade pe jos.</p></div>
        <div class="npl-point"><h3>Lanternă</h3><p>Luminează drumul din fața dumneavoastră pe întuneric.</p></div>
        <div class="npl-point"><h3>Alarmă</h3><p>Semnal puternic pe care îl aud cei din casă.</p></div>
        <div class="npl-point"><h3>Variantă pliabilă</h3><p>Încape în geantă și în torpedoul mașinii.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) STOJI SAM (video) — video desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Baza</p>
      <h2 class="npl-h2">Ține pe gresie, parchet și afară</h2>
      <p>Picioarele de cauciuc sunt <strong>antiderapante</strong> și nu alunecă pe podelele netede. Afară baza se adaptează terenului denivelat și rămâne stabilă.</p>
      <ul class="npl-check">
        <li>Nu alunecă pe gresie, parchet sau laminat</li>
        <li>Se adaptează terenului denivelat</li>
        <li>Picioarele se pot înlocui când se uzează</li>
      </ul>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-nozice.jpg', 'Patru picioare de cauciuc antiderapante' ); ?></div>
  </div>
</section>

<!-- 6) SVJETILJKA — slika desno -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-sklopivo.jpg', 'Baston pliabil și reglabil' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Portabilitate</p>
      <h2 class="npl-h2">Se pliază într-o secundă și încape în geantă</h2>
      <p>Piesele sunt legate cu un elastic interior, așa că bastonul se desface și se asamblează <strong>dintr-o singură mișcare</strong>, fără unelte și fără ajutorul altcuiva. Pliat încape în geantă sau în torpedoul mașinii.</p>
      <p>Înălțimea o reglați în câteva secunde, așa că același baston se potrivește și unei persoane de 155 cm, și uneia de 190 cm.</p>
      <ul class="npl-check">
        <li>Desfacere și asamblare fără unelte</li>
        <li>Lungime reglabilă pentru toate înălțimile</li>
        <li>Piesele rămân legate — nu se pierde nimic</li>
      </ul>
    </div>
  </div>
</section>

<section class="npl-sec npl-rev">
  <div class="npl-wrap">
    <p class="npl-kicker npl-center">La clienții noștri</p>
    <h2 class="npl-h2 npl-center">Bastonul în case adevărate</h2>
    <p class="npl-sub">Fotografii și comentarii ale clienților — lângă fotoliu, pe hol, pe întuneric și pliat pentru drum.</p>
    <div class="npl-rev__grid">
      <?php
      $pl_reviews = array(
        array( 'img' => 'pal-ugc-1.jpg',    'name' => 'Maria K.',  'meta' => 'București · cumpărat acum 2 luni',
               'text' => '„Îl țin lângă fotoliu. Înainte mă ridicam din trei încercări, acum mă prind de mânerul de jos și mă ridic din prima.”' ),
        array( 'img' => 'pal-ugc-3.jpg',    'name' => 'Vasile P.', 'meta' => 'Cluj-Napoca · cumpărat acum 3 luni',
               'text' => '„Stă singur lângă masă și nu cade. Pentru mine asta e cel mai important — nu mă mai aplec după baston la fiecare cinci minute.”' ),
        array( 'img' => 'pal-noc.jpg',      'name' => 'Ana M.',  'meta' => 'Timișoara · cumpărat acum o lună',
               'text' => '„Aprind lanterna când merg noaptea la baie. Nu îmi trezesc soțul cu lumina mare și văd podeaua din fața mea.”' ),
        array( 'img' => 'pal-ugc-baza.jpg', 'name' => 'Ion Ș.',    'meta' => 'Iași · cumpărat acum 6 săptămâni',
               'text' => '„Baza este lată și nu alunecă. Am încercat pe gresia din baie și pe terasa udă — ține.”' ),
        array( 'img' => 'pal-ugc-6.jpg',    'name' => 'Nadia B.',    'meta' => 'Constanța · cumpărat acum 2 luni',
               'text' => '„L-am cumpărat mamei de ziua ei, la 78 de ani. Își reglează singură înălțimea și îl pliază singură, fără ajutorul nimănui.”' ),
        array( 'img' => 'pal-ugc-5.jpg',    'name' => 'Ștefan L.', 'meta' => 'Brașov · cumpărat acum 4 luni',
               'text' => '„Îl port în mașină când merg la doctor. Se pliază într-o secundă și încape în geantă, în sala de așteptare nu deranjează.”' ),
      );
      foreach ( $pl_reviews as $r ) : ?>
      <article class="npl-rev__card">
        <div class="npl-rev__img"><?php echo $pl_img( $r['img'], 'Fotografija kupca — NORIKS Pal' ); ?></div>
        <div class="npl-rev__body">
          <div class="npl-rev__stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="npl-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
          <p class="npl-rev__name"><?php echo esc_html( $r['name'] ); ?>
            <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2f9e5f"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </p>
          <p class="npl-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Diferența</p>
      <h2 class="npl-h2">De la „am nevoie de ajutor” la „merg singur”</h2>
      <p>Diferența nu stă în puterea picioarelor, ci în faptul că aveți de ce să vă prindeți. Al doilea mâner duce greutatea în locul umerilor și al încheieturilor.</p>
      <p class="npl-strong">Ridicare pe cont propriu și chiar o plimbare prin parc.</p>
      <a class="npl-cta" href="#bundle-selector">Comandați fără risc — 30 de zile</a>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-prije-poslije.jpg', 'Înainte și după — mișcare independentă' ); ?></div>
  </div>
</section>

<!-- 14) ŠEST RAZLOGA — slika desno -->
<style>
.npl-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #12212b; }
.npl-sec * { box-sizing: border-box; }
.npl-tint { background: #eef6f8; }
.npl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.npl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2b8fa6; margin: 0 0 10px; }
.npl-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; }
.npl-center { text-align: center; }
.npl-copy p { font-size: 16px; line-height: 1.7; color: #465863; margin: 0 0 14px; }
.npl-strong { font-weight: 800; color: #12212b !important; font-size: 17px !important; }
.npl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.npl-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(18,33,43,.05), 0 14px 40px rgba(18,33,43,.10); }
.npl-check { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.npl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.npl-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npl-points { display: flex; flex-direction: column; gap: 16px; margin-top: 4px; }
.npl-point h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 4px; color: #2b8fa6; }
.npl-point p { font-size: 15px; color: #465863; line-height: 1.6; margin: 0; }
.npl-six { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 4px; }
.npl-reason { background: #fff; border: 1px solid #d9e8ec; border-radius: 12px; padding: 18px 16px; }
.npl-reason span { display: inline-flex; align-items: center; justify-content: center; width: 26px; height: 26px; border-radius: 50%; background: #2b8fa6; color: #fff; font-weight: 800; font-size: 13px; margin-bottom: 9px; }
.npl-reason h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 5px; line-height: 1.3; }
.npl-reason p { font-size: 14px; color: #465863; line-height: 1.55; margin: 0; }
.npl-cta { display: inline-block; background: #12212b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.npl-cta:hover { background: #2b8fa6; color: #fff !important; }
.npl-rev__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.npl-rev__card { background: #fff; border: 1px solid #d9e8ec; border-radius: 14px; overflow: hidden;
  display: flex; flex-direction: column; box-shadow: 0 1px 2px rgba(18,33,43,.04), 0 8px 24px rgba(18,33,43,.06); }
.npl-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 0; box-shadow: none; }
.npl-rev__body { padding: 16px 18px 18px; }
.npl-rev__stars { color: #f0a020; font-size: 14px; letter-spacing: 1px; margin: 0 0 8px; }
.npl-rev__text { font-size: 14.5px; line-height: 1.6; color: #46545e; margin: 0 0 12px; }
.npl-rev__name { display: flex; align-items: center; gap: 6px; font-size: 14.5px; font-weight: 800; color: #12212b; margin: 0; }
.npl-rev__name svg { flex: 0 0 15px; }
.npl-rev__meta { font-size: 12.5px; color: #7b8b94; margin: 3px 0 0; }
.npl-sub { text-align: center; font-size: 16px; color: #5b6d78; max-width: 60ch; margin: 0 auto 34px; line-height: 1.6; }
.npl-video { width: 100%; display: block; border-radius: 14px; }
@media (max-width: 980px) {
  .npl-rev__grid { grid-template-columns: 1fr 1fr; }
    .npl-row2 { grid-template-columns: 1fr; gap: 30px; }
  .npl-row2--rev .npl-media { order: -1; }
  .npl-six { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .npl-rev__grid { grid-template-columns: 1fr; gap: 16px; }
  .npl-sec { padding: 44px 0; }
  .npl-wrap { padding: 0 16px; }
  .npl-six { grid-template-columns: 1fr; gap: 14px; }
  .npl-cta { width: 100%; text-align: center; }
}

/* ── kratek opis izdelka: kljukice namesto pik ─────────────────────── */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
