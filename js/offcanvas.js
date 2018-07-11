(function($) {
  $('.navbar-burger').on('click', function() {
    $('.offcanvas').addClass('slide-out');
    $('body').css('position', 'fixed');
  });

  $('.navbar-close').on('click', function() {
    $('.offcanvas').removeClass('slide-out');
    $('body').css('position', 'static');
  });
})(jQuery);