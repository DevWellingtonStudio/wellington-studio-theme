<?php
/*
 * Adds custom short codes for theme features
 *
 * */

/* Parallax Scroll */

add_action('genesis_before_footer', 'add_parallax_effect', 5);
function add_parallax_effect() {
	echo '<div class="parallax-window" data-parallax="scroll" data-image-src="https://dev2.wellington-studio.com/wp-content/uploads/2020/10/BCZ-Map_D4-01-scaled.jpg"></div>';
}



