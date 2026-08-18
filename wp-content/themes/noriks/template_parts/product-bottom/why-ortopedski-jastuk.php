<?php
/**
 * product-bottom: NORIKS ErgoSit — PERNA ORTOPEDICĂ DE ȘEZUT (orto-ortopedski-jastuk)
 * 1:1 kopija originalne stranice (celinva.com/products/orthopedic-cushion):
 * iste sekcije, isti redoslijed, iste postavitve (lijevo-desno), sadržaj preveden RO,
 * rebrand NORIKS ErgoSit, lokalizirane grafike. Pink akcent #e5157e, navy #121030.
 * Redoslijed (original):
 *   1. marquee  2. "#1 Orthopedic Seat Cushion" + UGC  3. End Tailbone (img L / txt R)
 *   4. Improve Posture (txt L / img R)  5. Relief That Adapts (grid L / txt R)
 *   6. UGC reviews traka  7. Engineered (img L / txt R + CTA)
 *   8. Effective Against (akordeon, puna širina)  9. 20x Cheaper (img L / txt R + CTA)
 *   10. Won't Quit (txt L / tablica R)  11. 60 Days (tamna, značka L / txt R)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$oj  = get_template_directory_uri() . '/img/ortopedski-jastuk/';
$ojv = get_template_directory_uri() . '/img/ortopedski-jastuk/videos/';
$oj_img = function( $file, $alt ) use ( $oj ) {
  return '<img src="'.esc_url($oj.$file).'" alt="'.esc_attr($alt).'" loading="lazy" onerror="this.style.display=\'none\'">';
};
?>

<!-- ============ 1) Marquee (tamna traka, vrti se) ============ -->
<div class="oj-marquee" aria-hidden="true">
  <div class="oj-marquee-track">
    <?php $oj_ticker = array('RESPIRABILĂ ȘI LAVABILĂ','ALINIERE PERFECTĂ','SPUMĂ STABILITYCORE™','CERTIFICATĂ OEKO-TEX®','HIPOALERGENICĂ','HUSĂ SILKFLEX™');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $oj_ticker as $t ) { echo '<span class="oj-tick">'.esc_html($t).'</span><span class="oj-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) "Svjetski #1" + UGC karusel ============ -->
<section class="oj-sec">
  <div class="oj-wrap">
    <h2 class="oj-hero-h">Perna ortopedică de șezut <em>#1 în lume</em> pentru confort în fiecare zi</h2>
    <p class="oj-hero-sub">Mii de clienți mulțumiți au încredere în ea — de la <strong>șoferi aflați mereu la drum până la angajați de birou și familii acasă.</strong></p>
    <div class="oj-ugc-grid oj-ugc-5">
      <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
        <div class="oj-ugc-item" data-src="<?php echo esc_url( $ojv.'nasi-'.$i.'.mp4' ); ?>">
          <video class="oj-ugc-video" preload="metadata" playsinline muted></video>
          <span class="oj-ugc-play" aria-label="Redă"></span>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 3) Kraj boli u trtici — slika LIJEVO, tekst DESNO ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('07_lifestyle_HR.png','Înainte și după — durere de coccis la volan'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em class="oj-pink-i">Sfârșitul durerilor de coccis, sciaticii și durerilor de spate</em> cauzate de statul pe scaun</h2>
      <p>Majoritatea scaunelor îți distrug corpul în mai puțin de 30 de minute. <strong>Șoldurile se înclină, coloana se curbează, iar presiunea crește pe coccis și pe nervul sciatic.</strong> De aceea drumurile lungi, munca de birou sau cina la masă îți lasă spatele dureros, înțepenit sau amorțit.</p>
      <p>Perna ortopedică NORIKS <strong>ErgoSit</strong> este construită altfel. Decupajul pentru coccis elimină presiunea directă asupra osului coccigian, în timp ce designul conturat susține coloana și readuce postura sănătoasă. Spuma cu memorie de înaltă densitate distribuie greutatea uniform pe șolduri și coapse și menține circulația sângelui, ca picioarele să nu amorțească.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Poboljšajte držanje — tekst LIJEVO, slika DESNO ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Îmbunătățește-ți postura și stimulează circulația</h2>
      <p>Scaunele auto și cele de birou sunt făcute să reziste, nu pentru corpul tău. Forma lor face ca șoldurile să se afunde, coapsele să se preseze în scaun, iar circulația să încetinească — picioarele devin neliniștite, iar spatele doare mult timp după ce te ridici.</p>
      <p>NORIKS <strong>ErgoSit</strong> este gândită pentru ore lungi. Baza modelată menține șoldurile la același nivel, marginile conturate reduc presiunea pe coapse, iar înălțarea susține coloana kilometru după kilometru. Rezultatul? Postură dreaptă, circulație sănătoasă și ore întregi de stat pe scaun fără durere și înțepeneală.</p>
    </div>
    <div class="oj-media"><video class="oj-secvid" src="<?php echo esc_url( $ojv.'drzanje.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
  </div>
</section>

<!-- ============ 5) Prilagođava se gdje god sjedite — grid 4 LIJEVO, tekst DESNO ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('prilagodba.webp','NORIKS ErgoSit — se adaptează oriunde stai'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2">O ușurare care se adaptează oriunde stai.</h2>
      <p>NORIKS <strong>ErgoSit</strong> se adaptează oricărui loc în care stai. Baza stabilă, antiderapantă, o ține pe loc pe <strong>scaunele auto, scaunele de birou, scaunele de la masă și în scaunele cu rotile</strong> — astfel confortul merge cu tine toată ziua.</p>
      <p>Spuma cu memorie de înaltă densitate susține corpul fără să se turtească, iar husa lavabilă și detașabilă rămâne proaspătă, curată și gata de folosit în fiecare zi.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Trust traka (kao original press-bar, ali s pravim NORIKS oznakama) + SLIKE kupaca ============ -->
<section class="oj-sec oj-stills-sec">
  <div class="oj-trustbar" aria-hidden="true">
    <div class="oj-trustbar-track">
      <?php $oj_trust = array('PESTE 120.000 DE CLIENȚI','NOTĂ 4,8/5','OEKO-TEX®','RECOMANDATĂ DE MEDICI','GARANȚIE 60 DE ZILE','DESIGN ORTOPEDIC');
      for ( $r = 0; $r < 2; $r++ ) { foreach ( $oj_trust as $t ) { echo '<span class="oj-trust-item">'.esc_html($t).'</span><span class="oj-trust-dot">•</span>'; } } ?>
    </div>
  </div>
  <div class="oj-wrap">
    <div class="oj-stills">
      <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
        <img src="<?php echo esc_url( $oj.'galerija/li'.$i.'.webp' ); ?>" alt="NORIKS ErgoSit — clienți mulțumiți" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Osmišljen s ortopedskim znanjem — slika LIJEVO, tekst DESNO + CTA ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('erg-ro-04.webp','Recomandarea medicului — NORIKS ErgoSit'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2">Concepută cu expertiză ortopedică, creată pentru statul pe scaun de zi cu zi.</h2>
      <p>Cu ajutorul specialiștilor ortopezi și după luni de testare ergonomică, NORIKS <strong>ErgoSit</strong> a fost concepută să amelioreze cele mai frecvente dureri cauzate de statul îndelungat pe scaun — de la presiunea pe coccis până la disconfortul din zona lombară și din șolduri.</p>
      <a class="oj-cta" href="#bundle-selector">👉 COMANDĂ ACUM</a>
    </div>
  </div>
</section>

<!-- ============ 8) Učinkovito protiv čestih problema — akordeon, PUNA ŠIRINA ============ -->
<section class="oj-sec">
  <div class="oj-wrap">
    <h2 class="oj-h2 oj-center"><em class="oj-pink-i">Eficientă împotriva</em> problemelor frecvente la statul pe scaun</h2>
    <div class="oj-acc">
      <?php
      $oj_probs = array(
        array('Durere de coccis (osul coccigian)','Decupajul pentru coccis elimină presiunea de pe osul coccigian și distribuie greutatea pe toată perna, astfel încât nu mai simți acea durere ascuțită, arzătoare, după doar câteva minute de stat pe scaun.'),
        array('Sciatică și junghiuri de-a lungul piciorului','Menținând șoldurile la același nivel și coloana dreaptă, perna descarcă nervul sciatic — astfel poți sta pe scaun, conduce sau lucra fără durerea sfredelitoare care coboară de-a lungul picioarelor.'),
        array('Durere în zona lombară','Majoritatea scaunelor lasă un gol în spatele zonei lombare. NORIKS îl umple, reface curbura naturală a coloanei și reduce tensiunea musculară în timpul orelor lungi de stat pe scaun.'),
        array('Amorțeală și umflarea picioarelor','Suprafețele plate întrerup circulația. Marginile conturate ale pernei descarcă coapsele și mențin fluxul sanguin, astfel încât picioarele se simt ușoare și pline de energie, nu grele sau amorțite.'),
        array('Durere la articulația SI și la șolduri','Greutatea distribuită inegal suprasolicită șoldurile și articulațiile. NORIKS distribuie presiunea uniform, ajută la menținerea unei posturi echilibrate și reduce tensiunea din șolduri.'),
        array('Ușurare pentru zonele sensibile','Pentru zonele sensibile, perna îmbină un sprijin ferm cu un conturare delicată — descarcă presiunea, astfel încât poți sta confortabil chiar și atunci când corpul este sensibil.'),
      );
      foreach ( $oj_probs as $p ) : ?>
        <div class="oj-acc-item">
          <button class="oj-acc-head" type="button" aria-expanded="false">
            <span class="oj-acc-tick">✔</span><span class="oj-acc-title"><?php echo esc_html($p[0]); ?></span><span class="oj-acc-chev">⌄</span>
          </button>
          <div class="oj-acc-body"><p><?php echo esc_html($p[1]); ?></p></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 9) 20x jeftinije — slika LIJEVO, tekst DESNO + CTA ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('14_vsebina_HR.png','NORIKS ErgoSit — stai mai bine, trăiește mai bine'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em class="oj-pink-i">De 20× mai ieftină</em> decât soluțiile scumpe</h2>
      <p>Majoritatea oamenilor <strong>cheltuiesc mii</strong> încercând să scape de durerea de la statul pe scaun:</p>
      <ul class="oj-x">
        <li><span>✕</span> Scaun ergonomic: <strong>3.750–5.500 lei</strong></li>
        <li><span>✕</span> Vizite săptămânale la chiropractician: <strong>350–700 lei pe vizită</strong> (peste 15.000 lei pe an)</li>
        <li><span>✕</span> Fizioterapie: <strong>peste 950 lei pe ședință</strong>, adesea cu săptămâni de așteptare</li>
      </ul>
      <p><strong>Perna ortopedică NORIKS ErgoSit</strong></p>
      <p>O singură achiziție care ameliorează durerile de coccis, de spate și de șolduri, fără să îți golească portofelul.</p>
      <a class="oj-cta" href="#bundle-selector">Comandă acum</a>
    </div>
  </div>
</section>

<!-- ============ 10) Jastuk koji ne odustaje — tekst LIJEVO, tablica DESNO ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Perna care nu renunță</h2>
      <p class="oj-lead">Rămâne fermă, calmează durerea și oferă sprijin acolo unde altele cedează.</p>
    </div>
    <div class="oj-cmp-wrap">
      <span class="oj-cmp-others">Altele</span>
      <div class="oj-cmp-pill"><span>NORIKS</span></div>
      <div class="oj-cmp-card">
        <div class="oj-cmp-row"><div class="f">Descarcă coccisul și spatele</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Susține o postură dreaptă și sănătoasă</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Își păstrează forma în timp</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Bază antiderapantă</div><div class="us">✓</div><div class="no">✕</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 11) Isprobajte 60 dana — TAMNA, značka LIJEVO, tekst DESNO ============ -->
<section class="oj-sec oj-guar-sec">
  <div class="oj-wrap">
  <div class="oj-guarantee oj-row2">
    <div class="oj-guar-badge"><?php echo $oj_img('15_znacka_60_dana_HR.png','Garanție de 60 de zile de returnare a banilor'); ?></div>
    <div class="oj-guar-copy">
      <h2 class="oj-h2 oj-h2-light">Testeaz-o <em class="oj-pink-i">60 de zile</em>, fără nicio grijă</h2>
      <p>Nu e ușor să găsești perna potrivită — multe se turtesc sau pur și simplu nu aduc o ușurare reală. De aceea, fiecare NORIKS <strong>ErgoSit</strong> vine cu <strong>garanția noastră de confort de 60 de zile</strong>.</p>
      <p>Ia-o cu tine la birou, în mașină sau pentru orele lungi de acasă. Dacă nu simți mai puțină durere și mai mult confort în statul pe scaun de zi cu zi, echipa noastră se va asigura că totul este așa cum trebuie.</p>
      <p>Pentru că, atunci când vine vorba de sănătatea și confortul tău, credem că diferența trebuie <strong>simțită</strong>, nu doar sperată.</p>
    </div>
  </div>
  </div>
</section>

<style>
  .oj-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* ista širina kao gornji .product container */
  .oj-wrap-narrow { max-width: 820px; margin: 0 auto; padding: 0 18px; }
  .oj-sec { padding: 60px 0; }
  .oj-alt { background: #faf6f9; }
  .oj-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .oj-h2 { font-size: clamp(24px,3vw,36px); font-weight: 800; color: #121030; line-height: 1.15; margin: 0 0 16px; }
  .oj-h2-light { color: #fff; }
  .oj-pink-i { color: #e5157e; font-style: italic; }
  .oj-center { text-align: center; }
  .oj-copy p, .oj-lead { font-size: 15.5px; line-height: 1.6; color: #3a3450; margin: 0 0 14px; }
  .oj-lead { font-size: 16px; color: #55506b; }
  .oj-media img, .oj-grid2 img, .oj-media video.oj-secvid { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,21,51,.10); }

  /* 1) Marquee */
  .oj-marquee { background: #121030; overflow: hidden; white-space: nowrap; }
  .oj-marquee-track { display: inline-block; padding: 13px 0; animation: ojScroll 26s linear infinite; }
  .oj-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }
  @keyframes ojScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 2) hero */
  .oj-hero-h { text-align: center; font-size: clamp(26px,3.4vw,42px); font-weight: 800; color: #121030; line-height: 1.12; margin: 0 auto 12px; max-width: 900px; }
  .oj-hero-h em { color: #e5157e; font-style: italic; }
  .oj-hero-sub { text-align: center; font-size: 16px; color: #55506b; max-width: 660px; margin: 0 auto 28px; line-height: 1.55; }

  /* UGC */
  .oj-ugc-grid { display: grid; gap: 12px; }
  .oj-ugc-3 { grid-template-columns: repeat(3,1fr); max-width: 760px; margin: 0 auto; }
  .oj-ugc-5 { grid-template-columns: repeat(4,1fr); max-width: 1000px; margin: 0 auto; }
  .oj-ugc-item { position: relative; aspect-ratio: 9/16; border-radius: 12px; overflow: hidden; background: #121030; cursor: pointer; }
  .oj-ugc-item video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .oj-ugc-play { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 50px; height: 50px; border-radius: 50%; background: rgba(255,255,255,.92); }
  .oj-ugc-play::after { content: ""; position: absolute; top: 50%; left: 54%; transform: translate(-50%,-50%); border-style: solid; border-width: 10px 0 10px 16px; border-color: transparent transparent transparent #121030; }

  .oj-grid2 { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }

  /* CTA — tamni navy gumb kao original */
  .oj-cta { display: inline-block; background: #121030; color: #fff; font-weight: 800; font-size: 15px; letter-spacing: .04em; padding: 15px 34px; border-radius: 8px; text-decoration: none; margin-top: 8px; }
  .oj-cta:hover { background: #e5157e; color: #fff; }

  /* 8) akordeon */
  .oj-acc { max-width: 880px; margin: 18px auto 0; border-top: 1px solid #ecdfe8; }
  .oj-acc-item { border-bottom: 1px solid #ecdfe8; }
  .oj-acc-head { width: 100%; background: none; border: 0; display: flex; align-items: center; gap: 12px; padding: 16px 4px; cursor: pointer; font-size: 15.5px; font-weight: 700; color: #121030; text-align: left; }
  .oj-acc-tick { color: #22b573; font-weight: 800; }
  .oj-acc-title { flex: 1; }
  .oj-acc-chev { transition: transform .2s; color: #b39aab; }
  .oj-acc-item.open .oj-acc-chev { transform: rotate(180deg); }
  .oj-acc-body { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
  .oj-acc-item.open .oj-acc-body { max-height: 260px; }
  .oj-acc-body p { font-size: 14.5px; line-height: 1.6; color: #4a4560; margin: 0 0 16px; padding-left: 28px; }

  /* 9) X lista */
  .oj-x { list-style: none; margin: 0 0 14px; padding: 0; }
  .oj-x li { font-size: 15px; color: #3a3450; margin: 0 0 10px; }
  .oj-x li span { color: #d64545; font-weight: 800; margin-right: 8px; }

  /* 6) Trust traka — svijetla, "logotip" stil kao original press-bar (mijesana tipografija) */
  .oj-trustbar { background: #f7f0f2; overflow: hidden; white-space: nowrap; width: 100vw; margin-left: calc(50% - 50vw); }
  .oj-trustbar-track { display: inline-block; padding: 14px 0; animation: ojScroll 34s linear infinite; }
  .oj-trust-item { color: #9b96a6; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-trust-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }

  /* 6) UGC stillovi (slike kupaca) — full-bleed kao original */
  .oj-stills-sec { padding: 20px 0 40px; }
  .oj-stills-sec .oj-wrap { margin-top: 0; }
  .oj-stills-sec .oj-wrap { max-width: none; padding: 0; }
  .oj-stills { display: grid; grid-template-columns: repeat(6,1fr); gap: 6px; width: 100vw; margin-left: calc(50% - 50vw); }
  .oj-stills img { width: 100%; aspect-ratio: 9/16; object-fit: cover; display: block; border-radius: 0; }

  /* 10) usporedba — bijela kartica + plavajuća pink pilula (kao original) */
  .oj-cmp-wrap { position: relative; padding: 40px 0 30px; }
  .oj-cmp-others { position: absolute; top: 8px; right: 0; width: 88px; text-align: center; font-weight: 800; color: #121030; font-size: 14px; }
  .oj-cmp-pill { position: absolute; top: 0; bottom: 0; right: 96px; width: 100px; background: #e5157e; border-radius: 28px; box-shadow: 0 16px 36px rgba(229,21,126,.35); z-index: 1; display: flex; justify-content: center; align-items: flex-start; padding-top: 14px; }
  .oj-cmp-pill span { color: #fff; font-weight: 800; font-size: 10.5px; letter-spacing: .14em; }
  .oj-cmp-card { position: relative; background: #fff; border-radius: 16px; box-shadow: 0 12px 34px rgba(27,21,51,.10); border: 1px solid #f1edf3; }
  .oj-cmp-row { display: grid; grid-template-columns: 1fr 100px 88px; align-items: center; border-bottom: 1px solid #f2eff4; min-height: 62px; }
  .oj-cmp-row:last-child { border-bottom: 0; }
  .oj-cmp-row .f { padding: 14px 16px; text-align: center; font-weight: 800; color: #121030; font-size: 15px; line-height: 1.3; }
  .oj-cmp-row .us { position: relative; z-index: 2; text-align: center; color: #fff; font-weight: 800; font-size: 18px; }
  .oj-cmp-row .no { text-align: center; color: #e23a3a; font-weight: 800; font-size: 16px; }

  /* 11) jamstvo — zaobljena tamna kartica (kao original) */
  .oj-guar-sec { padding-top: 20px; }
  .oj-guarantee { background: #121030; border-radius: 18px; padding: 52px 48px; }
  .oj-guar-copy p { color: #cfc9e0; font-size: 15px; line-height: 1.6; margin: 0 0 12px; }
  .oj-guar-badge img { width: 280px; max-width: 100%; height: auto; margin: 0 auto; display: block; border-radius: 50%; }

  @media (max-width: 860px) {
    /* mobilni: prepolovljeni razmaci medju sekcijama */
    .oj-sec { padding: 30px 0; }
    .oj-marquee + section.oj-sec { padding-top: 20px; }
    .oj-hero-h { font-size: 2rem !important; }
    .oj-stills-sec { padding: 10px 0 20px; }
    .oj-guar-sec { padding-top: 10px; }
    .oj-row2 { grid-template-columns: 1fr; gap: 18px; }
    .oj-ugc-3 { grid-template-columns: repeat(3,1fr); }
    /* hero videi: horizontalni slider u jednom redu (kao original) */
    .oj-ugc-5 { display: flex; overflow-x: auto; gap: 10px; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding: 0 4px 6px; }
    .oj-ugc-5 .oj-ugc-item { flex: 0 0 46%; scroll-snap-align: center; }
    .oj-stills { grid-template-columns: repeat(3,1fr); }
    .oj-row2 .oj-media, .oj-row2 .oj-grid2 { order: -1; }
    .oj-guarantee { padding: 34px 22px; }
    .oj-guarantee .oj-guar-badge { order: -1; }
    .oj-cmp-others { width: 72px; }
    .oj-cmp-pill { right: 78px; width: 84px; }
    .oj-cmp-row { grid-template-columns: 1fr 84px 72px; }
  }

  /* No-attrs: sakrij "Tablica veličina" ako se negdje pojavi */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap, #open-size-chart, #open-size-chartCustom { display: none !important; }
</style>

<script>
(function(){
  /* Pink active bundle-option (preživljava LiteSpeed UCSS). */
  function paintOj(){
    var sel = document.getElementById('bundle-selector'); if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); c.style.removeProperty('border-width'); });
    var checked = sel.querySelector('input[name="bundle_option"]:checked');
    var card = checked ? checked.closest('.bundle-option') : (sel.querySelector('.bundle-option.active') || sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#ED5E95','important'); card.style.setProperty('background','rgba(237,94,149,0.1)','important'); card.style.setProperty('border-width','2px','important'); }
  }
  function bindOj(){ var sel=document.getElementById('bundle-selector'); if(!sel) return; paintOj(); sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOj); }); }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOj); } else { bindOj(); }

  /* Akordeon */
  document.querySelectorAll('.oj-acc-head').forEach(function(btn){
    btn.addEventListener('click', function(){ var it=btn.closest('.oj-acc-item'); var open=it.classList.toggle('open'); btn.setAttribute('aria-expanded', open?'true':'false'); });
  });

  /* UGC video: prikaži prvi kadar, klik = pusti sa zvukom */
  document.querySelectorAll('.oj-ugc-item').forEach(function(item){
    var v = item.querySelector('.oj-ugc-video'); if(!v) return; v.src = item.dataset.src;
    item.addEventListener('click', function(){
      if (item.dataset.loaded) return; item.dataset.loaded='1';
      var play=item.querySelector('.oj-ugc-play'); if(play) play.remove();
      v.muted=false; v.controls=true; v.playsInline=true; var p=v.play(); if(p&&p.catch) p.catch(function(){});
    });
  });

  /* Glatki scroll za CTA */
  document.querySelectorAll('a.oj-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
