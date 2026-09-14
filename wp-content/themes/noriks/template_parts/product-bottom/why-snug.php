<?php
/**
 * product-bottom: NORIKS Snug — jastuk za cijelo tijelo u S-obliku (orto-snug).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana).
 *   1) Galerija u krevetu            5) Dimenzije (desno)
 *   2) Problem — VIDEO (lijevo)      6) Preporucuju kiroprakticari
 *   3) Kako radi (desno)             7) Punjenje (lijevo)
 *   4) Tri potpore (lijevo)          8) Boje (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sg      = get_template_directory_uri() . '/img/snug/';
$sg_path = get_template_directory() . '/img/snug/';
$sg_vid  = function( $file, $poster, $alt ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<video class="nsg-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $sg . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $sg . $file ) . '" type="video/mp4"></video>';
};
$sg_img  = function( $file, $alt, $cls = '' ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $sg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) KAKO IZGLEDA U KREVETU (galerija) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap">
    <p class="nsg-kicker nsg-center">Într-un dormitor adevărat</p>
    <h2 class="nsg-h2 nsg-center">Îmbrățișarea care ține toată noaptea</h2>
    <p class="nsg-sub">Îmbrățișați-o în față, sprijiniți spatele în spate — perna lucrează pe ambele părți.</p>
    <div class="nsg-gallery">
      <figure><?php echo $sg_vid( 'sng-gal-1.mp4', 'sng-gal-1.jpg', 'Perna înfășurată în jurul picioarelor în timpul somnului' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-2.mp4', 'sng-gal-2.jpg', 'Cum se folosește NORIKS Snug' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-3.mp4', 'sng-gal-3.jpg', 'Somn pe o parte cu NORIKS Snug' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-4.mp4', 'sng-gal-4.jpg', 'NORIKS Snug în pat' ); ?></figure>
    </div>
  </div>
</section>

<!-- 2) PROBLEM — slika lijevo -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_vid( 'sng-video.mp4', 'sng-video.jpg', 'NORIKS Snug în uz' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Problema</p>
      <h2 class="nsg-h2">De ce nu vă treziți niciodată <em>odihnit</em></h2>
      <div class="nsg-pain__list">
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">01</span>
          <div class="nsg-pain__copy">
            <h3>Umărul duce toată greutatea.</h3>
            <p>Fără sprijin pentru partea superioară a corpului, umărul de sus se răstoarnă în față și preia toată greutatea dumneavoastră. Aceasta este amorțeala cu care vă treziți în fiecare dimineață.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">02</span>
          <div class="nsg-pain__copy">
            <h3>Șoldul cade, coloana îl urmează.</h3>
            <p>Nimic nu vă ține șoldurile la același nivel, așa că gravitația le trage în jos, iar zona lombară se răsucește ca să compenseze. Aceasta este trezirea de la trei dimineața.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">03</span>
          <div class="nsg-pain__copy">
            <h3>Genunchii se suprapun și se freacă.</h3>
            <p>Presiunea os pe os crește toată noaptea. Până dimineața genunchii dor, iar picioarele sunt grele încă înainte să vă ridicați din pat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3) KAKO RADI — slika desno -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Cum funcționează</p>
      <h2 class="nsg-h2">Forma de S ține trei puncte în același timp</h2>
      <p>Curbura urmează linia corpului: partea de sus sprijină umărul, mijlocul umple spațiul de lângă talie, iar brațul de jos separă genunchii.</p>
      <p>Greutatea se distribuie pe toată lungimea în loc să se adune într-un singur loc. Corpul încetează să mai trimită semnalele care vă trezesc.</p>
      <ul class="nsg-check">
        <li>Umeri descărcați, fără presiune pe o singură parte</li>
        <li>Șolduri și bazin într-o linie naturală</li>
        <li>Genunchi separați, fără contact os pe os</li>
      </ul>
      <a class="nsg-cta" href="#bundle-selector">Alegeți-vă culoarea</a>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-usporedba.jpg', 'NORIKS Snug în comparație cu o pernă obișnuită' ); ?></div>
  </div>
</section>

<!-- 4) TRI KLJUČNE POTPORE — slika lijevo -->
<section class="nsg-sec nsg-trust">
  <div class="nsg-trust__head">
    <p class="nsg-trust__eyebrow">Încrederea specialiștilor</p>
    <h2 class="nsg-trust__title">Recomandă <em>chiropracticienii.</em></h2>
  </div>
  <div class="nsg-wrap">
    <div class="nsg-docs">
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-1.jpg', 'Chiropracticiană cu perna NORIKS Snug' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">„Recomand Snug pacienților care se luptă noaptea cu dureri de șold și de zona lombară.”</p>
          <p class="nsg-doc__p">„Forma de S ține coloana în poziție neutră pentru că sprijină simultan umerii, șoldurile și genunchii. Majoritatea pernelor pentru corp rezolvă doar una dintre acestea. Aceasta le rezolvă pe toate trei și de aceea pacienții chiar continuă să o folosească.”</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Chiropracticiană<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">12 ani de practică</p>
          </div>
        </div>
      </article>
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-2.jpg', 'Chiropractician cu perna NORIKS Snug' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">„La pacienții care dorm pe o parte problema este mereu aceeași: spațiul gol dintre umăr și genunchi.”</p>
          <p class="nsg-doc__p">„Snug este unul dintre puținele produse care chiar rezolvă asta. Sprijină toată lungimea trunchiului, nu doar un singur punct de presiune. Pacienții revin după două săptămâni și spun că înțepeneala de dimineață a dispărut.”</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Chiropractician<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">18 ani de practică</p>
          </div>
        </div>
      </article>
    </div>
    <p class="nsg-note">Opiniile specialiștilor nu înlocuiesc consultul medical și nici tratamentul prescris.</p>
  </div>
</section>

<!-- 7) PUNJENJE — slika lijevo -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-potpore.jpg', 'Trei sprijinuri esențiale: brațe, șolduri, genunchi' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Trei puncte de sprijin</p>
      <h2 class="nsg-h2">O pernă în loc de trei</h2>
      <p>Majoritatea oamenilor pun două sau trei perne obișnuite ca să obțină sprijinul pe care Snug îl dă singură — și apoi le tot mută toată noaptea.</p>
      <p>Snug ține toate cele trei puncte deodată, așa că nu trebuie să vă treziți ca să o potriviți.</p>
      <ul class="nsg-check">
        <li>Sprijin pentru brațe — previne amorțeala în timpul nopții</li>
        <li>Alinierea șoldurilor — coloana rămâne neutră</li>
        <li>Pernă sub genunchi — ia presiunea de pe zona lombară</li>
      </ul>
    </div>
  </div>
</section>

<!-- 5) DIMENZIJE — slika desno -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Mărimea potrivită</p>
      <h2 class="nsg-h2">105 × 30 cm — suficient, dar nu prea mult</h2>
      <p>Vă sprijină de la umăr până la genunchi, dar nu ocupă tot patul și nu deranjează partenerul.</p>
      <p>Tocmai această lungime face să fie ușor de ținut și ușor de întors cu ea — fără mutări și fără treziri.</p>
      <ul class="nsg-check">
        <li>Lungime 105 cm, lățime 30 cm</li>
        <li>Se potrivește tuturor înălțimilor</li>
        <li>Ușoară, o mutați cu o singură mână</li>
      </ul>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-dimenzije.jpg', 'Dimensiuni: 105 × 30 cm' ); ?></div>
  </div>
</section>

<!-- 6) PREPORUČUJU STRUČNJACI (postavitev z originala) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-boje.jpg', 'Șase culori disponibile' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Alegeți culoarea</p>
      <h2 class="nsg-h2">Șase culori pentru orice dormitor</h2>
      <p>Albastru, roz, gri, verde, mov și bleumarin — culoarea o alegeți pe această pagină, înainte de a adăuga în coș.</p>
      <p>Toate nuanțele au aceeași țesătură răcoritoare și aceeași umplutură; diferă doar culoarea husei.</p>
      <a class="nsg-cta" href="#bundle-selector">Alegeți-vă culoarea</a>
    </div>
  </div>
</section>

<!-- 10) ŠTO MOŽETE OČEKIVATI -->
<style>
.nsg-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f2a37; }
.nsg-sec * { box-sizing: border-box; }
.nsg-tint { background: #f2f5f9; }
.nsg-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nsg-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #5b7fa6; margin: 0 0 10px; }
.nsg-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1f2a37; }
.nsg-center { text-align: center; }
.nsg-sub { text-align: center; font-size: 16px; color: #5c6b7a; max-width: 60ch; margin: 0 auto 40px; line-height: 1.6; }
.nsg-copy p { font-size: 16px; line-height: 1.7; color: #4a5765; margin: 0 0 14px; }
.nsg-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nsg-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px 22px; }
.nsg-num { display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #5b7fa6; color: #fff; font-weight: 800; font-size: 16px; margin-bottom: 14px; }
.nsg-card h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-card p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsg-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nsg-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #5b7fa6; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsg-cta { display: inline-block; background: #1f2a37; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsg-cta:hover { background: #33445a; color: #fff !important; }
.nsg-cta--center { display: block; width: fit-content; margin: 40px auto 0; }
.nsg-trust__head { padding: 0 22px; text-align: center; margin-bottom: 34px; }
.nsg-trust__eyebrow { font-size: 12px; letter-spacing: .14em; text-transform: uppercase; font-weight: 700; color: #5b7fa6; margin: 0 0 8px; }
.nsg-trust__title { font-size: clamp(22px, 3vw, 30px); line-height: 1.15; font-weight: 800; color: #12202c; margin: 0; }
.nsg-trust__title em { font-style: italic; font-weight: 800; color: #5b7fa6; }
.nsg-docs { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 960px; margin: 0 auto; }
.nsg-doc { background: #fff; border: 1px solid #e0d6d6; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nsg-doc__img { width: 100%; aspect-ratio: 4/5; overflow: hidden; }
.nsg-doc__img img { width: 100%; height: 100%; object-fit: cover; display: block; }
.nsg-doc__body { padding: 22px 20px 24px; display: flex; flex-direction: column; flex: 1; }
.nsg-doc__lead { font-size: clamp(17px, 2.2vw, 19px); font-weight: 700; font-style: italic; color: #12202c; line-height: 1.45; margin: 0 0 14px; }
.nsg-doc__p { font-size: 15px; color: #3d4a57; line-height: 1.62; margin: 0 0 18px; }
.nsg-doc__who { border-top: 1px solid #e0d6d6; padding-top: 15px; margin-top: auto; }
.nsg-doc__name { margin: 0; font-size: 15px; font-weight: 700; color: #12202c; line-height: 1.3; display: flex; align-items: center; gap: 6px; }
.nsg-doc__role { margin: 4px 0 0; font-size: 13px; color: #6b7a88; line-height: 1.3; }
.nsg-note { text-align: center; font-size: 12px; color: #93a1b0; font-style: italic; margin: 22px 0 0; }
.nsg-tl { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-tl__item { background: #f2f5f9; border-radius: 14px; padding: 26px 22px; }
.nsg-tl__when { font-size: 12.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #5b7fa6; margin-bottom: 8px; }
.nsg-tl__item h3 { font-size: 18px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-tl__item p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-row2--tight { gap: 44px; align-items: center; }
.nsg-pain__list { display: flex; flex-direction: column; }
.nsg-pain__row { display: flex; gap: 18px; padding: 22px 0; border-top: 1px solid #dbe2ea; }
.nsg-pain__row:last-child { border-bottom: 1px solid #dbe2ea; }
.nsg-pain__num { flex: none; font-size: 17px; font-weight: 800; color: #5b7fa6; letter-spacing: .04em; padding-top: 5px; }
.nsg-pain__copy { flex: 1; }
.nsg-pain__copy h3 { font-size: clamp(18px, 2vw, 21px); font-weight: 800; line-height: 1.25; margin: 0 0 7px; letter-spacing: -.01em; }
.nsg-pain__copy p { font-size: 15px; line-height: 1.6; color: #5c6b7a; margin: 0; }
.nsg-h2 em { font-style: normal; color: #5b7fa6; }
.nsg-gallery { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; align-items: stretch; }
.nsg-gallery figure { margin: 0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-gallery img, .nsg-video { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; aspect-ratio: 3/4; }
.nsg-boje { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 34px; }
.nsg-media--stack { display: grid; gap: 16px; }
.nsg-boje figure { margin: 0; border-radius: 14px; overflow: hidden; }
.nsg-boje img { width: 100%; display: block; }
@media (max-width: 980px) {
  .nsg-docs { grid-template-columns: 1fr; gap: 18px; max-width: 520px; }
  .nsg-boje { grid-template-columns: 1fr 1fr; }
  .nsg-gallery { grid-template-columns: 1fr 1fr; }
  .nsg-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nsg-row2--rev .nsg-media { order: -1; }
  .nsg-three, .nsg-tl, .nsg-docs { grid-template-columns: 1fr; gap: 16px; }
}
@media (max-width: 560px) {
  .nsg-gallery { grid-template-columns: 1fr; gap: 14px; }
  .nsg-gallery img, .nsg-video { aspect-ratio: 3/4; }
  .nsg-sec { padding: 44px 0; }
  .nsg-pain__row { gap: 14px; padding: 20px 0; }
  .nsg-wrap { padding: 0 16px; }
  .nsg-sub { margin-bottom: 28px; }
  .nsg-card, .nsg-tl__item { padding: 22px 18px; }
  .nsg-cta { width: 100%; text-align: center; }
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
