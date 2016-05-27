/**
 * sticky-header.js
 *
 */



jQuery(document).ready(function($){

// Sticky Header
   $window = $(window);
   $window.scroll(function() {
       if ($window.scrollTop() > 750) {
         $('header').addClass('site-header-fixed');
         $('header').removeClass('site-header');

       }else if ($window.scrollTop() < 750) {
         $('header').removeClass('site-header-fixed');
         $('header').addClass('site-header');
       }
    });

 });
