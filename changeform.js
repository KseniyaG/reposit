(function($) {
  $(document).ready(function () {
    var name = $('#edit-name');
    var pass = $('#edit-pass');
    var change = $('#edit-terms-of-use');
    $("input[name='name']").prop("disabled", true);
    $("input[name='pass']").prop("disabled", true);
    $('#edit-terms-of-use').click(function(e) {
      $("input[name='name']").prop("disabled", false);
      $("input[name='pass']").prop("disabled", false);
    });
  });
})(jQuery);