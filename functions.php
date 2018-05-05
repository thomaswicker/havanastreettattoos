<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// BEGIN - Load jQuery for thomaswicker.com
	
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	    wp_register_script( 'jqueryJS', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js',array('jquery') );
	   	wp_enqueue_script('jqueryJS');
	}

	// END - Load jQuery for thomaswicker.com



	// BEGIN - Custom FadeIn for Login page

	add_action( 'login_head', 'untame_fadein',30);

	function untame_fadein() {
	echo '<script type="text/javascript">// <![CDATA[
	jQuery(document).ready(function() { jQuery("#loginform,#nav,#backtoblog, #login").css("display", "none"); jQuery("#loginform,#nav,#backtoblog, #login").fadeIn(1500);     
	});
	// ]]></script>';
	}
	// END - Custom FadeIn for Login page



	// BEGIN - Load the Custom Login Theme JS
	add_action('login_head', 'custom_login_css');

	function custom_login_css() {
		echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/custom-login.css" />';
	}
	// Load custom URL for the new logo
	add_filter( 'login_headerurl', 'custom_login_header_url' );
		function custom_login_header_url($url) {
		return 'http://www.thomaswicker.com/';
	}
	// END - Load the Custom Login Theme JS


	// BEGIN - Load the Main Theme CSS
	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	function theme_styles() {
	    wp_enqueue_style( 'wordpress_core_style', get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Parisienne' ); 
	    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/bower_components/foundation/css/foundation.css' );
	    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
	}

	// END - Load the Main Theme CSS


	// BEGIN - Load the Main Theme JS
	add_action( 'wp_enqueue_scripts', 'theme_js' );

	function theme_js() {

	    wp_register_script( 'modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js',array('jquery') );
	    wp_register_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js',array('jquery') );
	    wp_register_script( 'scripts', get_template_directory_uri() . '/js/script.js',array('jquery') );
	   
	    wp_enqueue_script( 'modernizr' );
    	wp_enqueue_script( 'foundation' );
    	wp_enqueue_script( 'scripts' );
	}
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