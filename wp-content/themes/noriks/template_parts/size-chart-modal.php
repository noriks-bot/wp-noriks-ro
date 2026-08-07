<!-- Size Chart Modal Styles -->
<style>
/* --- Base UI bits you already had --- */
#size-suggestion-result { border: 1px solid #ccc; }
.body-type-options { display: flex; justify-content: space-between; gap: 5px; }
.body-type-option {
  display: flex; flex-direction: column; align-items: center; cursor: pointer;
  padding: 5px; border: 1px solid #ccc; border-radius: 2px; width: auto; text-align: center;
  transition: all 0.2s ease;
}
.body-type-option input { display: none; }
.body-type-option img { width: 100px; height: 100px; margin-bottom: 5px; }
.body-type-option:hover { background-color: #e0e0e0; }
.body-type-option.selected { border: 2px solid #f39c13; background-color: #fff3d6; }
.slike-mobile-only { display: flex; }

/* --- Modal base --- */
/* Height is AUTO on ALL screens now (desktop same as mobile). */
#custom-size-chart-modal {
  display: none;              /* hidden by default; shown via .show */
  position: fixed;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 90%;
  max-width: 800px;
  height: auto;               /* << auto height */
  background: #fff;
  border-radius: 3px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.25);
  z-index: 9999999;
  overflow: visible;          /* no forced scrollbars */
  font-family: sans-serif;
}

/* Single-column content wrapper (only image) */
.size-chart-left {
  display: flex;              /* center the image inside */
  align-items: center;        /* vertical center */
  justify-content: center;    /* horizontal center */
  background: white;
  padding: 0;
}

/* Image fills modal width, keeps aspect ratio */
.size-chart-left img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: contain;
  margin: 0;                  /* ensure no offsets */
}

/* When opened */
#custom-size-chart-modal.show { display: block; }

/* --- Mobile tweaks (kept minimal) --- */
@media (max-width: 768px) {
  .info-box-desktop { display: none !important; }
  .second-one, .third-one { display: inline-block; width: 49%; }
  #size-suggestion-result { padding-top: 3px; padding-bottom: 3px; }
  .form-title { margin-top: 4px; text-align: left; padding-left: 10px; font-size: 15px; }
  .size-chart-field { margin-top: 10px; text-align: left; }
  .size-chart-field label { text-align: left; }

  /* Modal stays auto-height on mobile too; nothing else needed */

  /* --- Larger size-chart image with horizontal scroll on mobile --- */
  /* Push content below the absolute X-close button so it doesn't overlap */
  #custom-size-chart-modal { padding-top: 45px; padding-bottom: 10px; }

  .size-chart-left {
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch; /* iOS momentum */
    justify-content: flex-start;       /* scroll starts at the left edge */
    scrollbar-width: thin;
    padding-bottom: 6px;                /* room for native scrollbar */
  }
  .size-chart-left img {
    width: auto !important;             /* override base 100% width */
    max-width: none !important;
    min-width: 720px;                   /* large enough for text to be readable */
    height: auto !important;
    margin-top: 0 !important;           /* override inline 70px margins */
    margin-bottom: 0 !important;
    object-fit: initial;                /* let natural size dictate dimensions */
  }
  /* Soft hint that the image is horizontally scrollable */
  .size-chart-left::-webkit-scrollbar { height: 6px; }
  .size-chart-left::-webkit-scrollbar-thumb { background: rgba(0,0,0,0.25); border-radius: 3px; }
}

/* Desktop cleanups */
@media (min-width: 769px) {
  .slike-mobile-only { display: none !important; }
  .info-box-mobile  { display: none !important; }
  .size-chart-body { padding: 10px; }
}
</style>


<?php if ( has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', get_the_ID() ) ): ?>  

<style>

@media (min-width: 769px) {
  .size-chart-left  img { 
      max-width: 50% !important; 
      margin: 0 auto !important;
      
  }

}
</style>


<?php endif; ?>

<!-- Modal HTML -->
<div id="custom-size-chart-modal" aria-modal="true" role="dialog">
  <span id="close-size-chart-x" style="position: absolute;
    top: 5px; right: 5px; font-size: 24px; font-weight: bold; cursor: pointer;
    background: black; border-radius: 1px; width: 40px; height: 40px; text-align: center; color: white;">&times;</span>

  <div  style="<?php if ( has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', get_the_ID() ) ): ?>  display: block; <?php endif; ?>"
        class="size-chart-left">
      
      <?php if ( has_term( array( 'boxeri', 'orto-bokserice' , 'bokserice-sastavi-paket' ), 'product_cat', get_the_ID() )   && 
       !has_term( 'black-friday', 'product_cat', get_the_ID() )   ): ?>
      
    <img
    
    style="margin-top: 70px;margin-bottom: 70px;"
    
      src="https://noriks.com/ro/wp-content/uploads/2026/04/bokserice_ro.jpg"
      alt="Size Guide">
      
      
       
      <?php elseif ( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-nogavice' ) ): ?>

      <div style="line-height:1.9; text-align:left; margin:40px 0; padding:0 6px; font-size:15px; color:#111;">
        <strong>S/M</strong> : mărime încălțăminte 36–40 / circumferința gambei : 23–36 cm<br>
        <strong>L/XL</strong> : mărime încălțăminte 40–44 / circumferința gambei : 36–45 cm<br>
        <strong>2XL</strong> : mărime încălțăminte 44–48 / circumferința gambei : 45–56 cm<br><br>
        Vă rugăm să măsurați circumferința gambei în cel mai lat punct pentru a găsi mărimea potrivită.<br><br>
        Recomandăm să alegeți mărimea după circumferința gambei, nu după mărimea obișnuită la încălțăminte.
      </div>

      <?php elseif ( has_term( array( 'sosete', 'zimske-carape	' ), 'product_cat', get_the_ID() ) ): ?>
      
      
       <img
    
    style="margin-top: 70px;margin-bottom: 70px;"
    
      src="https://noriks.com/ro/wp-content/uploads/2026/04/nogavice_ro.jpg"
      alt="Size Guide">
      
      
      <?php elseif ( has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', get_the_ID() ) ): ?>
      
      
      
     <img
    
    style="margin-top: 35px;margin-bottom: 0px;"
    
      src="https://noriks.com/ro/wp-content/uploads/2026/04/tablica_ro.jpg"
      alt="Size Guide">
      
      
       <img
    
    style="margin-top: 0px;margin-bottom: 0px;"
    
      src="https://noriks.com/ro/wp-content/uploads/2026/04/bokserice_ro.jpg"
      alt="Size Guide">
     
      
      
      <?php elseif ( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers' ) ): ?>

      <div style="margin:30px 0;padding:0 6px;">
        <p style="margin:0 0 4px;font-weight:700;font-size:15px;">Cum se măsoară șoldurile</p>
        <p style="margin:0 0 14px;line-height:1.6;font-size:14px;color:#333;">Înfășurați centimetrul în jurul celei mai late părți a șoldurilor (peste fese), fără a strânge, și notați măsura în centimetri.</p>
        <table style="width:100%;border-collapse:collapse;font-size:14px;">
          <thead><tr style="background:#12233b;color:#fff;">
            <th style="padding:9px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Mărime</th><th style="padding:9px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Șolduri (cm)</th>
          </tr></thead>
          <tbody>
          <?php foreach ( array(array('S','până la 76 cm','până la 30"'),array('M','77 – 85 cm','30 – 33"'),array('L','86 – 94 cm','34 – 37"'),array('XL','95 – 102 cm','37 – 40"'),array('2XL','103 – 114 cm','41 – 45"'),array('3XL','115 – 121 cm','45 – 48"'),array('4XL','122 – 129 cm','48 – 51"'),array('5XL','130 – 137 cm','51 – 54"'),array('6XL','138 – 145 cm','54 – 57"'),array('7XL','146 – 153 cm','57 – 60"'),array('8XL','154 cm și peste','61" și peste') ) as $i=>$r): ?>
            <tr style="background:<?php echo ($i%2)?'#f5f7f9':'#fff'; ?>;border-bottom:1px solid #eee;">
              <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td><td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
        <p style="margin-top:12px;font-size:14px;color:#444;"><strong>Sunteți între două mărimi?</strong> Recomandăm mărimea mai mare, pentru confort optim și absorbție maximă.</p>
      </div>

      <?php elseif ( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice' ) ): ?>

      <div style="margin:30px 0;padding:0 6px;">
        <table style="width:100%;border-collapse:collapse;font-size:16px;">
          <thead><tr style="background:#111;color:#fff;">
            <th style="padding:11px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Mărime</th><th style="padding:11px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Greutate corespunzătoare</th>
          </tr></thead>
          <tbody>
          <?php foreach ( array(array('S','50 – 70 kg'),array('M','70 – 90 kg'),array('L','90 – 110 kg'),array('XL','110 – 130 kg'),array('2XL','130 – 150 kg'),array('3XL','150 – 170 kg'),array('4XL','170 – 190 kg'),array('5XL','190 – 210 kg') ) as $i=>$r): ?>
            <tr style="background:<?php echo ($i%2)?'#f2f2f2':'#fff'; ?>;border-bottom:1px solid #e6e6e6;">
              <td style="padding:11px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td><td style="padding:11px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
        <p style="margin-top:12px;font-size:14px;color:#444;">Alegeți mărimea în funcție de greutatea dumneavoastră. Sunteți între două mărimi? Pentru o compresie mai puternică, alegeți mărimea mai mică.</p>
      </div>

      <?php else: ?>


       <img

    style="margin-top: 70px;margin-bottom: 70px;"

      src="https://noriks.com/ro/wp-content/uploads/2026/04/tablica_ro.jpg"
      alt="Size Guide">

      <?php endif; ?>
      
      
      
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("custom-size-chart-modal");
  const openBtn = document.getElementById("open-size-chart");
  const closeX = document.getElementById("close-size-chart-x");

  // Open using a class so CSS controls display across breakpoints
  openBtn?.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.add("show");
  });

  // Close
  closeX?.addEventListener("click", function () {
    modal.classList.remove("show");
  });

  // Optional: close on ESC
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") modal.classList.remove("show");
  });
});
</script>
