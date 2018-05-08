<?php

	// Add RSS links to <head> section
	automatic_feed_links();

	// BEGIN - Load jQuery for havanastreettatoos.com

	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	    wp_register_script( 'jqueryJS', get_template_directory_uri() . '/css/jquery.min.js',array('jquery') );
	    wp_enqueue_script('jqueryJS');
	}

	// END - Load jQuery for havanastreettatoos.com

	// BEGIN - Load the Main Theme CSS
	function theme_styles() {
	    wp_enqueue_style( 'wordpress_core_style', get_template_directory_uri() . '/style.css' );
			wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
			wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-all.min.css' );
	    wp_enqueue_style( 'applicationcss', get_template_directory_uri() . '/css/application.min.css' );
	}

	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	// END - Load the Main Theme CSS


	// BEGIN - Load the Main Theme JS
	function theme_js() {
			wp_register_script( 'foundationjs', get_template_directory_uri() . '/js/foundation.min.js',array('jquery') );
			wp_register_script( 'application', get_template_directory_uri() . '/js/application.min.js',array('jquery') );

			wp_enqueue_script( 'foundationjs' );
    	wp_enqueue_script( 'application' );
	}

	add_action( 'wp_enqueue_scripts', 'theme_js' );

	// END - Load the Main Theme JS


	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

	// BEGIN - Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }


    add_filter( 'wp_feed_cache_transient_lifetime', create_function( '$a', 'return 1800;' ) );

	// END - Declare sidebar widget zone

	register_nav_menus(
		array(
		'main-nav' => 'Main Navigation Menu'
		)
	)

?>
