<?php

/*** THEME OPTIONS ***/
if ( !function_exists( 'of_get_option' ) )
{
	function of_get_option($name, $default = false)
	{

		$optionsframework_settings = get_option('optionsframework');

		// Gets the unique option id
		$option_name = $optionsframework_settings['id'];

		if ( get_option($option_name) )
		{
			$options = get_option($option_name);
		}

		if ( isset($options[$name]) )
		{
			return $options[$name];
		}
		else
		{
			return $default;
		}
	}
}


/*** REGISTER MENUS ***/
//Navigation
function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __( 'Main Menu' ),      
      'mobile-menu' => __( 'Mobile Menu' )	
    )
  );
}
add_action( 'init', 'register_my_menus' );




/*** SHORTCODES ***/

/**PLAY TUTORIAL BUTTON**/
/***[tut_button video="http://" label="LABEL"] **/
function load_tut_button($atts)
{
		extract( shortcode_atts(
		array(
			'video' => '',
			'label' => ''
		), $atts ));
		ob_start();
		?>
			<a href="<?php echo $video; ?>" rel="lightbox" >
				<button class="tut-button">
					<?php echo $label; ?>
				</button>	
			</a>
		<?php	
		
		return ob_get_clean();
} 
add_shortcode("tut_button","load_tut_button");


/*** REGISTER BUTTONS ****/
function register_button( $buttons ) {
   array_push( $buttons, "|", "tut_button" );
   return $buttons;
}
function add_plugin( $plugin_array ) {
   $plugin_array['tut_button'] = get_template_directory_uri() . '/js/tut_button.js';
   return $plugin_array;
}
function tut_button() {

   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }

   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_plugin' );
      add_filter( 'mce_buttons', 'register_button' );
   }

}
add_action('init', 'tut_button');


/*** VIDEO CATEGORY CUSTOM POST TYPE ***/
function create_posttype() {
	register_post_type( 'video_category',
		array(
			'labels' => array(
				'name' => __( 'Video Categories' ),
				'singular_name' => __( 'Video Categories' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'video_category'),
			'hierarchical' => true
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_posttype' );

