<?php
/**
 * product-bottom: NORIKS LEAK BOXERS (orto-leak-boxers)
 * Lenjerie masculina pentru incontinenta — boxeri ultra-absorbanti.
 * Sectiuni HTML reale (text + imagine stanga/dreapta, video, statistici, testimoniale).
 * FAQ si recenziile le rendereaza sectiunea comuna reviews.php (nu aici).
 * Imagini: img/leakboxers/ , video: img/leakboxers-videos/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$lb  = get_template_directory_uri() . '/img/leakboxers/';
$lbv = get_template_directory_uri() . '/img/leakboxers-videos/';
?>

<!-- ============ 1) Motivul real (text + imagine) ============ -->
<section class="lbx-sec lbx-reason">
  <div class="lbx-wrap lbx-row2">
    <div class="lbx-copy">
      <p class="lbx-eyebrow">Recuperați-vă demnitatea</p>
      <h2 class="lbx-h2">Protecțiile de unică folosință sunt <em>umilitoare</em></h2>
      <p>Absorbante care se aud, scutece care se văd pe sub haine și teama constantă de scurgeri. Meritați o soluție care arată și se simte ca lenjeria obișnuită.</p>
      <ul class="lbx-check">
        <li><strong>250 kg</strong> de deșeuri pe an per utilizator</li>
        <li>Peste <strong>4.000 lei</strong> aruncați în fiecare an</li>
        <li>Produsele de unică folosință sunt voluminoase și pline de chimicale</li>
      </ul>
      <a class="lbx-cta lbx-cta-solid" href="#bundle-selector">Vreau încrederea înapoi →</a>
    </div>
    <div class="lbx-media"><img src="<?php echo esc_url( $lb.'boxer-navy.jpg' ); ?>" alt="Boxeri absorbanți NORIKS — bleumarin" loading="lazy"></div>
  </div>
</section>

<!-- ============ 1b) Brand video (pe toata latimea) ============ -->
<section class="lbx-sec lbx-alt">
  <div class="lbx-wrap">
    <h2 class="lbx-h2 lbx-center">Demnitatea pe care o meritați</h2>
    <p class="lbx-sub lbx-center">Vedeți de ce peste 123.000 de bărbați nu s-au mai întors niciodată la protecțiile de unică folosință.</p>
    <div class="lbx-brandvideo">
      <video src="<?php echo esc_url( $lbv.'brand.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video>
    </div>
  </div>
</section>

<!-- ============ 2) PureDry™ 7 straturi (imagine + text) ============ -->
<section class="lbx-sec">
  <div class="lbx-wrap lbx-row2 lbx-rev">
    <div class="lbx-media"><img src="<?php echo esc_url( $lb.'features.png' ); ?>" alt="NORIKS PureDry — tehnologie de absorbție în 7 straturi" loading="lazy"></div>
    <div class="lbx-copy">
      <p class="lbx-eyebrow">Tehnologie</p>
      <h2 class="lbx-h2">NORIKS <em>PureDry™</em> — 7 straturi de protecție</h2>
      <p>După mai bine de 2 ani de dezvoltare am creat un material care absoarbe instantaneu și blochează umezeala adânc în interiorul nucleului — fără volum inutil și fără senzație de umed pe piele.</p>
      <ul class="lbx-check">
        <li>Tehnologie de absorbție în 7 straturi — până la <strong>300 ml</strong></li>
        <li>Fibră de bambus antibacteriană</li>
        <li>Protecție împotriva scurgerilor pe lângă picioare</li>
        <li>Control al mirosului și strat exterior hidrofob</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 3) Video demo — zero scurgeri ============ -->
<section class="lbx-sec lbx-video lbx-alt">
  <div class="lbx-wrap lbx-row2">
    <div class="lbx-copy">
      <p class="lbx-eyebrow">Diferența NORIKS</p>
      <h2 class="lbx-h2">Priviți cum <em>dispare</em>. Zero scurgeri.</h2>
      <p>Stratul exterior este hidrofob, iar nucleul absorbant reține lichidul înăuntru. Rezultatul: rămâneți uscat — fără pete și fără jenă, la muncă, pe drum și în timpul somnului.</p>
      <div class="lbx-chips"><span>Fără scurgeri</span><span>Fără volum inutil</span><span>Fără miros</span></div>
    </div>
    <div class="lbx-media">
      <video src="<?php echo esc_url( $lbv.'waterpour.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video>
    </div>
  </div>
</section>

<!-- ============ 4) 3 carduri — absorb ============ -->
<section class="lbx-sec">
  <div class="lbx-wrap">
    <p class="lbx-eyebrow lbx-center">O să-i îndrăgiți</p>
    <h2 class="lbx-h2 lbx-center">Boxeri lavabili <em>pentru incontinență</em></h2>
    <div class="lbx-cards">
      <figure class="lbx-card"><img src="<?php echo esc_url( $lb.'boxer-black.jpg' ); ?>" alt="Protecție elegantă" loading="lazy"><figcaption>Protecție elegantă</figcaption></figure>
      <figure class="lbx-card"><img src="<?php echo esc_url( $lb.'absorption.jpg' ); ?>" alt="Absorbție de neegalat" loading="lazy"><figcaption>Absorbție de neegalat</figcaption></figure>
      <figure class="lbx-card"><img src="<?php echo esc_url( $lb.'hydrofuge.jpg' ); ?>" alt="Tehnologie hidrofobă" loading="lazy"><figcaption>Tehnologie hidrofobă</figcaption></figure>
    </div>
  </div>
</section>

<!-- ============ 6) Statistici (dark) ============ -->
<section class="lbx-sec lbx-stats">
  <div class="lbx-wrap">
    <p class="lbx-eyebrow lbx-center lbx-eyebrow-d">Dovedit cu date</p>
    <h2 class="lbx-h2 lbx-center lbx-h2-d">Încă nu sunteți <em>convins?</em></h2>
    <div class="lbx-rings">
      <?php
      $lbx_stats = array(
        array( 'p'=>'98', 'dash'=>'172.4', 't'=>'dintre bărbați spun că <strong>nu se vor mai întoarce niciodată</strong> la absorbante sau scutece' ),
        array( 'p'=>'95', 'dash'=>'167.1', 't'=>'raportează <strong>zero anxietate</strong> legată de scurgeri în timpul zilei' ),
        array( 'p'=>'97', 'dash'=>'170.6', 't'=>'simt o <strong>încredere în sine mult mai mare</strong>' ),
      );
      foreach ( $lbx_stats as $s ) : ?>
        <div class="lbx-ring-item">
          <svg class="lbx-ring" viewBox="0 0 64 64" aria-hidden="true">
            <circle cx="32" cy="32" r="28" fill="none" stroke="#3a4a63" stroke-width="4"/>
            <circle cx="32" cy="32" r="28" fill="none" stroke="#f4e07a" stroke-width="4" stroke-linecap="round" stroke-dasharray="<?php echo esc_attr($s['dash']); ?> 175.9" transform="rotate(-90 32 32)"/>
            <text x="32" y="39" text-anchor="middle" class="lbx-ring-t"><?php echo esc_html($s['p']); ?>%</text>
          </svg>
          <p><?php echo wp_kses_post($s['t']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Tabel comparativ ============ -->
<section class="lbx-sec">
  <div class="lbx-wrap-narrow">
    <h2 class="lbx-h2 lbx-center">Alegerea mai inteligentă față de <em>absorbantele de unică folosință</em></h2>
    <div class="lbx-cmp-scroll">
      <table class="lbx-cmp-table">
        <thead><tr><th></th><th class="lbx-us">NORIKS</th><th>Absorbante de unică folosință</th><th>Boxeri obișnuiți</th></tr></thead>
        <tbody>
          <tr><td>Absoarbe până la 300 ml</td><td class="us ok">✓</td><td class="mid">parțial</td><td class="no">✕</td></tr>
          <tr><td>Discret sub haine</td><td class="us ok">✓</td><td class="no">✕</td><td class="ok">✓</td></tr>
          <tr><td>Lavabil și reutilizabil</td><td class="us ok">✓</td><td class="no">✕</td><td class="ok">✓</td></tr>
          <tr><td>Protecție împotriva mirosului</td><td class="us ok">✓</td><td class="mid">chimicale</td><td class="no">✕</td></tr>
          <tr><td>Cost anual</td><td class="us ok">✓ scăzut</td><td class="mid">4.000 lei+</td><td class="ok">scăzut</td></tr>
          <tr><td>Ecologic</td><td class="us ok">✓</td><td class="no">✕ 250 kg de deșeuri</td><td class="ok">✓</td></tr>
        </tbody>
      </table>
    </div>
    <div class="lbx-cta-wrap"><a class="lbx-cta lbx-cta-solid" href="#bundle-selector">Alege-ți pachetul</a></div>
  </div>
</section>

<!-- ============ 8) Testimoniale video ============ -->
<section class="lbx-sec lbx-alt">
  <div class="lbx-wrap">
    <p class="lbx-eyebrow lbx-center">Experiențele clienților</p>
    <h2 class="lbx-h2 lbx-center">Lenjeria în care au deja încredere <em>peste 123.000 de bărbați</em></h2>
    <div class="lbx-tst-grid">
      <video src="<?php echo esc_url( $lbv.'tst1.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video>
      <video src="<?php echo esc_url( $lbv.'tst2.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video>
      <video src="<?php echo esc_url( $lbv.'tst3.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video>
    </div>
    <div class="lbx-cta-wrap"><a class="lbx-cta lbx-cta-solid" href="#bundle-selector">Comandă discret →</a></div>
  </div>
</section>

<style>
  .lbx-sec{padding:48px 0;}
  .lbx-alt{background:#f5f9fa;}
  .lbx-wrap{max-width:1120px;margin:0 auto;padding:0 18px;}
  .lbx-wrap-narrow{max-width:860px;margin:0 auto;padding:0 18px;}
  .lbx-row2{display:grid;grid-template-columns:1fr 1fr;gap:44px;align-items:center;}
  .lbx-eyebrow{font-family:inherit;font-style:italic;font-size:19px;color:#1f8a9c;margin:0 0 4px;}
  .lbx-h2{font-size:clamp(23px,3.2vw,34px);font-weight:800;color:#12233b;line-height:1.15;margin:0 0 14px;}
  .lbx-h2 em{color:#1f8a9c;font-style:normal;}
  .lbx-center{text-align:center;}
  .lbx-sub{color:#5b6b7b;font-size:16px;line-height:1.6;max-width:640px;margin:0 auto 24px;}
  .lbx-brandvideo{border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(18,35,59,.12);}
  .lbx-brandvideo video{width:100%;height:auto;display:block;background:#000;}
  .lbx-copy p{font-size:16px;line-height:1.6;color:#33465a;margin:0 0 14px;}
  .lbx-media img,.lbx-media video{width:100%;height:auto;display:block;border-radius:16px;}
  .lbx-media video{background:#000;}
  .lbx-check{list-style:none;margin:0 0 22px;padding:0;}
  .lbx-check li{position:relative;padding:0 0 11px 30px;font-size:15.5px;color:#12233b;line-height:1.5;}
  .lbx-check li:before{content:"✓";position:absolute;left:0;top:0;width:20px;height:20px;background:#1f8a9c;color:#fff;border-radius:50%;font-size:12px;text-align:center;line-height:20px;}
  .lbx-cta{display:inline-block;background:#1f8a9c;color:#fff;font-weight:700;font-size:16px;padding:14px 30px;border-radius:10px;text-decoration:none;}
  .lbx-cta-solid{background:#12233b;}
  .lbx-cta-wrap{text-align:center;margin-top:28px;}
  .lbx-chips{display:flex;flex-wrap:wrap;gap:10px;}
  .lbx-chips span{background:#e8f2f4;border:1px solid #cfe4e8;border-radius:999px;padding:8px 16px;font-size:14px;color:#1f5b66;font-style:italic;}

  /* 4) cards */
  .lbx-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:24px;}
  .lbx-card{margin:0;position:relative;border-radius:16px;overflow:hidden;}
  .lbx-card img{width:100%;height:340px;object-fit:cover;display:block;}
  .lbx-card figcaption{position:absolute;left:0;right:0;bottom:0;padding:18px 16px;font-weight:800;font-size:18px;color:#fff;background:linear-gradient(transparent,rgba(0,0,0,.72));}

  /* 5) colors */
  .lbx-colors-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:22px;}
  .lbx-colors-grid figure{margin:0;}
  .lbx-colors-grid img{width:100%;height:auto;border-radius:14px;display:block;}
  .lbx-colors-grid figcaption{text-align:center;margin-top:10px;font-weight:700;color:#12233b;font-size:15px;}

  /* 6) stats dark */
  .lbx-stats{background:#12233b;}
  .lbx-eyebrow-d{color:#f4e07a;font-style:normal;font-family:inherit;text-transform:uppercase;letter-spacing:.1em;font-size:12px;font-weight:700;}
  .lbx-h2-d{color:#fff;} .lbx-h2-d em{color:#f4e07a;}
  .lbx-rings{display:grid;grid-template-columns:repeat(3,1fr);gap:26px;margin-top:30px;}
  .lbx-ring-item{text-align:center;}
  .lbx-ring{width:120px;height:120px;filter:drop-shadow(0 0 6px rgba(244,224,122,.5));}
  .lbx-ring-t{font-size:17px;font-weight:800;fill:#fff;}
  .lbx-ring-item p{color:#c4d4e0;font-size:14.5px;line-height:1.5;margin:10px auto 0;max-width:240px;}
  .lbx-ring-item strong{color:#fff;}

  /* 7) table */
  .lbx-cmp-scroll{overflow-x:auto;border-radius:16px;box-shadow:0 10px 30px rgba(18,35,59,.12);margin-top:8px;}
  .lbx-cmp-table{width:100%;border-collapse:collapse;min-width:560px;background:#fff;}
  .lbx-cmp-table th,.lbx-cmp-table td{padding:13px 12px;text-align:center;font-size:14px;border-bottom:1px solid #eee;}
  .lbx-cmp-table thead th{font-weight:800;color:#12233b;font-size:13px;}
  .lbx-cmp-table thead th.lbx-us{background:#12233b;color:#fff;border-radius:10px 10px 0 0;}
  .lbx-cmp-table tbody td:first-child{text-align:left;font-weight:600;color:#12233b;}
  .lbx-cmp-table td.us{background:#eef6f7;font-weight:700;}
  .lbx-cmp-table td.ok{color:#1a9e5f;font-size:17px;font-weight:700;}
  .lbx-cmp-table td.no{color:#d64545;font-size:13px;}
  .lbx-cmp-table td.mid{color:#8a94a0;font-size:12.5px;}

  /* 8) testimonials */
  .lbx-tst-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:24px;}
  .lbx-tst-grid video{width:100%;height:auto;border-radius:14px;display:block;background:#000;aspect-ratio:9/16;object-fit:cover;}

  @media(max-width:860px){
    .lbx-row2{grid-template-columns:1fr;gap:22px;}
    .lbx-rev .lbx-media{order:-1;}
    .lbx-cards,.lbx-colors-grid,.lbx-rings,.lbx-tst-grid{grid-template-columns:1fr;}
    .lbx-card img{height:300px;}
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.lbx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click',function(e){e.preventDefault();var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button');if(t)t.scrollIntoView({behavior:'smooth',block:'center'});});
  });
})();
</script>
