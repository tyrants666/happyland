//Navbar hide for different pages except Home
// $(function () {
//     $(window).scroll(function () {
//
//         // set distance user needs to scroll before we start fadeIn
//         if ($(this).scrollTop() > 200) {
//             $('.navbar').fadeOut();
//         } else {
//             $('.navbar').fadeIn();
//         }
//     });
// });


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
