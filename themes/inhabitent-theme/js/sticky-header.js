$window = $(window);
$window.scroll(function() {
  $scroll_position = $window.scrollTop();
    if ($scroll_position > 300) { // if body is scrolled down by 300 pixels
        $('.your-header').addClass('sticky');

        // to get rid of jerk
        header_height = $('.your-header').innerHeight();
        $('body').css('padding-top' , header_height);
    } else {
        $('body').css('padding-top' , '0');
        $('.your-header').removeClass('sticky');
    }
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
