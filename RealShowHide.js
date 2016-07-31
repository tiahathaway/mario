(function( $ ) {
  $.fn.RealShowHide = function(options) {

  	var settings = $.extend( {
      'speed' : undefined,
      'dataName' : 'element'
    }, options);

  	this.click(function(e){
      var block = $(e.target).data(settings['dataName']);
      if (block===undefined) return;
      $(block).slideToggle(settings['speed']);
  		return;
  	});

  	return this;
  };
})(jQuery);
