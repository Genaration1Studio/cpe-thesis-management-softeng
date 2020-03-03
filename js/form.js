$(document).ready(function() {  
  $('.multiselect').multiselect();
  $('.datepicker').datepicker();  
});

$(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});