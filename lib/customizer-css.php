<?php

function load_wst_customizer_css() {
	$css_wst = '';
	$subnav_bgcolor 			= get_theme_mod( 'subnav_bgcolor');
	$subnav_fcolor				= get_theme_mod('subnav_fcolor');
	$subnav_hover					= get_theme_mod('subnav_hover');
	$slider1_bg						=	get_theme_mod('slider1_bg');
	$slider1_title_color	= get_theme_mod('slider1_title_color');
	$slider1_text_color		= get_theme_mod('slider1_text_color');
	
	$css_wst .= '
		#portrait-item-one .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider1_title_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper .card-body p {
			color: '. $slider1_text_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper {
			background-color: '. $slider1_bg .';
		}
		#sub-nav-fp {
			background-color: ' . $subnav_bgcolor . ';
		}
		.navbar-light .navbar-nav.subnav .nav-link {
			color: '. $subnav_fcolor .';
		}
		.navbar-light .navbar-nav.subnav .nav-link:hover {
			color: '. $subnav_hover .';
		}
	';
	return $css_wst;
}
