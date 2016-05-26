//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 815) {
        $(".menu").addClass("top-nav-collapse");
        $(".menu").addClass("navbar-fixed-top");  
    } else {
        $(".menu").removeClass("top-nav-collapse");
    }

    if ($(".navbar").offset().top < 815) {
        $(".menu").removeClass("navbar-fixed-top");
    } else {
        $(".menu").addClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
