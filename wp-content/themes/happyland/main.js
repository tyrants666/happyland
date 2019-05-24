
// **************************************** jQuery *****************************************************


  $(document).ready(function(){

    //Toggle Sidebar
    $('.navbar-toggle').on('click', function(){
        $(".sidepanel").toggleClass("w-250 w-0");
    });


    // Carousel Bootstrap //

          //interval
          $('.carousel').carousel({
            interval: 2000
          });
          //Prev
          $(".carousel-control-prev").click(function(){
            $("#carouselExampleSlidesOnly").carousel("prev");
          });
          //Next
          $(".carousel-control-next").click(function(){
            $("#carouselExampleSlidesOnly").carousel("next");
          });

    //New


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

    $(".navbar-toggle").click(function () {
      clearInterval(i);
      return $(".navbar-toggle").toggleClass("cross");
    });

    resize = function () {
      return $("body").css({
        "margin-top": ~~((window.innerHeight - 150) / 2) + "px" });
    };

    $(window).resize(resize);
    resize();
  }).call(this);

  // **************************************   Select change Download page  ******************************************

    function change(){
      var x = document.getElementById("select1").value;
      var y = document.getElementById("select2").value;

      if (x == 1 && y == "a") {
          $('.anchor').attr("href", a1);
      }
      else if (x == 1 && y == "b") {
          $('.anchor').attr("href", b1);
      }
      else if (x == 1 && y == "c") {
          $('.anchor').attr("href", c1);
      }
      else if (x == 2 && y == "a") {
          $('.anchor').attr("href", a2);
      }
      else if (x == 2 && y == "b") {
          $('.anchor').attr("href", b2);
      }
      else if (x == 2 && y == "c") {
          $('.anchor').attr("href", c2);
      }
      else if (x == 3 && y == "a") {
          $('.anchor').attr("href", a3);
      }
      else if (x == 3 && y == "b") {
          $('.anchor').attr("href", b3);
      }
      else if (x == 3 && y == "c") {
          $('.anchor').attr("href", c3);
      }
      else if (x == 4 && y == "a") {
          $('.anchor').attr("href", a4);
      }
      else if (x == 4 && y == "b") {
          $('.anchor').attr("href", b4);
      }
      else if (x == 4 && y == "c") {
          $('.anchor').attr("href", c4);
      }
      else if (x == 5 && y == "a") {
          $('.anchor').attr("href", a5);
      }
      else if (x == 5 && y == "b") {
          $('.anchor').attr("href", b5);
      }
      else if (x == 5 && y == "c") {
          $('.anchor').attr("href", c5);
      }
      else if (x == 6 && y == "a") {
          $('.anchor').attr("href", a6);
      }
      else if (x == 6 && y == "b") {
          $('.anchor').attr("href", b6);
      }
      else if (x == 6 && y == "c") {
          $('.anchor').attr("href", c6);
      }
      else if (x == 7 && y == "a") {
          $('.anchor').attr("href", a7);
      }
      else if (x == 7 && y == "b") {
          $('.anchor').attr("href", b7);
      }
      else if (x == 7 && y == "c") {
          $('.anchor').attr("href", c7);
      }
      else if (x == 8 && y == "a") {
          $('.anchor').attr("href", a8);
      }
      else if (x == 8 && y == "b") {
          $('.anchor').attr("href", b8);
      }
      else if (x == 8 && y == "c") {
          $('.anchor').attr("href", c8);
      }
      else if (x == 9 && y == "a") {
          $('.anchor').attr("href", a9);
      }
      else if (x == 9 && y == "b") {
          $('.anchor').attr("href", b9);
      }
      else if (x == 9 && y == "c") {
          $('.anchor').attr("href", c9);
      }
      else if (x == 10 && y == "a") {
          $('.anchor').attr("href", a10);
      }
      else if (x == 10 && y == "b") {
          $('.anchor').attr("href", b10);
      }
      else if (x == 10 && y == "c") {
          $('.anchor').attr("href", c10);
      }
      else if (x == 11 && y == "science") {
          $('.anchor').attr("href", s11);
      }
      else if (x == 11 && y == "commerce") {
          $('.anchor').attr("href", c11);
      }
      else if (x == 12 && y == "science") {
          $('.anchor').attr("href", s12);
      }
      else if (x == 12 && y == "commerce") {
          $('.anchor').attr("href", c12);
      }

    }
