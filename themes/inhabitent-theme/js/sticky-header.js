/**
 * sticky-header.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */

jQuery(document).ready(function($){

   $window = $(window);
   $window.scroll(function() {
       if ($window.scrollTop() > 750 && $('body').is('.home, .page-template-about, .single-adventure')) {
         $('header').addClass('site-header-fixed');
         $('header').removeClass('site-header');

       }else if ($window.scrollTop() < 750 && $('body').is('.home, .page-template-about, .single-adventure')) {
         $('header').removeClass('site-header-fixed');
         $('header').addClass('site-header');
       }
    });
 });
