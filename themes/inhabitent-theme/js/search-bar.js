/**
 * search-bar.js
 *
 */

// Search Bar
jQuery(document).ready(function($){
  console.log('hello world');
	$('.fa-search').on('click', function(){
	  $('input[type=search]').toggle();
	 });
 });
