<?php 
/*-----------------------------------------------------------------------------------*/
/* Init Widgets
/*-----------------------------------------------------------------------------------*/

if ( !function_exists( 'wptheme_widgets_init' ) ) {

function wptheme_widgets_init() {
		// Area 1, located at the top of the sidebar.
		register_sidebar( array(
		'name' => __( 'Posts Widget Area', 'wptheme' ),
		'id' => 'primary-widget',
		'description' => __( 'Shown only in Blog Posts, Archives, Categories, etc.', 'wptheme' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Pages Widget Area', 'wptheme' ),
		'id' => 'secondary-widget',
		'description' => __( 'Shown only in Pages', 'wptheme' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'wptheme' ),
		'id' => 'first-footer-widget',
		'description' => __( 'The first footer widget area', 'wptheme' ),
		'before_widget' => '<div class="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'wptheme' ),
		'id' => 'second-footer-widget',
		'description' => __( 'The second footer widget area', 'wptheme' ),
		'before_widget' => '<div class="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'wptheme' ),
		'id' => 'third-footer-widget',
		'description' => __( 'The third footer widget area', 'wptheme' ),
		'before_widget' => '<div class="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 6, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'wptheme' ),
		'id' => 'fourth-footer-widget',
		'description' => __( 'The fourth footer widget area', 'wptheme' ),
		'before_widget' => '<div class="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

/** Register sidebars by running wptheme_widgets_init() on the widgets_init hook. */

add_action( 'widgets_init', 'wptheme_widgets_init' );

}

