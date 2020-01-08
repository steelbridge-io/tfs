<?php
/**
 * Blog Template Customizer
 */
$wp_customize -> add_section(
	'blog_section',
		array (
			'title'					=> __('Blog Template'),
			'description'		=> __('Blog Template Features.'),
			'priority'			=> 80,
			'active_callback'		=> function() { return is_page_template('page-templates/blog-template.php');}
		)
	);
	
$wp_customize -> add_setting(
	'blog_logo',
		array (
			'default'						=> '',
			'type'							=> 'theme_mod',
			'capability'				=> 'edit_theme_options',
			'transport'					=> 'refresh'
		)
	);
	
$wp_customize -> add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'blog_logo',
			array (
				'label' 							=> __('Blog Logo Upload'),
				'section'							=> 'blog_section',
				'settings'						=> 'blog_logo',
				'priority'						=> 10,
				'sanitize_callback'		=> 'themepatio_sanitize_image'
			)
		)
	);
