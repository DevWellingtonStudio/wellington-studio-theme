<?php

function load_wst_customizer_css() {
	$css_wst = '';
	$subnav_bgcolor = get_theme_mod ( 'subnav_bgcolor');
	$css_wst .= '
		#sub-nav-fp {
			background-color: ' . $subnav_bgcolor . ';
		}
	';
	return $css_wst;
}
