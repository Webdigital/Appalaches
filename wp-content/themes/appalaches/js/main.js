$(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active");
			  });
		});

$(function(){
   
  $(document).on( 'scroll', function(){
   
  if ($(window).scrollTop() > 100) {
  $('.scroll-top-wrapper').addClass('show');
  } else {
  $('.scroll-top-wrapper').removeClass('show');
  }
  });
   
  $('.scroll-top-wrapper').on('click', scrollToTop);
  });
   
  function scrollToTop() {
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  element = $('body');
  offset = element.offset();
  offsetTop = offset.top;
  $('html, body').animate({scrollTop: offsetTop}, 550, 'linear');
  }
  
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - (150)
        }, 2000, 'easeInOutExpo');
        event.preventDefault();
    });
});