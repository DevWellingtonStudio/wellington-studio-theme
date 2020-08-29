<?php

function load_wst_customizer_css() {
	$css_wst = '';
	$subnav_bgcolor = get_theme_mod( 'subnav_bgcolor');
	$subnav_fcolor	= get_theme_mod('subnav_fcolor');
	$css_wst .= '
		#sub-nav-fp {
			background-color: ' . $subnav_bgcolor . ';
		}
		.subnav li a {
			color: '. $subnav_fcolor .';
		}
	';
	return $css_wst;
}
