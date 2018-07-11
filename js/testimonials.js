(function($) {
  var testimonial1 = $('.testimonials p:nth-child(1)');
  var testimonial2 = $('.testimonials p:nth-child(2)');
  var testimonial3 = $('.testimonials p:nth-child(3)');

  $(window).on("scroll", function() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= testimonial1.offset().top - 300) {
      testimonial1.addClass('show');
    }
    if (scrollTop >= testimonial2.offset().top - 300) {
      testimonial2.addClass('show');
    }
    if (scrollTop >= testimonial3.offset().top - 300) {
      testimonial3.addClass('show');
    }
  });
}) (jQuery);