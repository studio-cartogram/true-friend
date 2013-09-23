<?php

	/* ========================================================================================================================
	
	Cartogram Gravity Form Helpers v.1.0
	
	======================================================================================================================== */

	function cartogram_form_submit_button($button, $form){
	    return "<button class='button' id='gform_submit_button_{$form["id"]}'><span>Submit</span></button>";
	}

	

	function cartogram_pre_render_script($form) {
	 
	    if( !wp_script_is( 'gforms_gravityforms' ) )
	        wp_enqueue_script("gforms_gravityforms", GFCommon::get_base_url() . "/js/gravityforms.js", array("app"), GFCommon::$version, true);
	 
	    $script = "formElements.init();";
	 
	    GFFormDisplay::add_init_script( $form['id'], 'format_money', GFFormDisplay::ON_PAGE_RENDER, $script );
	 
	    return $form;
	}

	/**
	 * Changes the default Gravity Forms AJAX spinner.
	 *
	 * @since 1.0.0
	 *
	 * @param string $src The default spinner URL
	 * @return string $src The new spinner URL
	 */
	function cartogram_custom_gforms_spinner( $src ) {
	 
	    return get_stylesheet_directory_uri() . '/images/loader.gif';
	    
	}