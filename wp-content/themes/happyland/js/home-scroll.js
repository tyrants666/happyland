                // 5 min Dynamic Change background Image ( DESKTOP VIEW )
                $(function () {
                  $(window).resize(function(){
                    if($(this).width() >= 768){


                        var i = 0;
                        function changeClass(){
                  				  $(".homee").removeClass("bg" + i)
                  				  $(".homee").removeClass("bg5")
                  				  i = (i==4)?1:i+1;
                  				  $(".homee").addClass("bg" + (i));
                  			}
                        setInterval(changeClass, 50000);

                    }
                  })
                    .resize();//trigger resize on page load
                });

                // 5 min Dynamic Change background Image ( MOBILE VIEW )
                $(function () {
                  $(window).resize(function(){
                    if($(this).width() < 768){


                        var i = 5;
                        function changeClass(){
                  				  $(".homee").removeClass("bg" + i)
                  				  $(".homee").removeClass("bg5")
                  				  i = (i==8)?5:i+1;
                  				  $(".homee").addClass("bg" + (i));
                  			}
                        setInterval(changeClass, 50000);

                    }
                  })
                    .resize();//trigger resize on page load
                });

//Tint Background Image on scroll
$(function () {
  $(window).resize(function(){
      if($(this).width() >= 768){
          $(window).scroll(function () {
              // set distance user needs to scroll before we start fadeIn
              if($(this).scrollTop() < 100) {
                  $('.main-title').css("opacity", "1");
                  $('.overlay-effect').css("opacity", "0.7");

             } if ($(this).scrollTop() >= 100 && $(this).scrollTop() < 200) {
                  $('.main-title').css("opacity", "0.7");
                  $('.overlay-effect').css("opacity", "0.4");

             } if ($(this).scrollTop() >= 200 && $(this).scrollTop() < 300) {
                  $('.main-title').css("opacity", "0");
                  $('.overlay-effect').css("opacity", "0");
             }

          });
      }
    })
    .resize();//trigger resize on page load
});

//Navbar hide for Home Page ( DESKTOP VIEW )
$(function () {
  $(window).resize(function(){
      if($(this).width() >= 768){
            'use strict';

             var c, currentScrollTop = 0,
                 navbar = $('.navbar');

             $(window).scroll(function () {
                var a = $(window).scrollTop();
                var b = navbar.height();

                currentScrollTop = a;

                // if (c < currentScrollTop && a > b + b) {
                if (c < currentScrollTop && a > 200) {
                  navbar.fadeOut();
                  // } else if (c > currentScrollTop && !(a <= b)) {
                // } else{
                } else if ( (a <= 200)) {
                  navbar.fadeIn();
                }
                c = currentScrollTop;
            });
          }
      })
      .resize();
});

//Navbar hide for Home Page ( MOBILE VIEW )
$(function () {
  $(window).resize(function(){
      if($(this).width() <= 768){
            'use strict';

             var c, currentScrollTop = 0,
                 navbar = $('.navbar');

             $(window).scroll(function () {
                var a = $(window).scrollTop();
                var b = navbar.height();

                currentScrollTop = a;

                // if (c < currentScrollTop && a > b + b) {
                if (c < currentScrollTop && a > 50) {
                  navbar.fadeOut();
                  // } else if (c > currentScrollTop && !(a <= b)) {
                // } else{
                } else if ( (a <= 50)) {
                  navbar.fadeIn();
                }
                c = currentScrollTop;
            });
          }
      })
      .resize();
});


//Scroll image smoothly
$(function () {
  var flag = 0;
  $(window).resize(function(){
      if($(this).width() >= 768){
          $(window).scroll(function () {

              if ($(window).scrollTop() >= 300) {
                $('.row-homee').removeClass('sticky-top');
                $('.row-homee').removeClass('scrollsmooth-down');
                $('#card').removeClass('scrollsmooth-down');
                $('.row-homee').addClass('scrollsmooth-up');
                $('#card').addClass('scrollsmooth-up');
                flag = 1;

              }else if ( flag==1){
                $('.row-homee').addClass('sticky-top');
                $('.row-homee').addClass('scrollsmooth-down');
                $('#card').addClass('scrollsmooth-down');
                $('#card').removeClass('scrollsmooth-up');
                $('.row-homee').removeClass('scrollsmooth-up');
                $('.row-homee').addClass('sticky-top');
                flag = 0;

              }
          });
        }
     })
    .resize();//trigger resize on page load
});
