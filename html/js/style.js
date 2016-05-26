$(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });

          window.sr = ScrollReveal();

  var fleureReveal = {
    delay    : 200,
    distance : '200px',
    easing   : 'ease-in-out',
    rotate   : { y: 30 },
    scale    : 1.1,
  };

  var titreReveal = {
    delay    : 200,
    distance : '200px',
    easing   : 'ease-in-out',
    rotate   : { y: 30 },
    scale    : 1.1,
  };

  var  logoReveal = {
    delay    : 100,
    distance : '50px',
    easing   : 'ease-in-out',
  };

  window.sr = ScrollReveal();
  sr.reveal('.fleureappalaches', fleureReveal);
  sr.reveal('h2', titreReveal);
  sr.reveal('#logob', logoReveal);

    });

$(document).ready(function($) {
    $("#owl-example").owlCarousel({
    autoPlay : true,
    loop : true,

    })
    });

$(document).ready(function() {
       
        $("#owl-demo").owlCarousel({
       
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay : true,
            loop : true,
       
            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
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

$('#realisation #clients ul li a span').hover(function () {
  $(this).addClass('magictime vanishIn');
});

$('#mookup #owl-demo span').hover(function () {
  $(this).addClass('magictime vanishIn');
});

