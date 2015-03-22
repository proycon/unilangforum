
// virtual keyboard

(function($) {

  $.fn.selectRange = function(start, end) {
    if(!end) end = start; 
    return this.each(function() {
        if (this.setSelectionRange) {
            this.focus();
            this.setSelectionRange(start, end);
        } else if (this.createTextRange) {
            var range = this.createTextRange();
            range.collapse(true);
            range.moveEnd('character', end);
            range.moveStart('character', start);
            range.select();
        }
    });
  };

  var insertAtCaret = function(element, text) {
    var caretPos = element[0].selectionStart;
    var textAreaTxt = element.val();
    element.val(textAreaTxt.substring(0, caretPos) + text + textAreaTxt.substring(caretPos) );

    caretPos += text.length;
    element.selectRange(caretPos);
  }

  var updateLayout = function() {
    $(".ulvkbd-buttonlist").hide();
    var layout = $("#ulkvbd-layout-select > select").val();
    $(".ulkvbd-layout-" + layout).show();
  }

  $(function() {

    $(document).ready(updateLayout);
    $("#ulkvbd-layout-select > select").change(updateLayout);

    $('#ulkvbd-toggle > a').click(function( event ) {
      event.preventDefault();
      $('#ulkvbd-toggle > a, #ulkvbd-box, #ulkvbd-layout-select').toggle();
      // $('#ulkvbd-box').toggle();
      // $("#ulkvbd-layout-select").toggle();
    });

    $('.ulvkbd-buttonlist > button').click(function( event ) {
      var messageBox = $('#message'); 
      var _c = ($(this).data('char') ? $(this).data('char') : $(this).text());
      event.preventDefault();
      insertAtCaret(messageBox, _c);
      messageBox.focus();
    });

  });

})(jQuery);

