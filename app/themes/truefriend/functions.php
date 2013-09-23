<?php
	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( get_template_directory() . '/lib/admin.php' );
	require_once( get_template_directory() . '/lib/custom_post_types_taxonomies.php' );
	require_once( get_template_directory() . '/lib/media.php' );
	require_once( get_template_directory() . '/lib/navigation.php' );
	require_once( get_template_directory() . '/lib/utilities.php' );
	require_once( get_template_directory() . '/lib/gravity_forms.php' );
	require_once( get_template_directory() . '/lib/comments.php' );
	// require_once( get_template_directory() . '/lib/init.php' );
	// require_once( get_template_directory() . '/lib/theme-helpers.php' );
	// require_once( get_template_directory() . '/lib/theme-functions.php' );
	// require_once( get_template_directory() . '/lib/theme-comments.php' );


	/* ========================================================================================================================
	
	Navigation Menus
	
	======================================================================================================================== */

	register_nav_menus( array(
		'main' => 'Main Navigation Menu',
		'secondary' => 'Secondary Navigation Menu',
		'social' => 'Social Navigation Menu',

	) );

	/* ========================================================================================================================
	
	Define Widgetized Areas
	
	======================================================================================================================== */

	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => __('This is the default widget area for the sidebar. This will be displayed if the other sidebars have not been populated with widgets.', 'cartogram'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 */
	function cartogram_scripts() {
//		wp_deregister_script('jquery');

		wp_register_script( 'modernizr', get_template_directory_uri().'/scripts/modernizr.cartogram.js', NULL , NULL, NULL );
		wp_enqueue_script( 'modernizr' );

		wp_register_script( 'app', get_template_directory_uri().'/scripts/cartogram.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'app' );
		
		wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );

        gravity_form_enqueue_scripts(1, true);

        if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) {
			wp_enqueue_script( 'comment-reply' );
        }
	}	
	add_filter("gform_init_scripts_footer", "init_scripts");
	function init_scripts() {
		return true;
	}

	/* ========================================================================================================================
	
	Images

	- Set thumbnail sizes and add any additional featured images.
	
	======================================================================================================================== */
	/*
	For 1x1: 200x200, 410x410, 620x620
	For 2x1: 410x200, 830x410
	For 3x2: 620x410 (H) and 410x620 (V)
	For 4x3: 830x620 (H) and 620x830 (V)
	*/

	add_theme_support('post-thumbnails');
	add_image_size('cartogram_small',800, 800, true);
	add_image_size('cartogram_medium',800, 800, true);
	add_image_size('cartogram_large',1500, 1500, true);

	
	/* ========================================================================================================================
	
	Call Everthing!

	- Put all Hooks (actions/filters/etc) in one place.
	
	======================================================================================================================== */

	/**
	 * Scripts
	 *
	 **/
	add_action( 'wp_enqueue_scripts', 'cartogram_scripts' );
	// Clean up the head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_shortlink_wp_head');
	// Remove Query Strings From Static Resources
	add_filter('script_loader_src', 'landing_remove_script_version', 15, 1);
	add_filter('style_loader_src', 'landing_remove_script_version', 15, 1);


	/**
	 * Post types and taxonomies
	 *
	 **/
	add_action( 'init', 'create_post_types' );
	add_action( 'init', 'create_taxonomies' );
	
	/**
	 * Classes
	 *
	 **/
	add_filter( 'body_class', 'add_slug_to_body_class' );

	/**
	 * Content
	 *
	 **/
	add_filter('the_excerpt', 'excerpt_ellipsis');
	add_filter('the_content', 'cartogram_remove_more_link');
	add_action('the_content', 'add_video_containers');
		/**
		 * Shortcodes
		 *
		 **/
		add_shortcode('button', 'cartogram_button');
		add_shortcode('flex-video', 'cartogram_flexVideo');
		add_shortcode('slideshow', 'cartogram_slideshow');

		/**
		 * Other
		 *
		 **/	
		remove_filter('term_description','wpautop');	

	/**
	 * Theme Parts
	 *
	 **/
	
	/**
	 * Admin
	 *
	 **/
	add_filter( 'tiny_mce_before_init', 'landing_unhide_kitchensink' );
	add_action('wp_dashboard_setup', 'landing_remove_dashboard_widgets' );
	add_filter('custom_menu_order', 'landing_custom_menu_order');
	add_filter('menu_order', 'landing_custom_menu_order');
	add_action( 'admin_menu', 'landing_remove_menu_pages' );

	/**
	 * Require Plugins
	 *
	 **/

	require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
	require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

	add_action( 'tgmpa_register', 'mb_register_required_plugins' );

	/**
	 * Gravity Forms
	 *
	 **/
	add_filter("gform_submit_button", "cartogram_form_submit_button", 10, 2);
	add_filter('gform_pre_render', 'cartogram_pre_render_script');
	add_filter( 'gform_ajax_spinner_url', 'cartogram_custom_gforms_spinner' );
	
	/**
	 * Comments
	 *
	 **/


	/* ========================================================================================================================
	
	Custom Stuff
	
	======================================================================================================================== */

	// add_theme_support( 'woocommerce' );

?>