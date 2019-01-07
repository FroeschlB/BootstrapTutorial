<?php

	function theme_styles() {
		wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles');

	function theme_js() {
		wp_enqueue_script( 'jQuery_js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	        wp_enqueue_script( 'pooper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js');
	        wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js');
	}
	add_action( 'wp_enqueue_scripts', 'theme_js');

	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

?>
