<?php
/**
 * product-bottom: NORIKS FIT Woman — oblikujuca majica s 3D linijama (orto-kompwom).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno.
 * Recenzije su preslikane s originala (leonieandco): bordo pas + vodoravni klizac.
 *   1) Zagladen trbuh (lijevo)     5) Tkanina i kroj (desno)
 *   2) Mi vs drugi (desno)         6) Kako je nositi (lijevo)
 *   3) RECENZIJE — klizac          7) Boje (desno)
 *   4) Osjecajte se sigurno (lijevo)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kw      = get_template_directory_uri() . '/img/kompwom/';
$kw_path = get_template_directory() . '/img/kompwom/';
$kw_img  = function( $file, $alt, $cls = '' ) use ( $kw, $kw_path ) {
  if ( ! file_exists( $kw_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $kw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAGLAĐEN TRBUH — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-trbuh.jpg', 'Abdomen neted cu tricoul NORIKS FIT Woman' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Imediat, din primul minut</p>
      <h2 class="nkw-h2">Abdomen neted <em>fără strângere</em></h2>
      <p>Liniile noastre 3D modelează corpul astfel încât să strângă ușor zona abdomenului și a șoldurilor și să stimuleze circulația — fără o bandă care intră în piele și fără senzația că sunteți strânsă.</p>
      <p>Fără tricou abdomenul este moale, iar pliurile se văd sub haine. Cu el abdomenul este imediat neted, iar ținuta mai dreaptă.</p>
      <ul class="nkw-check">
        <li>Abdomen neted imediat</li>
        <li>Ținută dreaptă fără să vă gândiți</li>
        <li>Invizibil sub haine</li>
      </ul>
      <a class="nkw-cta" href="#bundle-selector">Alegeți culoarea și mărimea</a>
    </div>
  </div>
</section>

<!-- 2) MI VS DRUGI — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Diferența</p>
      <h2 class="nkw-h2">De ce compresia obișnuită nu funcționează</h2>
      <p>Tricourile modelatoare clasice apasă pe o singură linie. Rezultatul este o proeminență deasupra marginii, cute pe umeri și o margine care se vede sub haine.</p>
      <p>La noi relieful este <strong>țesut în material</strong> și distribuit pe lățime, așa că presiunea se împrăștie în loc să se adune.</p>
      <ul class="nkw-vs">
        <li class="is-yes">Tehnologie 3D țesută în tricotaj</li>
        <li class="is-yes">Compresie blândă 360° fără proeminențe</li>
        <li class="is-yes">Sprijină zona lombară</li>
        <li class="is-no">Compresie obișnuită care creează proeminențe</li>
        <li class="is-no">Materialul se rulează în timpul zilei</li>
        <li class="is-no">Margine care se vede sub haine</li>
      </ul>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-usporedba.jpg', 'NORIKS FIT Woman în comparație cu un tricou modelator obișnuit' ); ?></div>
  </div>
</section>

<!-- 3) OSJEĆAJTE SE SIGURNO — slika lijevo -->
<section class="nkw-rev">
  <div class="nkw-rev__head">
    <span class="nkw-rev__badge">★★★★★ Excelent · Nota 4,9/5</span>
    <h2 class="nkw-rev__title">Recenzii de la femei ca dumneavoastră</h2>
  </div>
  <div class="nkw-rev__track">
    <?php
    $kw_reviews = array(
      array( 'img' => 'kwm-ugc-1.jpg', 'name' => 'Carolina B.', 'meta' => 'Mărimea M · 46 · București', 'worn' => 'Poartă de 7 săptămâni',
             'text' => '„Cămășile îmi cad drept, în față și în spate. Cele pe care le-am încercat înainte nu au rezistat nici măcar o zi întreagă.”' ),
      array( 'img' => 'kwm-ugc-2.jpg', 'name' => 'Daniela P.', 'meta' => 'Mărimea 2XL · 48 · Cluj-Napoca', 'worn' => 'Poartă de 5 săptămâni',
             'text' => '„Primul tricou modelator care nu mi se rulează în sus. Marginea ține, iar materialul este destul de subțire pentru vară.”' ),
      array( 'img' => 'kwm-ugc-3.jpg', 'name' => 'Ana T.', 'meta' => 'Mărimea 3XL · 51 · Timișoara', 'worn' => 'Poartă de 6 săptămâni',
             'text' => '„L-am cumpărat pentru o nuntă, iar acum îl port la serviciu. Statul jos nu mai schimbă felul în care cade rochia.”' ),
      array( 'img' => 'kwm-ugc-4.jpg', 'name' => 'Laura D.', 'meta' => 'Mărimea M · 43 · Iași', 'worn' => 'Poartă de 8 săptămâni',
             'text' => '„Îl îmbrac după micul dejun și uit că îl am. Până la prânz nu îl observ deloc.”' ),
      array( 'img' => 'kwm-ugc-5.jpg', 'name' => 'Natalia A.', 'meta' => 'Mărimea 2XL · 37 · Constanța', 'worn' => 'Poartă de 9 săptămâni',
             'text' => '„Niciodată nu mi-a stat bine când băgam tricoul în pantaloni. Cu acesta pe dedesubt talia pare mai subțire și nu mă tot aranjez toată ziua.”' ),
      array( 'img' => 'kwm-ugc-6.jpg', 'name' => 'Nicoleta M.', 'meta' => 'Mărimea L · 48 · Brașov', 'worn' => 'Poartă de 4 săptămâni',
             'text' => '„L-am comandat pentru o singură ținută și a ajuns sub majoritatea puloverelor. Tricotajul arată neted, nu încrețit în talie.”' ),
      array( 'img' => 'kwm-ugc-7.jpg', 'name' => 'Petra J.', 'meta' => 'Mărimea XL · 50 · Craiova', 'worn' => 'Poartă de 6 săptămâni',
             'text' => '„Stau la birou nouă ore pe zi și rămâne comod. Nu are cusături care se simt, iar bluza rămâne netedă în spate.”' ),
      array( 'img' => 'kwm-ugc-8.jpg', 'name' => 'Sofia K.', 'meta' => 'Mărimea M · 45 · Oradea', 'worn' => 'Poartă de 10 săptămâni',
             'text' => '„Spatele îmi mulțumește. Tricoul îmi amintește ușor să mă îndrept și, în același timp, nu mă strânge nicăieri.”' ),
    );
    foreach ( $kw_reviews as $r ) : ?>
    <article class="nkw-rev__card">
      <div class="nkw-rev__img"><?php echo $kw_img( $r['img'], 'Kupka u NORIKS FIT Woman majici' ); ?></div>
      <div class="nkw-rev__body">
        <div class="nkw-rev__top">
          <div>
            <p class="nkw-rev__name"><?php echo esc_html( $r['name'] ); ?>
              <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#3aa06a"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nkw-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
          </div>
          <span class="nkw-rev__worn"><?php echo esc_html( $r['worn'] ); ?></span>
        </div>
        <p class="nkw-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <p class="nkw-rev__hint">Trageți în lateral pentru mai multe recenzii →</p>
</section>

<!-- 7) BOJE — slika desno -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-drzanje.jpg', 'Talie mai subțire și ținută dreaptă' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Trei lucruri deodată</p>
      <h2 class="nkw-h2">Simțiți-vă <em>în siguranță în pielea dumneavoastră</em></h2>
      <div class="nkw-points">
        <div class="nkw-point"><h3>Talie mai subțire</h3><p>Liniile 3D modelează talia și netezesc proeminențele de deasupra pantalonilor sau a fustei.</p></div>
        <div class="nkw-point"><h3>Abdomen plat imediat</h3><p>Compresia blândă ține abdomenul sub orice haină, fără presiune într-un singur punct.</p></div>
        <div class="nkw-point"><h3>Ținută dreaptă</h3><p>Sprijinul de pe spate ajută să stați drept și descarcă zona lombară.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) TKANINA I KROJ — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Material și croi</p>
      <h2 class="nkw-h2">Relieful este <em>țesut</em>, nu imprimat</h2>
      <p>Banda lată trece peste abdomen și șolduri, a doua merge peste spate. De aceea nimic nu crapă și nimic nu se cojește.</p>
      <div class="nkw-facts">
        <div><h3>Linii 3D</h3><p>Structurate, țesute în tricotaj — nu dispar în timp.</p></div>
        <div><h3>Bandă pe spate</h3><p>A doua bandă trece peste spate și sprijină ținuta dreaptă.</p></div>
        <div><h3>Mâneci</h3><p>Croi mulat, care nu se rulează și nu urcă.</p></div>
        <div><h3>Material</h3><p>Subțire, mat și respirabil — dispare sub cămașă sau sacou.</p></div>
      </div>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-detalji.jpg', 'Detalii: linii 3D, bandă, mâneci, material' ); ?></div>
  </div>
</section>

<!-- 5) KAKO JE NOSITI — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-siva.jpg', 'NORIKS FIT Woman gri închis' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Cum se poartă</p>
      <h2 class="nkw-h2">Îmbrăcați-l dimineața și uitați de el până seara</h2>
      <p>Trebuie să respirați și să mâncați normal, fără să vă gândiți la tricou. Dacă urma de pe piele se vede la douăzeci de minute după ce îl dați jos, mărimea este prea mică.</p>
      <ul class="nkw-check">
        <li><strong>Toată ziua</strong> — compresia este distribuită, așa că nimic nu intră în piele</li>
        <li><strong>Sub orice</strong> — fără linie și fără margine sub haine</li>
        <li><strong>Îngrijire simplă</strong> — spălare în mașină la 30 °C</li>
      </ul>
      <p class="nkw-note nkw-note--left">Mărimea o alegeți după circumferința bustului. Dacă sunteți între două, luați-o pe cea mai mare.</p>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE (postavitev z originala — bordo pas z drsnikom) -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Trei culori</p>
      <h2 class="nkw-h2">Negru, gri închis și <em>roz</em></h2>
      <p>Negru sub orice, gri închis pentru purtarea zilnică, roz când doriți ceva mai cald. Toate trei au același tricotaj și același relief.</p>
      <p>Culoarea și mărimea le alegeți pe această pagină, înainte de a adăuga în coș.</p>
      <a class="nkw-cta" href="#bundle-selector">Alegeți culoarea și mărimea</a>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-roza.jpg', 'NORIKS FIT Woman roz' ); ?></div>
  </div>
</section>

<style>
.nkw-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22; }
.nkw-sec * { box-sizing: border-box; }
.nkw-tint { background: #fbf3f4; }
.nkw-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8536b; margin: 0 0 10px; }
.nkw-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #241c22; }
.nkw-h2 em { font-style: italic; font-weight: 800; color: #a8536b; }
.nkw-copy p { font-size: 16px; line-height: 1.7; color: #56494f; margin: 0 0 14px; }
.nkw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nkw-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nkw-check li::before { content: "\2713"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; }
.nkw-vs li::before { position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nkw-vs .is-no { color: #8b7b83; }
.nkw-vs .is-no::before { content: "\2715"; background: #ece0e4; color: #a8949c; }
.nkw-points { display: flex; flex-direction: column; gap: 20px; }
.nkw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a8536b; }
.nkw-point p { font-size: 15.5px; color: #56494f; line-height: 1.6; margin: 0; }
.nkw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nkw-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #241c22; }
.nkw-facts p { font-size: 14.5px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-note { font-size: 13.5px; color: #8b7b83; font-style: italic; margin: 20px 0 0; }
.nkw-note--left { text-align: left; }
.nkw-cta { display: inline-block; background: #241c22; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkw-cta:hover { background: #a8536b; color: #fff !important; }

/* ── recenzije: bordo pas + vodoravni klizac (kot na originalu) ────── */
.nkw-rev { background: #5c2331; padding: 62px 0 54px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; }
.nkw-rev * { box-sizing: border-box; }
.nkw-rev__head { max-width: 1240px; margin: 0 auto 30px; padding: 0 24px; text-align: center; }
.nkw-rev__badge { display: inline-block; border: 1px solid rgba(255,255,255,.45); border-radius: 100px; padding: 8px 18px; font-size: 12.5px; font-weight: 700; letter-spacing: .04em; color: #fff; }
.nkw-rev__title { font-family: Georgia, 'Times New Roman', serif; font-size: clamp(27px, 3.4vw, 40px); font-weight: 400; color: #fff; margin: 16px 0 0; line-height: 1.2; }
.nkw-rev__track { display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;
  padding: 4px 24px 18px; margin: 0 auto; max-width: 1240px; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,.4) transparent; }
.nkw-rev__track::-webkit-scrollbar { height: 6px; }
.nkw-rev__track::-webkit-scrollbar-track { background: rgba(255,255,255,.12); border-radius: 100px; }
.nkw-rev__track::-webkit-scrollbar-thumb { background: rgba(255,255,255,.45); border-radius: 100px; }
.nkw-rev__card { flex: 0 0 310px; width: 310px; scroll-snap-align: start; background: #fff; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nkw-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.nkw-rev__body { padding: 16px 18px 20px; }
.nkw-rev__top { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }
.nkw-rev__name { display: flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 800; color: #241c22; margin: 0; }
.nkw-rev__name svg { flex: 0 0 15px; }
.nkw-rev__meta { font-size: 12.5px; color: #7b6d73; margin: 3px 0 0; }
.nkw-rev__worn { flex: 0 0 auto; background: #f3eaed; color: #5c2331; font-size: 10.5px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; padding: 5px 9px; border-radius: 100px; white-space: nowrap; }
.nkw-rev__text { font-size: 14.5px; line-height: 1.6; color: #46393f; margin: 13px 0 0; }
.nkw-rev__hint { text-align: center; font-size: 12.5px; color: rgba(255,255,255,.6); margin: 8px 0 0; }

@media (max-width: 980px) {
  .nkw-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nkw-row2--rev .nkw-media { order: -1; }
  .nkw-facts { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .nkw-sec { padding: 44px 0; }
  .nkw-wrap { padding: 0 16px; }
  .nkw-facts { grid-template-columns: 1fr; gap: 16px; }
  .nkw-cta { width: 100%; text-align: center; }
  .nkw-rev { padding: 46px 0 40px; }
  .nkw-rev__head { padding: 0 16px; }
  .nkw-rev__track { padding: 4px 16px 16px; gap: 14px; }
  .nkw-rev__card { flex: 0 0 300px; width: 300px; }
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
