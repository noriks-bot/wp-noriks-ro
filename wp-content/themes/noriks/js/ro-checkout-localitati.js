/**
 * RO Checkout — Localitate dropdown based on selected Județ
 * Loads localități from ro-localitati.json and replaces billing_city with a Select2 dropdown
 */
jQuery(function($){
  var localitatiData = null;
  var dataUrl = (typeof roLocalitatiConfig !== 'undefined') ? roLocalitatiConfig.jsonUrl : null;

  if (!dataUrl) return;

  // Load localități data
  $.getJSON(dataUrl, function(data){
    localitatiData = data;
    // If state is already selected, populate cities
    var currentState = $('#billing_state').val();
    if (currentState) {
      populateCities(currentState);
    }
  });

  // Convert billing_city to a select dropdown
  function populateCities(stateCode) {
    if (!localitatiData || !localitatiData[stateCode]) return;

    var cities = localitatiData[stateCode];
    var $wrapper = $('#billing_city_field .woocommerce-input-wrapper');
    var currentVal = $('#billing_city').val();

    // Check if already a select
    var $existing = $wrapper.find('select#billing_city');
    if ($existing.length) {
      // Update options
      $existing.empty();
      $existing.append('<option value="">Alege localitate</option>');
      for (var i = 0; i < cities.length; i++) {
        var selected = (cities[i] === currentVal) ? ' selected' : '';
        $existing.append('<option value="' + cities[i] + '"' + selected + '>' + cities[i] + '</option>');
      }
      $existing.trigger('change.select2');
      return;
    }

    // Replace input with select
    var $input = $wrapper.find('input#billing_city');
    var selectHtml = '<select id="billing_city" name="billing_city" class="input-text form-input" style="width:100%">';
    selectHtml += '<option value="">Alege localitate</option>';
    for (var i = 0; i < cities.length; i++) {
      var selected = (cities[i] === currentVal) ? ' selected' : '';
      selectHtml += '<option value="' + cities[i] + '"' + selected + '>' + cities[i] + '</option>';
    }
    selectHtml += '</select>';

    $input.replaceWith(selectHtml);

    // Init Select2 on the new select
    if ($.fn.select2) {
      $('#billing_city').select2({
        placeholder: 'Alege localitate',
        allowClear: true,
        width: '100%'
      });
    }
  }

  // When state (județ) changes, update cities
  $(document.body).on('change', '#billing_state', function(){
    var stateCode = $(this).val();
    if (stateCode && localitatiData) {
      populateCities(stateCode);
    } else {
      // Clear city select
      var $select = $('#billing_city');
      if ($select.is('select')) {
        $select.empty().append('<option value="">Alege localitate</option>').trigger('change.select2');
      }
    }
  });

  // After WC AJAX update_checkout, re-apply city dropdown if needed
  $(document.body).on('updated_checkout', function(){
    var currentState = $('#billing_state').val();
    if (currentState && localitatiData) {
      populateCities(currentState);
    }
  });
});
