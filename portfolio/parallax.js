$(window).scroll(function() {
    parallax();
});

function parallax(){
    let xScroll = $(window).scrollTop();
    $('.parallax-1').css('background-position', 'center '+(0.5*xScroll)+'px');
}
