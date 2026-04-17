document.addEventListener('DOMContentLoaded', function () {
  const qtyInput = document.querySelector('input.qty');
  const insPrice = document.querySelector('p.price ins .amount bdi');
  const delPrice = document.querySelector('p.price del .amount bdi');

  if (!qtyInput || !insPrice || !delPrice) return;

  /* Parse EU format: 1.191,99 → remove thousand sep (.) first, then decimal sep (,) → (.) */
  function parseEUPrice(text) {
    return parseFloat(text.replace(/\./g, '').replace(',', '.').replace(/[^\d.]/g, ''));
  }
  const baseSale = parseEUPrice(insPrice.textContent);
  const baseRegular = parseEUPrice(delPrice.textContent);

  if (isNaN(baseSale) || isNaN(baseRegular)) return;

  function formatPrice(price) {
    var parts = price.toFixed(2).split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    return parts.join(',') + ' lei';
  }

  function updatePrice() {
    const qty = parseInt(qtyInput.value);
    if (isNaN(qty) || qty < 1) return;

    // Regular price = no discount
    const totalRegular = baseRegular * qty;
    delPrice.textContent = formatPrice(totalRegular);

    // Sale price = apply discount if qty is 2 or more
    let discount = 0;
    
    if (qty === 2) {
      discount = 0.05;
    } else if (qty >= 3 && qty < 9 ) {
      discount = 0.1;
    }else if (qty >= 9 && qty < 12) {
      discount = 0.2;
    }
    else if (qty >= 12) {
      discount = 0.3;
    }
    
    console.log(qty);
    console.log(discount);

    const discountedUnitPrice = baseSale * (1 - discount);
    const totalSale = discountedUnitPrice * qty;
    insPrice.textContent = formatPrice(totalSale);
  }

  // Listen for quantity change
  qtyInput.addEventListener('input', updatePrice);

  // Fallback in case quantity is changed by other scripts
  let lastQty = qtyInput.value;
  setInterval(function() {
    if (qtyInput.value !== lastQty) {
      lastQty = qtyInput.value;
      updatePrice();
    }
  }, 100);

  // Initial run on load
  updatePrice();
});
