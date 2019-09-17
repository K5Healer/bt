
$( document ).ready(function() {
  "use strict";
  function slideMenuMobile(){
    $('.js-btn-menu-mobile').on('click', function() {
      $('.js-menu-mobile').toggleClass('active');
      $('.js-background-overlay').toggleClass('active');
    });

    $('.js-menu-mobile-close').on('click', function() {
      $('.js-menu-mobile').removeClass('active');
      $('.js-background-overlay').removeClass('active');
    });

    $('.js-background-overlay').on('click', function() {
      $(this).removeClass('active');
      $('.js-menu-mobile').removeClass('active');
    });
  }

  function slideMenuMobile2() {
    $('.js-btn-menu-mobiles').on('click', function() {
      $('.js-menu-mobiles').toggleClass('active');
      $('.js-background-overlay').toggleClass('active');
    });

    $('.js-menu-mobile-closes').on('click', function() {
      $('.js-menu-mobiles').removeClass('active');
      $('.js-background-overlay').removeClass('active');
    });

    $('.js-background-overlay').on('click', function() {
      $(this).removeClass('active');
      $('.js-menu-mobiles').removeClass('active');
    });
  }
  function dropAngleDown() {
    $('.drop-angle').on('click', function() {
      $(this).toggleClass('active');
     
    });
      }


  slideMenuMobile();
  slideMenuMobile2();
  dropAngleDown();



});
