require('./bootstrap');
const $ = require('jquery');
$(document).ready(function() {
  $('.main__select-by-years').change(function() {
    $ageRange = $(this).val();
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: window.location.protocol+'//'+window.location.host+'/boolean/studenti',
      data: {
        age: $(this).val(),
      },
      method: 'POST',
      success: function(response){
        console.log(response);
      },
      error: function(request, data, error) {
        $('.main__students').html('Non ci sono studenti di quest\'età');
      },
    });
  });
});
