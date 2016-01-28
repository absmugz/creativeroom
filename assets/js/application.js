$(window).load(function(){
    
    $('.nav a').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing'
            //, function () {
	    //    window.location.hash = target;
	    //}
                    );
	});
        
    $(".animated-when-visible").each(function(i, el) {
      el = $(el);
      if (el.visible(true)) {
        return el.addClass("animated " + el.data("animation-type"));
      }
    });
    $(window).scroll(function(event) {
      return $(".animated-when-visible").each(function(i, el) {
        el = $(el);
        if (el.visible(true)) {
          return el.addClass("animated " + el.data("animation-type"));
        }
      });
    });
    $(".dial").knob({
      readOnly: true,
      draw: function() {
        return $(this.i).val(this.cv + "%");
      }
    });
    $.scrollUp({
      scrollText: "<i class='icon-chevron-up'></i>"
    });
    $(".isotope-w").isotope({
      itemSelector: '.item',
      layoutMode: 'fitRows'
    });
    $(".portfolio-filters a").click(function() {
      var selector;
      selector = $(this).attr("data-filter");
      $(".isotope-w").isotope({
        filter: selector
      });
      return false;
    });
    return $(".swipebox").swipebox();
  });


