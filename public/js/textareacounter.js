/**
 * jQuery.textareaCounter
 * Version 1.0
 * Copyright (c) 2011 c.bavota - http://bavotasan.com
 * Dual licensed under MIT and GPL.
 * Date: 10/20/2011
**/
(function($){
  $.fn.textareaCounter = function(options) {
    // setting the defaults
    // $("textarea").textareaCounter({ limit: 100 });
    var defaults = {
      limit: 100
    };  
    var options = $.extend(defaults, options);
 
    // and the plugin begins
    return this.each(function(index, val) {
      var obj, text, wordcount, limited;
      
      obj = $(this);
      obj.after('<i style="font-size: 15px; font-weight:400; color: #00b8d8; clear: both; margin-top: 3px; display: block;" class="counter-label">Maksimal '+options.limit+' kata</i>');

      obj.keyup(function(e) {
          text = obj.val();
          if(text === "") {
            wordcount = 0;
          } else {
            wordcount = $.trim(text).split(" ").length;
        }
          if(wordcount > options.limit) {
              $(obj).next('.counter-label').html('<span style="color: #DD0000;">0 kata tersisa</span>');
          limited = $.trim(text).split(" ", options.limit);
          limited = limited.join(" ");
          $(this).val(limited);
          } else {
              $(obj).next('.counter-label').html((options.limit - wordcount)+' kata tersisa');
          } 
      });
    });
  };
})(jQuery);