/*!
 * Unilang Virtual Keyboard extension
 * Part of Unilang Forum
 * https://github.com/proycon/unilangforum
 *
 * Copyright 2015 Patryk Kalinowski
 * Released under the GPL-3.0 license
 */

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
    var layout = $("#ulvkbd-layout-select > select").val();
    $(".ulvkbd-layout-" + layout).show();
    var selOption = $("#ulvkbd-layout-select option[value=" + layout + "]");
    $("#ulvkbd-layout-extended-toggle").toggle(!!selOption.data('showext'));
  }

  var updateExtended = function() {
    $(".ulvkbd-buttonlist [data-ext]").css("display", $("#ulvkbd-layout-extended").is(':checked') ? 'inline' : 'none');
  }

  var showCharbox = function() {
    $('#ulvkbd-toggle > a, #ulvkbd-box, #ulvkbd-layout-select').toggle();

    var box = $('#ulvkbd-box');
    $.cookie('unilang_vkbd_show', (box.css('display') !== 'none'));
    if( !box.data('loaded') ) {
      box.load(box.data('uri'), {}, function() {
        updateLayout();
        updateExtended();
        box.data('loaded', true);

        $('.ulvkbd-buttonlist button').click(function( event ) {
          var messageBox = $('#message'); 
          var _c = ($(this).data('char') ? $(this).data('char') : $(this).text());
          event.preventDefault();
          insertAtCaret(messageBox, _c);
          messageBox.focus();
        });
      });
    }
  }

  $(function() {

    $(document).ready(function() {
      if ($.cookie('unilang_vkbd_scheme') != undefined)
        $("#ulvkbd-layout-select > select").val($.cookie('unilang_vkbd_scheme'));
      if ($.cookie('unilang_vkbd_ext') != undefined)
        $("#ulvkbd-layout-extended").prop('checked', $.cookie('unilang_vkbd_ext') === 'true');
      if ($.cookie('unilang_vkbd_show') === 'true')
        showCharbox();
    });

    $("#ulvkbd-layout-select > select").change(function() {
      $.cookie('unilang_vkbd_scheme', $(this).val());
      updateLayout();
    });

    $('#ulvkbd-toggle > a').click(function( event ) {
      event.preventDefault();
      showCharbox();
    });

    $('#ulvkbd-layout-extended').change(function() {
      $.cookie('unilang_vkbd_ext', $(this).is(':checked'));
      updateExtended();
    });

  });

})(jQuery);

