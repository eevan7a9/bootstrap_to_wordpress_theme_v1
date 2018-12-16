<?php

function e7a9_customize_register($wp_customize){
	$myThemeName = 'e7a9_bootstrap_v1';
	//-------------------------cover photo section
	$wp_customize->add_section('showcase', array(
		'title' => __('showcase', $myThemeName),
		'description' => sprintf(__('Options for Cover Photo and texts', 'e7a9_bootstrap_v1')),
		'priority' => 130
	));

	$wp_customize->add_setting('showcase_heading', array(
		'default' => _x('Feel Something', $myThemeName),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_heading', array(
		'label' => __('Cover Photo heading', $myThemeName),
		'section' => 'showcase',
		'setting' => 'showcase_heading',
		'priority' => 1
	));

	$wp_customize->add_setting('showcase_text', array(
		'default' => _x('Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, 
		consectetur, adipisci velit...', $myThemeName),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_text', array(
		'label' => __('Cover Photo text', $myThemeName),
		'section' => 'showcase',
		'setting' => 'showcase_text',
		'priority' => 2
	));

	$wp_customize->add_setting('showcase_btn_text', array(
		'default' => _x('More', $myThemeName),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_btn_text', array(
		'label' => __('Cover Photo Button', $myThemeName),
		'section' => 'showcase',
		'setting' => 'showcase_btn_text',
		'priority' => 3
	));

	$wp_customize->add_setting('showcase_btn_url', array(
		'default' => _x('http://test.com', $myThemeName),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_btn_url', array(
		'label' => __('Change Btn Url', $myThemeName),
		'section' => 'showcase',
		'setting' => 'showcase_btn_url',
		'priority' => 4
	));
	//add settings for cover Image
	$wp_customize->add_setting('showcase_photo', array(
		'default' => get_bloginfo('template_directory') . '/img/purple_light.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'showcase_photo',
			array(
				'label'      => __( 'Upload a Photo', $myThemeName ),
				'section'    => 'showcase',
				'settings'   => 'showcase_photo',
				'priority'   => 5
			)
		)
	);
	//---------------------------add Color customizer---------------------------

	$wp_customize->add_setting('navigation_bg_color', array(
		'default' => '#4a087c',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navigation_bg_color', array(
		'label' => __('Navigation Background Color', $myThemeName),
		'section' => 'colors', //access default Section
		'settings' => 'navigation_bg_color',
		'priority' => 30
	)));

	$wp_customize->add_setting('site_name', array(
		'default' => '#fff',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_name', array(
		'label' => __('Navigation Site Name Color', $myThemeName),
		'section' => 'colors', //access default Section
		'settings' => 'site_name',
		'priority' => 20
	)));

	$wp_customize->add_setting('button_color', array(
		'default' => '#4a087c',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_color', array(
		'label' => __('Cover Photo Button Color', $myThemeName),
		'section' => 'colors', //access default Section
		'settings' => 'button_color',
		'priority' => 40
	)));

	$wp_customize->add_setting('nav_link_color', array(
		'default' => '#fff',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_link_color', array(
		'label' => __('Navigation Text Color', $myThemeName),
		'section' => 'colors', //access default Section
		'settings' => 'nav_link_color',
		'priority' => 35
	)));


}
add_action('customize_register', 'e7a9_customize_register');