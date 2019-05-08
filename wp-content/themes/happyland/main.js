
// **************************************** jQuery *****************************************************


  $(document).ready(function(){

    //Toggle Sidebar
    $('.navbar-toggler').on('click', function(){
        $(".sidepanel").toggleClass("w-250 w-0");
    });


  });   //End jquery document ready




// ******************* Running jQuery on Media query ***********************

  $(function(){
       $(window).resize(function(){
           if($(this).width() <= 768){


             // $("#navbarNavDropdown").addClass("sidepanel w-0");
             // $("#navbarNavDropdown").removeClass("top-menu collapse");

               // $(".current-page").remove();
               $(".cardd-left").removeClass("sticky-top");
               $(".cardd-left").removeClass("col-lg-4-5");
               $(".cardd-left").addClass("mx-auto");
               $("#col-card-right").removeClass("col-lg-6-5");
               $("#col-card-right").addClass("mx-auto");
               $("#col-card-right2").removeClass("col-lg-6-5");
               $("#col-card-right2").addClass("mx-auto");
               $(".row-homee").removeClass("sticky-top");
               $(".email-div").removeClass("col");
               $(".message-div").removeClass("col");
               $(".send").removeClass("col");
               $(".form-row").toggleClass("form-row form");
               $(".prevv").contents().filter((_, el) => el.nodeType === 3).remove();
               $(".nextt").contents().filter((_, el) => el.nodeType === 3).remove();
               // $(".copyright").toggleClass();
               $(".copyright").css("display", "none");
               $(".copyright2").css("display", "unset");
           }
        })
        .resize();//trigger resize on page load
  });




  // **************************  NAVBAR Scroll Down (fade) || scroll up (Show)  **************************************

  $(function () {

    'use strict';

     var c, currentScrollTop = 0,
         navbar = $('.navbar');

     $(window).scroll(function () {
        var a = $(window).scrollTop();
        var b = navbar.height();

        currentScrollTop = a;

        // if (c < currentScrollTop && a > b + b) {
        if (c < currentScrollTop && a > 100) {
          navbar.fadeOut();
        } else if (c > currentScrollTop && !(a <= b)) {
          navbar.fadeIn();
        }
        c = currentScrollTop;
    });

  });


  // **************************************    Animated Hamburer Menu Toggle   ******************************************

  (function () {
    var i, resize;
    // i = setInterval(function () {
    //   return $(".navbar-toggler").toggleClass("cross");
    // }, 1500);

    $(".navbar-toggler").click(function () {
      clearInterval(i);
      return $(".navbar-toggler").toggleClass("cross");
    });

    resize = function () {
      return $("body").css({
        "margin-top": ~~((window.innerHeight - 150) / 2) + "px" });
    };

    $(window).resize(resize);
    resize();
  }).call(this);
