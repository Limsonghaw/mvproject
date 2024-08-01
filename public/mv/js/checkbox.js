$(document).ready(function() {
    // Event handler for the "Select All" checkbox
    $('#select-all').change(function() {
      $('.checkbox').prop('checked', this.checked);
    });
  
    // Event handler for individual checkboxes
    $('.checkbox').change(function() {
      // Check if all checkboxes are selected
      var allChecked = $('.checkbox:checked').length === $('.checkbox').length;
      $('#select-all').prop('checked', allChecked);
    });
  });
  
  document.getElementById('jsform').submit();