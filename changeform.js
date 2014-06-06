(function($) {
  $(document).ready(function () {
    var name = $('#edit-name');
    var pass = $('#edit-pass');
    var change = $('#edit-terms-of-use');
    $("input[type='text']").prop("disabled", true);
    $("input[type='password']").prop("disabled", true);
    $('#edit-terms-of-use').click(function(e) {
      $("input[type='text']").prop("disabled", false);
      $("input[type='password']").prop("disabled", false);
    });
  });
})(jQuery);