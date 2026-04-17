/**
 * RO Checkout — County + Locality dropdowns (same as vigoshop.ro)
 * billing_county = select with 42 județe
 * billing_locality = select populated via JSON based on selected county
 */
jQuery(function($){
  var localitatiData = null;
  var jsonUrl = (typeof roLocalitatiConfig !== 'undefined') ? roLocalitatiConfig.jsonUrl : null;

  if (!jsonUrl) return;

  // Select2 config matching vigoshop
  function s2config(noResultsText) {
    return {
      language: {
        noResults: function() { return noResultsText; }
      },
      matcher: function(params, data) {
        if ($.trim(params.term) === '') return data;
        if (data.id === '') return null;
        var term = params.term.toLowerCase();
        var text = data.text.toLowerCase();
        if (text.indexOf(term) > -1) {
          var result = $.extend({}, data, true);
          result.priority = (text.indexOf(term) === 0) ? 0 : 1;
          return result;
        }
        return null;
      },
      sorter: function(results) {
        return results.sort(function(a, b) {
          if (a.priority !== b.priority) return a.priority - b.priority;
          return a.text.localeCompare(b.text, 'ro');
        });
      }
    };
  }

  // Init Select2 on county and locality
  $('#billing_county').select2(s2config('Nu există rezultate'));
  $('#billing_locality').select2(s2config('Selectați mai întâi județul'));

  // Load locality data
  $.getJSON(jsonUrl, function(data) {
    localitatiData = data;
    // If county already selected, populate
    var currentCounty = $('#billing_county').val();
    if (currentCounty) {
      populateLocalities(currentCounty);
    }
  });

  function populateLocalities(countyId) {
    var $loc = $('#billing_locality');
    $loc.empty();
    $loc.append('<option value="">ALEGE - LOCALITATE</option>');

    if (localitatiData && localitatiData[countyId]) {
      var cities = localitatiData[countyId];
      for (var i = 0; i < cities.length; i++) {
        $loc.append('<option value="' + cities[i] + '">' + cities[i] + '</option>');
      }
    }
    $loc.val('').trigger('change.select2');
  }

  // County change — populate localities
  $('#billing_county').on('change', function() {
    var countyId = $(this).val();
    $(this).closest('#billing_county_field').removeClass('noriks-invalid custom-validation-fail');
    if (countyId && localitatiData) {
      populateLocalities(countyId);
    }
  });

  // Locality change — clear error
  $('#billing_locality').on('change', function() {
    $(this).closest('#billing_locality_field').removeClass('noriks-invalid custom-validation-fail');
  });

  // Force field order in DOM — move street/nr AFTER locality
  function reorderFields() {
    var $wrapper = $('.woocommerce-billing-fields__field-wrapper');
    if (!$wrapper.length) return;
    var $locality = $('#billing_locality_field');
    var $addr1 = $('#billing_address_1_field');
    var $addr2 = $('#billing_address_2_field');
    if ($locality.length && $addr1.length && $locality.index() > $addr1.index()) {
      $addr1.detach().insertAfter($locality);
      $addr2.detach().insertAfter($addr1);
    }
  }
  reorderFields();

  // After WC AJAX update_checkout, re-init select2
  $(document.body).on('updated_checkout', function() {
    reorderFields();
    if (!$('#billing_county').data('select2')) {
      $('#billing_county').select2(s2config('Nu există rezultate'));
    }
    if (!$('#billing_locality').data('select2')) {
      $('#billing_locality').select2(s2config('Selectați mai întâi județul'));
    }
  });
});
