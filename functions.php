<?php

/*-----------------------------------------------------------------------------------*/
/* Register Core Stylesheets
/* These are necessary for the theme to function as intended
/*-----------------------------------------------------------------------------------*/
if ( !function_exists( 'wptheme_register_styles' ) ) {

	function wptheme_register_styles() {

		// Set a dynamic version for cache busting
		$theme = wp_get_theme();
		$version = $theme['Version'];
		$stylesheets = '';

		// Register stylesheets
	    $stylesheets .= wp_register_style('wptheme', get_stylesheet_directory_uri().'/style.css', array(), $version, 'screen, projection');

		// enqueue registered styles
		wp_enqueue_style('wptheme');

	}

add_action( 'wp_enqueue_scripts', 'wptheme_register_styles');

}


/*-----------------------------------------------------------------------------------*/
/* Register Core Javascript
/*-----------------------------------------------------------------------------------*/

if ( !function_exists( 'wptheme_register_scripts' ) ) {

	add_action('init', 'wptheme_register_scripts');
	function wptheme_register_scripts() {
		$javascripts  = wp_enqueue_script('jquery');
		$javascripts .= wp_enqueue_script('custom',get_template_directory_uri()."/js/main.min.js",array('jquery'),'1.2.3',true);
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		$javascripts  =  wp_enqueue_script( 'comment-reply' );
		}
		wp_enqueue_script($javascripts);
	}

	add_action( 'wp_enqueue_scripts', 'wptheme_register_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Added featured images support for theme
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );


/*-----------------------------------------------------------------------------------*/
/* Added Excerpts for PAGES
/*-----------------------------------------------------------------------------------*/	
add_post_type_support( 'page', 'excerpt' );


/*-----------------------------------------------------------------------------------*/
/* Remove Generator Tag/Version Number
/*-----------------------------------------------------------------------------------*/
function remove_version_number() {
     return '';
}

add_filter('the_generator', 'remove_version_number');


/*-----------------------------------------------------------------------------------*/
/* Init required files (Custom Post Types, Widgets etc.)
/*-----------------------------------------------------------------------------------*/
require_once ('includes/widget-init.php');