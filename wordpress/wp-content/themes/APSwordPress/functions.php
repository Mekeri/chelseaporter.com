<?php

	require_once('wp_bootstrap_navwalker.php');

	// register_nav_menus( array(
		// 'primary' => __( 'Primary Menu', 'demoTheme' ),
	// ) );
	
	// register_nav_menus( array(
		// 'tabNav' => __( 'Tab Menu', 'demoTheme' ),
	// ) );


// function wpdocs_filter_wp_title( $title, $sep ) {
    // global $paged, $page;
 
    // if ( is_feed() )
        // return $title;
 
    //Add the site name.
    // $title .= get_bloginfo( 'name' );
 
   // Add the site description for the home/front page.
    // $site_description = get_bloginfo( 'description', 'display' );
    // if ( $site_description && ( is_home() || is_front_page() ) )
        // $title = "$title $sep $site_description";
 
   // Add a page number if necessary.
    // if ( $paged >= 2 || $page >= 2 )
        // $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );
 
    // return $title;
// }
// add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

function APSoPC_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'APSoPC_resources')
	
?>