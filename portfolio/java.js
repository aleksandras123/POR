// toggle burger

$( document ).ready(function() {
    console.log( "ready!" );
    $('.menu-icon').on('click', function(){
        $('nav ul').toggleClass('opa');
    });

    // change shape
    $('.form').mouseover(function(){
            $('.form').addClass('border-logo');
        });
        $('.form').mouseout(function(){
            $('.form').removeClass('border-logo');
        });
        // change shape
      $('.skills').mouseover(function(){
              $('.item1').addClass('border-item');
          });
          $('.skills').mouseout(function(){
              $('.item1').removeClass('border-item');
            });

        $('.projects').mouseover(function(){
                $('.item2').addClass('border-item');
            });
            $('.projects').mouseout(function(){
                $('.item2').removeClass('border-item');
              });
              // onload transitions

            $('ul').css('opacity', '1');
            $('ul').css('transition', '0.4s');

            $('.centeredTitle').css('opacity', '1');
            $('.centeredTitle').css('transition', '1.5s');

            $('.index-centeredTitle').css('opacity', '0.6');
            $('.index-centeredTitle').css('transition', '1.5s');
            $('.titleStyle').css('opacity', '1');

            $('.logo').css('opacity', '1');
            $('.logo').css('transition', '0.8s');

            $('nav ul li').css('padding-left', '20px');
            $('nav ul li').css('padding-right', '20px');
            $('nav ul li').css('transition', '0.4s');


// PROJECT MOUSE OVER/OUT

            $('.p-first').mouseover(function(){
                    $('.size').css('fontSize', '15px');
                    $('.size').css('transition','0.5s');
                });
                $('.p-first').mouseout(function(){
                    $('.size').css('fontSize', '14px');
                });



                $('.p-second').mouseover(function(){
                        $('.size-2').css('fontSize', '15px');
                        $('.size-2').css('transition','0.5s');
                    });
                    $('.p-second').mouseout(function(){
                        $('.size-2').css('fontSize', '14px');
                    });

                $('.p-third').mouseover(function(){
                        $('.size-3').css('fontSize', '15px');
                        $('.size-3').css('transition','0.5s');
                    });
                    $('.p-third').mouseout(function(){
                        $('.size-3').css('fontSize', '14px');
                    });

                $('.p-fourth').mouseover(function(){
                        $('.size-4').css('fontSize', '15px');
                        $('.size-4').css('transition','0.5s');
                    });
                    $('.p-fourth').mouseout(function(){
                        $('.size-4').css('fontSize', '14px');
                    });



});
// Change top collor
$(window).on('scroll', function(){
    if($(window).scrollTop()) {
        $('nav').addClass('styleScroll');
        // $('nav').addClass('none');
    }else {
        $('nav').removeClass('styleScroll');
        // $('nav').removeClass('none');
    }
});

// nav bar scroll

function scrollSection() {
    var y = $(window).scrollTop();
    if (y > 700) {
        $('.cartoon').css('opacity', '1');
        $('.cartoon').css('transition','1s');
        $('.content-text').css('opacity', '1');
        $('.content-text').css('transition','1s');
    }
}
function scrollSectionIcons() {
    var y = $(window).scrollTop();
    if (y > 860) {
        var icon = $(".iconGit");
        icon.animate({fontSize: '20px'}, "slow");
        $('.icon').css('padding-left', '10px');
        $('.icon').css('padding-right', '10px');
        $('.icon').css('transition', '2s');

    }
}


// section scroll animatons
function scrollNav() {
    var y = $(window).scrollTop();
    var nav = $('nav');
    console.log(y);
    if (y > 1) {
        nav.css('line-height', '20px');
        $('.logo').css('margin', '10px 36px');
        $('.form').css('width', '50px');
        $('.form').css('height', '50px');
        $('.form>h1').css('font-size', '20px');
    }else {
        nav.css('line-height', '60px');
        $('.logo').css('margin', '18px 36px');
        $('.form').css('width', '70px');
        $('.form').css('height', '70px');
        $('.form>h1').css('font-size', '25px');
    }
}

$(window).on('scroll', scrollNav);
$(window).on('scroll', scrollSection);
$(window).on('scroll', scrollSectionIcons);
