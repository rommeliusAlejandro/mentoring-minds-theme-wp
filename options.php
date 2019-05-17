<?php
/**
* The theme option name is set as 'options-theme-customizer' here.
* In your own project, you should use a different option name.
* I'd recommend using the name of your theme.
*
* This option name will be used later when we set up the options
* for the front end theme customizer.
*/

function optionsframework_option_name() {

$optionsframework_settings = get_option('optionsframework');

// Edit 'options-theme-customizer' and set your own theme name instead
$optionsframework_settings['id'] = 'options_theme_customizer';
update_option('optionsframework', $optionsframework_settings);
}

/**
* Defines an array of options that will be used to generate the settings page and be saved in the database.
* When creating the "id" fields, make sure to use all lowercase and no spaces.
*/

function optionsframework_options() {

// Test data
$test_array = array(
"First" => "First Option",
"Second" => "Second Option",
"Third" => "Third Option" );

$options = array();

$options[] = array( "name" => "Theme Settings",
"type" => "heading" );

$options['slogan'] = array(
"name" => "Slogan",
"id" => "slogan",
"type" => "upload" );

$options['logo'] = array(
"name" => "Choose Logo",
"desc" => "Upload your logo",
"id" => "logo",
"type" => "upload" );

$options['favicon'] = array(
"name" => "Choose Favicon",
"desc" => "Upload your favicon",
"id" => "favicon",
"type" => "upload" );

$options['mobile-logo'] = array(
"name" => "Choose You Mobile Version Menu Logo",
"desc" => "Upload your logo",
"id" => "mobile-logo",
"type" => "upload" );

$options['top_title_image'] = array(
"name" => "Top Title Image",
"desc" => "Upload your image for the showcase",
"id" => "top_title_image",
"type" => "upload" );

$options['top_title_text_1'] = array(
"name" => "Top Title Text 1",
"id" => "top_title_text_1",
"std" => " ",
"type" => "text" );

$options['top_title_text_2'] = array(
"name" => "Top Title Text 2",
"id" => "top_title_text_2",
"std" => " ",
"type" => "text" );

$options['top_title_text_3'] = array(
"name" => "Top Title Text 3",
"id" => "top_title_text_3",
"std" => " ",
"type" => "textarea" );




return $options;
}

/**
* Front End Customizer
*
* WordPress 3.4 Required
*/

add_action( 'customize_register', 'options_theme_customizer_register' );

function options_theme_customizer_register($wp_customize) {

/**
* This is optional, but if you want to reuse some of the defaults
* or values you already have built in the options panel, you
* can load them into $options for easy reference
*/

$options = optionsframework_options();

/* Basic */

	
}