<?php

/**
 * JL MetroCafe's functions and definitions
 *
 * @package JL MetroCafe
 * @since JL MetroCafe 1.0
 */
 


if (!function_exists('setup_jl_metrocafe')) :
	
	function setup_jl_metrocafe() {

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

	}
endif;
add_action( 'after_setup_theme', 'setup_jl_metrocafe');


/**
	wp_enqueue_style
**/
function dwjl_scripts () {

	/****** CSS ******/

	//NORMALIZE
	wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css',[],'v3.0.3');
	//ANIMATE
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css',[],'v3.5.1');
	//POGO SLIDER
	wp_enqueue_style('pogo-slider',get_template_directory_uri().'/css/pogo-slider.css',[]);
	//OWL CAROUSEL
	wp_enqueue_style('owl.carousel.css',get_template_directory_uri().'/css/owl.carousel.css',[]);
	//DATEPICKER
	wp_enqueue_style('datepicker',get_template_directory_uri().'/css/datepicker.css',[]);
	//TIMEPICKER
	wp_enqueue_style('timepicker',get_template_directory_uri().'/css/timepicker.min.css',[]);
	//magnific-popup
	wp_enqueue_style('magnific-popup',get_template_directory_uri().'/css/magnific-popup.css',[]);
	//bootstrap.min.css
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',[],'v3.3.7');
	//FONTAWESOME
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css',[],'4.7.0');

	/****** JAVASCRIPT ******/
	//JQUERY
	wp_enqueue_script('jquery',get_template_directory_uri(). '/js/vendor/jquery-1.12.4.min.js', array(), 'v1.12.4', true);
	//BOOTSTRAP
	wp_enqueue_script('bootstrap',get_template_directory_uri(). '/js/vendor/bootstrap.min.js', array(), 'v3.3.7', true);
	//BOOTSTRAP
	wp_enqueue_script('jquery.easing',get_template_directory_uri(). '/js/vendor/jquery.easing.1.3.js', array(), 'v1.3', true);

}

add_action( 'wp_enqueue_scripts', 'dwjl_scripts' );