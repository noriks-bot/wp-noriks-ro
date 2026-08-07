<?php
/**
 * product-bottom: NORIKS KidsNest — perna pentru copii pentru respiratie corecta (orto-kidsnest).
 * Copie a sectiunilor tryneedo.com/products/kids-pillow, traducere RO (afirmatii med. atenuate).
 * Ordine:
 *   1. Trust marquee (albastru)  2. "Incepeti chiar in seara asta..." (imagine S / text D, titlu albastru)
 *   3. "Sustinerea corecta..." (text S / imagine D)  4. Statistici 94/60/98 (albastru deschis, 3 carduri cu cercuri)
 *   5. "Perna #1 pentru copii 2026" + stele + banda foto derulanta
 * Albastru: #2b3fb0, deschis: #eef1fb, navy: #1b2450. Imagini: img/kidsnest/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kn = get_template_directory_uri() . '/img/kidsnest/';
?>

<!-- ============ 1) Trust marquee (banda albastra, deruleaza) ============ -->
<div class="kn-marquee" aria-hidden="true">
  <div class="kn-marquee-track">
    <?php $kn_ticker = array('RECOMANDAT DE PEDIATRI','SPUMĂ CU MEMORIE OEKO-TEX®','STRUCTURĂ CU 3 ZONE','90 DE NOPȚI DE PROBĂ','HIPOALERGENIC','HUSĂ LAVABILĂ');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $kn_ticker as $t ) { echo '<span class="kn-tick">'.esc_html($t).'</span><span class="kn-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) Incepeti chiar in seara asta — imagine STANGA, text DREAPTA ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'01-poravnan-ro.webp' ); ?>" alt="Perfect aliniat — capul, gâtul și coloana vertebrală în timpul somnului" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <p class="kn-eyebrow">Dezvoltat împreună cu stomatologi pentru căile respiratorii ale copiilor</p>
      <h2 class="kn-h2 kn-h2-blue">Începeți chiar în seara asta să corectați daunele ascunse.</h2>
      <p>Stomatologii pediatri specializați în căile respiratorii avertizează părinții asupra aceleiași probleme tăcute: copiii care sforăie și respiră pe gură nu „dorm doar mai prost”. Maxilarul, cerul gurii și structura feței lor se pot dezvolta încet în direcția greșită.</p>
      <p><strong>Iar fereastra pentru corectare nu rămâne deschisă pentru totdeauna.</strong></p>
      <p>Perna NORIKS <strong>KidsNest</strong> este concepută să <strong>susțină capul, maxilarul și căile respiratorii în poziția corectă în timpul somnului</strong> — încurajând respirația pe nas și o dezvoltare mai sănătoasă a feței cât timp încă mai contează.</p>
      <p><strong>Aceasta nu este doar o pernă.<br>Este sprijinul nocturn pentru căile respiratorii în anii care modelează fața copilului dumneavoastră.</strong></p>
    </div>
  </div>
</section>

<!-- ============ 3) Sustinerea corecta — text STANGA, imagine DREAPTA ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Susținerea corectă a capului și gâtului este esențială pentru un somn sănătos.</h2>
      <p>Perna ergonomică pentru copii menține <strong>capul și gâtul în aliniere naturală și ajută la prevenirea înclinării capului</strong> pe timpul nopții. Astfel coloana vertebrală rămâne corect aliniată — chiar dacă copilul se foiește mult în somn.</p>
      <p><strong>Rezultatul: un somn mai liniștit și o recuperare mai bună.</strong></p>
    </div>
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'02-san.jpg' ); ?>" alt="Copil dormind liniștit pe perna KidsNest" loading="lazy" onerror="this.style.display='none'"></div>
  </div>
</section>

<!-- ============ 4) Statistici — albastru deschis, 3 carduri cu cercuri ============ -->
<section class="kn-sec kn-stats-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Creat să protejeze fața în dezvoltare a copilului dumneavoastră</h2>
    <p class="kn-sub kn-center"><strong>Somnul cu gura deschisă în copilărie poate remodela o față în creștere. KidsNest menține capul copilului aliniat pentru ca acesta să respire pe nas.</strong></p>
    <div class="kn-stats">
      <?php
      $kn_stats = array(
        array('94','165.3','dintre părinți observă că micuțul doarme <strong>cu gura închisă</strong> în decurs de 2 săptămâni'),
        array('60','105.5','din dezvoltarea feței <strong>copilului</strong> dumneavoastră se conturează până la vârsta de 6 ani — această fereastră nu se mai deschide'),
        array('98','172.3','dintre părinți ar recomanda <strong>KidsNest</strong> pentru a proteja zâmbetul unui alt copil'),
      );
      foreach ( $kn_stats as $st ) : ?>
      <div class="kn-stat-card">
        <svg class="kn-ring" viewBox="0 0 64 64" aria-hidden="true">
          <circle cx="32" cy="32" r="28" fill="none" stroke="#dfe5f5" stroke-width="5"/>
          <circle cx="32" cy="32" r="28" fill="none" stroke="#2b3fb0" stroke-width="5" stroke-linecap="round" stroke-dasharray="<?php echo esc_attr($st[1]); ?> 175.9" transform="rotate(-90 32 32)"/>
          <text x="32" y="38" text-anchor="middle" class="kn-ring-t"><?php echo esc_html($st[0]); ?>%</text>
        </svg>
        <p><?php echo wp_kses_post($st[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) Perna #1 pentru copii + stele + banda foto derulanta ============ -->
<section class="kn-sec kn-rated-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Desemnată perna de somn #1 pentru copii în 2026</h2>
    <p class="kn-sub kn-center">Susțineți-le somnul — susțineți anii în care cresc.</p>
    <p class="kn-stars kn-center"><span aria-hidden="true">★★★★★</span> Notă 4,8/5 pe baza a peste 140 de recenzii</p>
  </div>
  <div class="kn-strip">
    <div class="kn-strip-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 5; $i++ ) : ?>
        <img src="<?php echo esc_url( $kn.'traka/t'.$i.'.webp' ); ?>" alt="NORIKS KidsNest — copii și părinți" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Calitatea materialelor — imagine STANGA, text DREAPTA ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'03-detalj.webp' ); ?>" alt="KidsNest — structura cu 3 zone și țesătura respirabilă în prim-plan" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Calitate care se simte — noapte de noapte.</h2>
      <p>Tricotul dens și respirabil și suprafața atent modelată nu sunt acolo de dragul aspectului — <strong>fiecare zonă are rolul ei</strong>. Mijlocul primește delicat capul, marginile susțin gâtul, iar structura își păstrează forma chiar și după luni de utilizare zilnică.</p>
      <p>Husa se scoate și se spală la mașină, spuma este <strong>hipoalergenică și rezistentă la acarieni</strong> — astfel perna rămâne proaspătă, curată și pregătită pentru fiecare noapte. Fără adâncituri, fără aplatizare, fără compromisuri.</p>
      <p><strong>O pernă care și după un an arată — și susține — ca în prima zi.</strong></p>
    </div>
  </div>
</section>

<style>
  .kn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* acelasi container ca .product de mai sus */
  .kn-sec { padding: 60px 0; }
  .kn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .kn-h2 { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1b2450; line-height: 1.14; margin: 0 0 16px; }
  .kn-h2-blue { color: #2b3fb0; }
  .kn-center { text-align: center; }
  .kn-eyebrow { font-size: 13px; font-weight: 800; letter-spacing: .02em; color: #1b2450; margin: 0 0 6px; }
  .kn-copy p { font-size: 15.5px; line-height: 1.65; color: #33394f; margin: 0 0 14px; }
  .kn-sub { font-size: 16px; line-height: 1.55; color: #33394f; max-width: 680px; margin: 0 auto 10px; }
  .kn-media img { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,36,80,.10); }

  /* 1) marquee */
  .kn-marquee { background: #2b3fb0; overflow: hidden; white-space: nowrap; margin-top: 26px; }
  @media (min-width: 861px) { .kn-marquee { margin-top: -20px; } } /* desktop: spatiu injumatatit fata de continutul de sus */
  .kn-marquee + .kn-sec { padding-top: 26px; }
  .kn-marquee-track { display: inline-block; padding: 13px 0; animation: knScroll 28s linear infinite; }
  .kn-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .kn-dot { color: #aebafe; margin: 0 22px; font-weight: 800; }
  @keyframes knScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 4) statistici */
  .kn-stats-sec { background: #eef1fb; }
  .kn-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; max-width: 1180px; margin: 30px auto 0; }
  .kn-stat-card { background: #fff; border-radius: 16px; padding: 34px 26px; text-align: center; box-shadow: 0 10px 28px rgba(27,36,80,.07); }
  .kn-ring { width: 150px; height: 150px; margin: 0 auto 18px; display: block; }
  .kn-ring-t { font-size: 15px; font-weight: 800; fill: #2b3fb0; }
  .kn-stat-card p { font-size: 15px; line-height: 1.5; color: #33394f; margin: 0; }
  .kn-stat-card p strong { color: #2b3fb0; }

  /* 5) rated + strip */
  .kn-rated-sec { background: #eef1fb; padding-bottom: 0; }
  .kn-stars { font-size: 16px; color: #1b2450; font-weight: 600; margin: 6px 0 26px; }
  .kn-stars span { color: #f5a623; letter-spacing: 2px; margin-right: 8px; }
  .kn-strip { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); padding-bottom: 34px; }
  .kn-strip-track { display: flex; gap: 8px; width: max-content; animation: knScroll 60s linear infinite; }
  .kn-strip:hover .kn-strip-track { animation-play-state: paused; }
  .kn-strip-track img { width: 350px; aspect-ratio: 1/1; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }

  @media (max-width: 860px) {
    .kn-sec { padding: 30px 0; }
    .kn-row2 { grid-template-columns: 1fr; gap: 18px; }
    .kn-row2 .kn-media { order: -1; }
    .kn-h2 { font-size: 2rem; }
    .kn-stats { grid-template-columns: 1fr; gap: 14px; margin-top: 18px; }
    .kn-ring { width: 120px; height: 120px; }
    .kn-strip-track img { width: 240px; }
  }
</style>
