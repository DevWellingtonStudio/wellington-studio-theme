<?php
/*
 * Adds custom short codes for theme features
 *
 * */

/* Parallax Scroll */

add_shortcode('prallax-scroll', 'parallax_scroll_shortcode');
function parallax_scroll_shortcode() {
	return '<div class="parallax-window" data-parallax="scroll" data-image-src="https://dev2.wellington-studio.com/wp-content/uploads/2020/10/BCZ-Map_D4-01-scaled.jpg"></div>';
}



