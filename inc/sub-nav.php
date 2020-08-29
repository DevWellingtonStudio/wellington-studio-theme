<?php
/* Sub Nav Customizer */
// Add Front Page Section
$wp_customize->add_section( 'subNav', array(
	'title' => __( 'Sub Navigation', 'bootstrap-for-genesis' ),
	'priority' => 10
));
// Sub-Nav Background Color Picker
$wp_customize->add_setting ( 'subnav_bgcolor', array(
	'default'						=> '#ccc',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));

// Sub-Nav Background Color Picker
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'subnav_bgcolor', array(
			'label'			=> __('Sub-Nav Background Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'subNav',
			'settings'	=> 'subnav_bgcolor'
		)
	)
);
