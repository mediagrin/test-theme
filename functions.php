<?php
	
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'custom-background' ); 
	
	
	define ('VERSION', '1.6');

	function version_id() {
		if ( WP_DEBUG )
			return time();
			return VERSION;
	}
	
	
	function reg_scripts() {
		// Load CSS
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	    //wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrapstyle', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.5.0' );
		wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css', version_id());
		wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0' );
		
		// wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/jssocials.css', version_id());
		// wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/jssocials-theme-flat.css', version_id());

		
	    
	    // Load JS
	    wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-3.2.1.slim.min.js", true);
		wp_enqueue_script('jquery');
	    
	    // Load additional JS
		//wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), version_id(), true );
		

		wp_register_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), version_id(), true );
		wp_enqueue_script( 'popper-js' );


		wp_register_script( 'bootstrap-script', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), version_id(), true );
		wp_enqueue_script( 'bootstrap-script' );
	    
	    
	    // wp_register_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array( 'jquery' ), version_id(), true );
		// wp_enqueue_script( 'jquery-easing' );
		
			
		// wp_register_script( 'mobile-custom', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array( 'jquery' ), version_id(), true );
		// wp_enqueue_script( 'mobile-custom' );


		// wp_register_script( 'jcarousel', get_template_directory_uri() . '/js/jquery.jcarousel.min.js', array( 'jquery' ), version_id(), true );
		// wp_enqueue_script( 'jcarousel' );

		// wp_register_script( 'jcarousel-control', get_template_directory_uri() . '/js/jquery.jcarousel-control.min.js', array( 'jquery' ), version_id(), true );
		// wp_enqueue_script( 'jcarousel-control' );

		// wp_register_script( 'jcarousel-swipe', get_template_directory_uri() . '/js/jquery.jcarousel-swipe.min.js', array( 'jquery' ), version_id(), true );
		// wp_enqueue_script( 'jcarousel-swipe' );


		// wp_register_script( 'jssocials', get_template_directory_uri() . '/js/jssocials.js', array( 'jquery' ), version_id(), true );
		// wp_enqueue_script( 'jssocials' );
		
		
		

			
		// Dev and localhost	
		//wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCssgbQpypWfck5lNWM7GTPkyiciKc04dI', array(), '3', true );
		
		// Dev
		//wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?libraries=AIzaSyDSO1zt89rf2DwBNUo655zfsA5ungVDlI0', array(), '3', true );
		
		
		//Live site
		//wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCC_jB3tkLvcvUuQy9TZZqwAEGsFbUEI5w', array(), '3', true );

	  	// wp_register_script( 'google-map-init', get_template_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
	  	// wp_enqueue_script( 'google-map-init' );


		wp_register_script( 'custom-script', get_template_directory_uri() . '/js/sitejs-min.js', array( 'jquery' ), version_id(), true );
		wp_enqueue_script( 'custom-script' );
	}
	add_action('wp_enqueue_scripts', 'reg_scripts');


	function fix_gmaps_api_key() {
		if(mb_strlen(acf_get_setting("google_api_key")) <= 0){
			acf_update_setting("google_api_key", "AIzaSyCssgbQpypWfck5lNWM7GTPkyiciKc04dI");
		}
	}
	add_action( 'admin_enqueue_scripts', 'fix_gmaps_api_key' );
	
	
	
	// Register Custom Navigation Walker
	require_once('wp_bootstrap4_navwalker.php');
	
	
	register_nav_menus( array(
	    'primary' 		=> __( 'Primary Menu', 'Mediagrin - Bootstrap' ),
	    //'investors' 	=> __( 'Investors Menu', 'Mediagrin - Bootstrap' ),
	    'footer' 		=> __( 'Footer Menu', 'Mediagrin - Bootstrap' ),
	) );
	

	// Add Li items to end of Footer menu	
//	add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
//	function your_custom_menu_item ( $items, $args ) {
//	    if ($args->theme_location == 'footer') {
//		    
//		    $items .= "<li>Website last updated on ".get_the_modified_date('d/m/Y')."</li>";
//
//	    }
//	    return $items;
//	}
	
	
		
	
	// function bootstrap_responsive_images( $html ){
	// 	$classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'
	// 	// check if there are already classes assigned to the anchor
	// 	if ( preg_match('/<img.*? class="/', $html) ) {
	// 		$html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
	// 	} else {
	// 		$html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
	// 	}
	// 	// remove dimensions from images,, does not need it!
	// 	//$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	// 	return $html;
	// }
	// add_filter( 'the_content','bootstrap_responsive_images',10 );
	// add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );
	
	
	
	if( function_exists('acf_add_options_page') ) {
	 
		$page = acf_add_options_page(array(
			'page_title' 	=> 'Global Elements',
			'menu_title' 	=> 'Global Elements',
			'menu_slug' 	=> 'global-elements-settings',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
		));
	 
	}
	
	
	
	function prefix_reset_metabox_positions(){
		delete_user_meta( 1, 'meta-box-order_post' );
		delete_user_meta( 1, 'meta-box-order_page' );
		delete_user_meta( 1, 'meta-box-order_custom_post_type' );
	}
	add_action( 'admin_init', 'prefix_reset_metabox_positions' );
	
	
	
	
	
	
	
	
	
	function remove_default_image_sizes( $sizes) {
	    //unset( $sizes['thumbnail']);  // Keep this as its used in the media section of the CMS
	    //unset( $sizes['medium']);
	    //unset( $sizes['large']);
	     
	    return $sizes;
	}
	add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');
	
	
	function add_image_sizes()
	{
		if ( function_exists( 'add_image_size' ) ) { 
			//add_image_size( 'gallery', 300, 9999 ); //300 pixels wide (and unlimited height)
			//add_image_size( 'series', 500, 750, true ); //(cropped)
			add_image_size( 'series_p', 600, 900, true ); //(cropped)
			add_image_size( 'series_l', 1000, 600, true ); //(cropped)
			//add_image_size( 'history', 435, 150, true ); //(cropped)
	    }
	}
	add_action('after_setup_theme', 'add_image_sizes');
	
	
	
	
	
	
// function wpdocs_excerpt_more( $more ) {
// 	if (is_page(2) ) {
// 		return '';
// 	}
// }
// add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
	
	
	

	
	
	function custom_excerpt_length( $length ) {
       return 42;
   }
   add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	
	
	function new_excerpt_more( $more ) {
		return '';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	
	
	// Gravity forms - add option to hide field labels
	
	add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );
	
	add_filter( 'gform_confirmation_anchor', '__return_true' );
	
	
	
	
	
	// if ( function_exists('register_sidebar') )
	// 	register_sidebar(array(
	// 	'name' => 'Home Twitter',
	// 	'before_widget' => '<div class = "widgetizedArea">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h3>',
	// 	'after_title' => '</h3>',
	// 	)
	// );
  

	
	
	function is_post_type($type){
	    global $wp_query;
	    if($type == get_post_type($wp_query->post->ID)) return true;
	    return false;
	}
	
	
	
	// Move Yoast to bottom
	function yoasttobottom() {
		return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'yoasttobottom');
	

	
	//if( !current_user_can('administrator') ) {
		function we_remove_avhcatgrp_metabox() {
			remove_meta_box('avhec_catgroupdiv', 'post', 'normal');
			remove_meta_box('avhec_catgroupdiv', 'page', 'normal');
		}
	//}
	add_action( 'admin_menu', 'we_remove_avhcatgrp_metabox' );
	
	
	
	
	// Prevent page scroll on Gravity Form submission	
	//add_filter("gform_confirmation_anchor", create_function("","return true;"));
	
	
		
	
	// add_filter('ysacf_exclude_fields', function(){
	//     return array(
	//         'text_color',
	//         'background_image'
	//     );
	// });
	
	
	
	
	

//	function my_acf_init() {
//		acf_update_setting('google_api_key', 'AIzaSyB-hhwMxfJtC0U9HMuQRjPQpXpdZRvhwtI');
//	}
//	
//	add_action('acf/init', 'my_acf_init');	


	function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
		$content = get_the_content($more_link_text, $stripteaser, $more_file);
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		return $content;
	}
	
	
	
	// allow html in category and taxonomy descriptions
	// remove_filter( 'pre_term_description', 'wp_filter_kses' );
	// remove_filter( 'pre_link_description', 'wp_filter_kses' );
	// remove_filter( 'pre_link_notes', 'wp_filter_kses' );
	// remove_filter( 'term_description', 'wp_kses_data' );



	/**
 * Remove Rev Slider Metabox
 */
// if ( is_admin() ) {
	
// 	function remove_revolution_slider_meta_boxes() {
// 		remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
// 		remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
// 		//remove_meta_box( 'mymetabox_revslider_0', 'YOUR_CUSTOM_POST_TYPE', 'normal' );
// 	}
// 	add_action( 'do_meta_boxes', 'remove_revolution_slider_meta_boxes' );
// }

