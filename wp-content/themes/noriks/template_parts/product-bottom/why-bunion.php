<?php
/**
 * product-bottom: CORECTOR HALUX (bunion / halux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * Mediji so v temi (git), relativno preko get_template_directory_uri():
 *   img/bunion-videos/section-1.mp4, funkcionira.mp4, step-1..3.mp4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
$bun_video_1 = $bun_vid_dir . 'section-1.mp4'; // 1) One foot away
$bun_video_2 = $bun_vid_dir . 'funkcionira.mp4'; // 2) Kako deluje

$bun_img_features = get_template_directory_uri() . '/img/bunion/why.png';

// Rezultate reale — procente
$bun_results = array(
    array( 'pct' => 91, 'text' => 'dintre utilizatori au raportat o reducere a durerilor cauzate de halux încă de la a 2-a ședință' ),
    array( 'pct' => 90, 'text' => 'dintre utilizatori au eliminat complet durerile cauzate de halux după doar 14 zile de utilizare constantă (30 min/zi)' ),
    array( 'pct' => 88, 'text' => 'dintre utilizatori au observat îmbunătățiri vizibile ale alinierii degetelor după doar 30 de zile de utilizare constantă (30 min/zi)' ),
);

// De ce să ne alegi — comparație (isti stil kot knc-table na nogavicah z zadrgo)
$bun_cmp = array(
    'Garanție de returnare a banilor în 90 de zile',
    'Ameliorează disconfortul',
    'Previne creșterea haluxului',
    'Îmbunătățește în timp starea haluxului',
    'Design flexibil — poți merge cu el',
    'Rezistent și de lungă durată',
);

// Cum se folosește — 3 pași (video + opis)
$bun_steps = array(
    array( 'video' => $bun_vid_dir . 'step-1.mp4', 'caption' => 'Fixează corectorul NORIKS pe degetul mare și pe picior' ),
    array( 'video' => $bun_vid_dir . 'step-2.mp4', 'caption' => 'Reglează intensitatea întinderii după preferință' ),
    array( 'video' => $bun_vid_dir . 'step-3.mp4', 'caption' => 'Relaxează-te și lasă corectorul NORIKS să-și facă treaba' ),
);
?>

<!-- ============ 1) Ești la un pas… ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_1 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Ești la un pas de a scăpa de <span class="bun-hl">disconfortul cauzat de halux</span>, de degetele umflate și de durerile de picioare…</h2>
      <p>Dacă citești asta, este foarte probabil să suferi de un <strong class="bun-red">disconfort persistent cauzat de halux</strong>.</p>
      <p>Rezultatul? Durerea și disconfortul îți afectează activitățile zilnice.</p>
      <p>Dacă nu se tratează, situația se poate agrava. Degetele se suprapun, pot apărea degete în ciocan și excrescențe osoase.</p>
      <p>Haluxul este o <strong class="bun-red">problemă progresivă</strong> și nu va dispărea de la sine.</p>
      <p>În timp poate duce la probleme mai grave, precum <u>operații invazive, probleme la șolduri, genunchi și zona lombară, ba chiar imobilitate</u>.</p>
      <p>Cu ajutorul unei terapii avansate de aliniere, dovedită clinic, și al unui mecanism articulat patentat, <strong>corectorul de halux NORIKS</strong> ameliorează eficient disconfortul din zona afectată a piciorului și îți restabilește sănătatea piciorului cu doar 30 de minute de utilizare pe zi.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>91 % dintre utilizatori au raportat o <strong>reducere a durerilor de picioare</strong> încă din prima săptămână</em></p>
    </div>
  </div>
</section>

<!-- ============ 2) Kako deluje? ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row bun-reverse">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_2 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Cum funcționează?</h2>
      <p><strong>Corectorul de halux NORIKS</strong> folosește o terapie avansată de aliniere. Este conceput să <strong class="bun-red">susțină realinierea</strong> degetului mare și să reducă treptat inflamația cu ajutorul unui mecanism articulat patentat și puternic.</p>
      <p>Ajută la relaxarea tensiunii musculare, readucând ușor degetul mare în poziția sa naturală, ceea ce duce în timp la o aliniere naturală și nedureroasă a articulației degetului.</p>
      <p>Astfel se eliberează tensiunea acumulată de-a lungul anilor, proeminența se corectează și se micșorează, durerea se ameliorează, iar creșterea ulterioară este prevenită — ca să te ridici din nou pe picioare, drept și încrezător.</p>
      <p>Unii utilizatori ar putea avea nevoie de o ședință sau două pentru a se obișnui, deoarece <strong class="bun-red">senzația poate fi mai intensă</strong> în comparație cu alte metode.</p>
      <p>Este un mod natural și neinvaziv de a reface poziția naturală a degetului și a piciorului și de a repara daunele cauzate de încălțămintea nepotrivită sau de genetică.</p>
      <p>Fie că este vorba de un picior mic de copil sau de un picior mare de adult, <u>corectorul este conceput să se potrivească confortabil tuturor mărimilor de picior</u>.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>87 % dintre utilizatori au raportat <strong>îmbunătățiri vizibile</strong> încă din prima lună</em></p>
    </div>
  </div>
</section>

<!-- ============ 3) Cum se folosește (sivo, 3 koraki) ============ -->
<section class="bun-why bun-howto">
  <div class="bun-wrap">
    <h2 class="bun-howto-title">Cum se folosește</h2>
    <div class="bun-howto-intro">
      <p>Recomandăm să începi cu 30 de minute pe zi și să crești treptat până la o ședință de 1 până la 3 ore.</p>
      <p>Când te simți confortabil, îl poți purta chiar și în timpul somnului, în fiecare noapte.</p>
      <p>Cel mai bine funcționează în timpul repausului — când stai întins pe canapea, te uiți la TV, citești sau dormi.</p>
      <p>Dar, spre deosebire de alte produse de pe piață, te poți și mișca fără ca corectorul NORIKS să te limiteze, datorită designului său flexibil.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) 8 motive pentru care îl vei îndrăgi ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">8 motive pentru care îl vei îndrăgi</h2>
      <ul class="bun-reasons">
        <li><strong>Ameliorarea disconfortului</strong> la mers, la sport, în picioare și în somn</li>
        <li><strong>Previne</strong> creșterea ulterioară a haluxului</li>
        <li><strong>Opțiune non-chirurgicală</strong> pentru ameliorare</li>
        <li>Aliniere fermă a articulației, care <strong>îți îmbunătățește cu adevărat starea</strong></li>
        <li>Intensitate <strong>reglabilă</strong> a întinderii</li>
        <li>Conceput și recomandat de <strong>specialiști medicali</strong></li>
        <li><strong>Simplu de folosit</strong> și portabil</li>
        <li><strong>Garanție de returnare a banilor în 90 de zile</strong> („rezultate sau banii înapoi"), pentru că suntem atât de siguri de produsul nostru și știm că te va ajuta</li>
      </ul>
    </div>
    <div class="bun-col bun-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img_features ); ?>" alt="De ce corectorul de halux NORIKS este diferit" />
    </div>
  </div>
</section>

<!-- ============ 5) Rezultate reale, oameni reali ============ -->
<section class="bun-why bun-results-sec">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Rezultate <span class="bun-hl">reale</span>, oameni reali</h2>
      <p>Am realizat un test cu consumatori în care am trimis corectorul de halux NORIKS către peste <strong>37 de cabinete de podiatrie</strong>. În total, l-au testat <strong>432 de pacienți</strong> cu halux. Iată rezultatele.</p>
    </div>
    <div class="bun-col">
      <div class="bun-results">
        <?php foreach ( $bun_results as $bun_r ) : $bun_dash = round( $bun_r['pct'] * 1.6336, 1 ); ?>
          <div class="bun-result">
            <svg class="bun-ring" viewBox="0 0 60 60" aria-hidden="true">
              <circle cx="30" cy="30" r="26" fill="none" stroke="#dfe6ee" stroke-width="5"/>
              <circle cx="30" cy="30" r="26" fill="none" stroke="#1a86d0" stroke-width="5" stroke-linecap="round"
                      stroke-dasharray="<?php echo esc_attr( $bun_dash ); ?> 163.4" transform="rotate(-90 30 30)"/>
              <text x="30" y="34" text-anchor="middle" class="bun-ring-txt"><?php echo (int) $bun_r['pct']; ?>%</text>
            </svg>
            <p class="bun-result-text"><?php echo esc_html( $bun_r['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) De ce să ne alegi? (primerjalna tabela, knc stil) ============ -->
<section class="bun-cmp-section">
  <div class="bun-cmp-wrap">
    <h2 class="bun-cmp-title">De ce să ne alegi?</h2>
    <p class="bun-cmp-lead">Nu te lăsa păcălit de <span class="bun-hl">imitațiile IEFTINE</span></p>
    <p class="bun-cmp-sub">Cum se compară <strong>corectorul de halux NORIKS</strong> cu celelalte:</p>
    <div class="bun-cmp-scroll">
      <table class="bun-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="bun-us">NORIKS</th>
            <th class="bun-comp">Alte corectoare</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $bun_cmp as $bun_row ) : ?>
            <tr>
              <td><?php echo esc_html( $bun_row ); ?></td>
              <td class="us ok">✓</td>
              <td class="no">✕</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  /* Ni "Tabela velikosti" povezave na korektorju haluksa (ne plugin ne globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): skrij standardne pike (•), ostane samo ✅;
     razmik nad "Prednosti:" in več prostora pod seznamom.
     (Ta predloga se naloži samo na orto-bunion straneh.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
  }
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }

  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #fbf9f4; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .bun-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .bun-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-title { font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .bun-hl { color: #1a86d0; }
  .bun-red { color: #e0563f; }
  .bun-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 12px; }
  .bun-stat { display: flex; align-items: flex-start; gap: 8px; margin-top: 6px !important; }
  .bun-check { color: #1a86d0; font-weight: 800; }
  .bun-stat em { font-style: italic; color: #333; }

  /* section 2: media on the right */
  .bun-reverse .bun-media { order: 2; }
  .bun-reverse .bun-copy { order: 1; }

  /* 3) Kako se uporablja (sivo ozadje) */
  .bun-why.bun-howto { background: #f0f2f5; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 18px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 34px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 12px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  /* 4) 8 razlogov */
  .bun-media img { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-reasons { list-style: none; margin: 0; padding: 0; }
  .bun-reasons li { position: relative; padding: 0 0 16px 34px; font-size: 15.5px; line-height: 1.5; color: #333; }
  .bun-reasons li:before {
      content: ""; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%;
      background: #1a86d0 url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 12.5l4 4 8-8' fill='none' stroke='white' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/></svg>") center/15px no-repeat;
  }

  /* 5) Pravi rezultati */
  .bun-results { display: flex; flex-direction: column; gap: 18px; }
  .bun-result { display: flex; align-items: center; gap: 16px; border-bottom: 1px solid #e6e6e6; padding-bottom: 16px; }
  .bun-result:last-child { border-bottom: 0; padding-bottom: 0; }
  .bun-ring { width: 70px; height: 70px; flex: 0 0 70px; }
  .bun-ring-txt { font-size: 16px; font-weight: 800; fill: #1a86d0; }
  .bun-result-text { font-size: 14.5px; line-height: 1.5; color: #333; margin: 0; }

  /* 6) Zakaj izbrati nas — primerjalna tabela (isti stil kot knc-table) */
  .bun-cmp-section { background:#fff; padding:44px 0; }
  .bun-cmp-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .bun-cmp-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:800; color:#111; margin:0 0 8px; }
  .bun-cmp-lead { text-align:center; font-size:18px; font-weight:800; color:#111; margin:0 0 6px; }
  .bun-cmp-sub { text-align:center; font-size:14px; color:#444; margin:0 0 24px; }
  .bun-cmp-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .bun-cmp-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .bun-cmp-table th, .bun-cmp-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .bun-cmp-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .bun-cmp-table thead th:first-child { width:52%; background:#fff; }
  .bun-cmp-table .bun-comp { background:#767676; }
  .bun-cmp-table .bun-us { background:#111; }
  .bun-cmp-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .bun-cmp-table tbody tr { border-bottom:1px solid #eef0f4; }
  .bun-cmp-table tbody tr:nth-child(even) { background:#fafbfc; }
  .bun-cmp-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .bun-cmp-table td.no { color:#d64545; font-size:18px; font-weight:700; }
  .bun-cmp-table td.us { background:#f3f3f3 !important; }
  .bun-cmp-table td.us.ok { color:#1a9e5f; }
  @media (max-width:600px) {
    .bun-cmp-table th, .bun-cmp-table td { padding:12px 6px; font-size:13px; }
    .bun-cmp-table thead th { font-size:12px; }
    .bun-cmp-table tbody td:first-child { font-size:12px; padding-left:10px; }
  }

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
