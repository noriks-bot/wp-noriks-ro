<?php
/**
 * product-bottom: NORIKS KneeHeat — grijac, kompresija i masaza koljena (orto-kneeheat) — trg RO.
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), po referentnoj stranici
 * (getmendable.com / Knee Triple Therapy Recovery System). Nikad slika na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kh      = get_template_directory_uri() . '/img/kneeheat/';
$kh_path = get_template_directory() . '/img/kneeheat/';

$kh_vid = function( $file, $poster, $alt ) use ( $kh, $kh_path ) {
  if ( ! file_exists( $kh_path . $file ) ) { return ''; }
  return '<video class="nkh-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $kh . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $kh . $file ) . '" type="video/mp4"></video>';
};

$kh_img = function( $file, $alt ) use ( $kh, $kh_path ) {
  if ( file_exists( $kh_path . $file ) ) {
    return '<img src="' . esc_url( $kh . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nkh-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Tri koraka — videi -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap">
    <p class="nkh-eyebrow nkh-center">Cum funcționează</p>
    <h2 class="nkh-h2 nkh-center">Ușurare în 3 pași simpli</h2>
    <p class="nkh-lead nkh-center">Fără configurare, fără aplicație, fără o rutină complicată. Fixați manșeta, apăsați butonul și continuați-vă ziua.</p>
    <div class="nkh-steps3">
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-1.mp4', 'kh-step-1.jpg', 'Fixarea manșetei pe genunchi' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>1</span> Fixați manșeta</p>
          <p>Așezați-o în jurul genunchiului și strângeți benzile. Durează 20 de secunde și funcționează pe ambele picioare.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-2.mp4', 'kh-step-2.jpg', 'Pornirea ședinței cu un singur buton' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>2</span> Apăsați butonul</p>
          <p>Un singur buton pornește toate cele trei terapii — căldură, compresie și vibrații — pentru exact 12 minute.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-3.mp4', 'kh-step-3.jpg', 'Dispozitivul lucrează singur cât vă odihniți' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>3</span> Continuați-vă ziua</p>
          <p>Urmăriți știrile, beți o cafea. Dispozitivul lucrează singur și se oprește când ședința se termină.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2) Zacaran krug — video -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-bol.mp4', 'kh-vid-bol.jpg', 'Durere și rigiditate în genunchi' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Rupeți cercul vicios. Genunchiul dumneavoastră este pregătit pentru o ușurare reală.</h2>
      <p>Durerea surdă, rigiditatea la ridicare, pasul precaut înainte de a coborî scările — acestea sunt semnalele unui țesut care de ani de zile este lipsit în tăcere de hrană. Răspunsul nu este încă o pastilă, ci refacerea fluxului de sânge în articulație.</p>
      <ul class="nkh-tri">
        <li><strong>12 minute pe zi:</strong> refacerea fluxului și eliberarea tensiunii, fără pastile.</li>
        <li><strong>Refacere și recuperare:</strong> căldura dilată vasele, compresia elimină umflătura, vibrațiile eliberează rigiditatea — totul într-o singură ședință.</li>
        <li><strong>Mișcare fără calcule:</strong> scări fără planificare, genuflexiuni în grădină, nepotul în brațe.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Osjetite razliku — video desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Simțiți diferența: ușurarea de durată începe astăzi</h2>
      <p>Nu o liniște de moment, ci o schimbare pe care o observați. <strong>Majoritatea utilizatorilor simt o diferență reală în primele 7–14 zile</strong> de utilizare regulată. Rigiditatea de dimineață cedează, iar coborâtul scărilor nu mai este un calcul.</p>
      <ul class="nkh-tri">
        <li><strong>Mai puțină rigiditate și presiune:</strong> reduce tensiunea și umflătura care întrețin disconfortul.</li>
        <li><strong>Circulație mai bună:</strong> readuce fluxul în țesutul mai profund al genunchiului — acolo unde problema apare de fapt.</li>
        <li><strong>Totul acasă:</strong> fără drumuri la terapie și fără așteptarea unei programări.</li>
      </ul>
    </div>
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-zglob.mp4', 'kh-vid-zglob.jpg', 'Articulația genunchiului' ); ?></div>
  </div>
</section>

<!-- Pametna tehnologija — video lijevo -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-led.mp4', 'kh-vid-led.jpg', 'Elemente de încălzire în manșetă' ); ?></div>
        <div class="nkh-copy">
      <h2 class="nkh-h2">Tehnologie inteligentă pentru țesutul profund</h2>
      <p>Adaptați NORIKS KneeHeat la genunchiul dumneavoastră: <strong>3 niveluri de căldură</strong>, <strong>3 moduri de vibrație</strong> și <strong>compresie ciclică</strong>. Fără cablu, un singur buton, douăsprezece minute.</p>
      <ul class="nkh-tri">
        <li><strong>Mereu pregătit:</strong> funcționare fără fir și încărcare prin cablu USB-C.</li>
        <li><strong>Portabil:</strong> este ușor și încape în geantă — folosiți-l oriunde vă aflați.</li>
        <li><strong>Control simplu:</strong> un singur buton, fără aplicație și fără configurare.</li>
      </ul>
    </div>
  </div>
</section>


<!-- 2) Trostruka metoda — slika desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Trei terapii într-o singură ședință</h2>
      <p>Încălzirea, compresia și vibrațiile nu funcționează una după alta, ci simultan — de aceea o ședință durează doar 12 minute.</p>
      <ul class="nkh-tri">
        <li><strong>Căldura de până la 42 °C</strong> dilată vasele de sânge și înmoaie țesutul rigid din jurul articulației.</li>
        <li><strong>Compresia cu aer</strong> strânge și eliberează ritmic, împinge lichidul acumulat și readuce sânge proaspăt.</li>
        <li><strong>Masajul prin vibrații de 60 Hz</strong> eliberează tensiunea și rigiditatea care țin genunchiul „blocat".</li>
      </ul>
      <p class="nkh-note">Spre deosebire de dispozitivele TENS, care doar acoperă semnalul durerii, KneeHeat acționează asupra țesutului mai profund.</p>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-04-metoda.jpg', 'Metoda triplă: căldură, compresie și vibrații' ); ?></div>
  </div>
</section>


<!-- 4) Značajke uređaja — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-11-znacajke.jpg', 'Caracteristicile dispozitivului NORIKS KneeHeat' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Făcut să fie purtat, nu ținut în sertar</h2>
      <p>Panoul de comandă este pe exterior, la îndemână: <strong>o atingere schimbă nivelul de căldură</strong>, alta modul de vibrație. Fără meniuri și fără aplicații pe care să le căutați pe întuneric.</p>
      <p>Manșeta se închide cu două benzi, așa că alegeți singuri cât de strâns să fie — mai lejer când stați jos, mai strâns când vă plimbați prin casă. Dispozitivul rămâne apoi pe loc și nu se rotește în jurul piciorului.</p>
      <p class="nkh-strong">Este fără fir și se încarcă prin cablu USB-C; o încărcare ajunge pentru mai multe ședințe, așa că merge cu dumneavoastră la birou sau în călătorie.</p>
    </div>
  </div>
</section>

<!-- 5) Što je u paketu — slika lijevo -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Ce primiți în pachet</h2>
      <ul class="nkh-pack">
        <li><strong>Dispozitivul NORIKS KneeHeat</strong> — manșetă cu încălzire, compresie și vibrații</li>
        <li><strong>Cablu USB-C împletit</strong> pentru încărcare</li>
        <li><strong>Bandă de prelungire</strong> pentru circumferințe mai mari ale piciorului</li>
        <li><strong>2 ani garanție de înlocuire</strong></li>
      </ul>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-07-unboxing-h.jpg', 'Conținutul pachetului NORIKS KneeHeat' ); ?></div>
  </div>
</section>


<!-- 7) Liječnik — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-02-lijecnik.jpg', 'Recomandarea medicului ortoped' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Creat pentru confortul și mișcarea de zi cu zi</h2>
      <p class="nkh-quote">„În cazul problemelor cronice de genunchi după 45 de ani, cel mai mult merită ceea ce oamenii pot face zilnic acasă. Căldura, compresia și vibrațiile împreună readuc fluxul în țesut — iar aceasta este baza pe care funcționează tot restul.”</p>
      <p class="nkh-sign">Dr. Marius Popescu, medic ortoped</p>
    </div>
  </div>
</section>

<!-- 8) Dodaci i jamstvo — slika lijevo -->
<!-- 9) Jamstvo — slika desno -->
<style>
.nkh-sec { padding: 46px 0; }
.nkh-light { background: #f3f0ea; color: #1f2a37; }
.nkh-white { background: #fff;    color: #1f2a37; }
.nkh-dark  { background: #12233b; color: #eef3f9; }
.nkh-dark h2, .nkh-dark h3, .nkh-dark p, .nkh-dark li, .nkh-dark strong { color: #eef3f9; }
.nkh-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nkh-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nkh-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #c1601f; margin: 0 0 8px; }
.nkh-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nkh-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nkh-strong { font-weight: 600; }
.nkh-note { font-size: 14.5px; opacity: .85; margin: 4px 0 0; }
.nkh-quote { font-style: italic; font-size: 16.5px; }
.nkh-sign { font-size: 14px; opacity: .75; margin: 0; }
.nkh-ticks, .nkh-tri, .nkh-pack { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.nkh-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #c1601f; }
.nkh-tri li { border-left: 3px solid #c1601f; padding: 2px 0 2px 14px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-pack li { position: relative; padding-left: 22px; margin-bottom: 8px; font-size: 15px; line-height: 1.5; }
.nkh-pack li:before { content: "✓"; position: absolute; left: 0; top: 0; color: #1e8f4e; font-weight: 800; }
.nkh-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #c1601f; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }

.nkh-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; align-items: start; }
.nkh-three figure { margin: 0; }
.nkh-three img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-three figcaption { text-align: center; font-size: 13px; margin-top: 7px; opacity: .72; }
.nkh-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 14px; }
.nkh-mini figure { margin: 0; }
.nkh-mini img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #e3ded4; border-radius: 12px; color: #7a6a55; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 820px) {
  .nkh-sec { padding: 22px 0; }
  .nkh-wrap { padding-left: 0; padding-right: 0; }
  .nkh-h2 { font-size: 22px; }
  .nkh-row { grid-template-columns: 1fr; gap: 18px; }
  .nkh-steps3 { grid-template-columns: 1fr; gap: 18px; }
  .nkh-three { grid-template-columns: 1fr; gap: 14px; }
  .nkh-row .nkh-media { order: -1; }
}

/* kratek opis izdelka: kljukice namesto pikic (kot pri udlagi proti hrkanju) */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nkh-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #c1601f !important; font-weight: 800 !important; }
/* slika naj bo poravnana na rob kontejnerja, ne na sredino stolpca */
.nkh-center { text-align: center; }

.nkh-steps3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.nkh-step3 { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.07); }
.nkh-step3 .nkh-video { width: 100%; height: auto; display: block; }
.nkh-step3-txt { padding: 16px 18px 20px; }
.nkh-step3-h { display: flex; align-items: center; gap: 10px; font-size: 17px; font-weight: 700; margin: 0 0 6px !important; }
.nkh-step3-h span { flex: 0 0 auto; width: 27px; height: 27px; border-radius: 50%; background: #c1601f; color: #fff;
                    font-size: 13px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkh-step3-txt p:last-child { font-size: 14.5px; margin: 0 !important; }
.nkh-media .nkh-video { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-sec p.nkh-lead { max-width: 720px; margin: 0 auto 22px !important; opacity: .85; text-align: center; }
.nkh-sec .nkh-center { text-align: center; }
.nkh-sec .nkh-lead-copy { max-width: 820px; margin: 0 auto 22px !important; text-align: center; }
.nkh-sec .nkh-lead-copy p { margin-left: auto !important; margin-right: auto !important; }
.nkh-sec .nkh-lead-copy h2 { text-align: center; }
</style>
