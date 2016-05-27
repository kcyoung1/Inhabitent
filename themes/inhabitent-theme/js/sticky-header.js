/**
 * sticky-header.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */

 $(document).ready(function($){
   $window = $(window);
   $window.scroll(function() {
     $scroll_position = $window.scrollTop();
       if ($scroll_position > 750 && $('body').hasClass('.home, .page-template-about, .single-adventure')) { // if body is scrolled down by 750 pixels
           $('#masthead').addClass('.site-header-fixed');
           $('#masthead').addClass('.site-title-fixed');
           $('#masthead').removeClass('.site-header');
           $('#masthead').removeClass('.site-title');


           // to get rid of jerk
           header_height = $('.your-header').innerHeight();
           $('body').css('padding-top' , header_height);
       } else if ($scroll_position < 750 && $('body').hasClass('.home, .page-template-about, .single-adventure')){
         $('#masthead').removeClass('.site-header-fixed');
         $('#masthead').removeClass('.site-title-fixed');
         $('#masthead').addClass('.site-header');
         $('#masthead').addClass('.site-title');
       }
    });
 });



// CSS FOR sticky

// .sticky {
//   position: fixed;
//   z-index: 9999;
//   width: 100%;
// }

// PHP FUNCTION FOR sticky

// function add_my_script() {
//     wp_enqueue_script(
//         'sticky-header', // name your script so that you can attach other scripts and de-register, etc.
//         get_template_directory_uri() . '/js/sticky-header.js', // this is the location of your script file
//         array('jquery') // this array lists the scripts upon which your script depends
//     );
// }
// add_action( 'wp_enqueue_scripts', 'add_my_script' );
