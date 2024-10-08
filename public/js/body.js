$(document).ready(function(){
    if (window.location.hash != "") {
        $('.lazy-item').css('opacity', 1);
        $('html, body').scrollTop(0);
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top - 140
            }, ($(window.location.hash).offset().top) / 2 );
        }
    });

$('.lazy-item').fadeInElements({
    fadeDuration: 500,
    fadePosition: 25
});