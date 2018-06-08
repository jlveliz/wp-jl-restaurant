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

	//MAIN STYLE
	wp_enqueue_style('jl-restaurant',get_template_directory_uri());

	/****** JAVASCRIPT ******/
	//JQUERY
	wp_enqueue_script('jquery',get_template_directory_uri(). '/js/vendor/jquery-1.12.4.min.js', array(), 'v1.12.4', true);
	//BOOTSTRAP
	wp_enqueue_script('bootstrap',get_template_directory_uri(). '/js/vendor/bootstrap.min.js', array(), 'v3.3.7', true);
	//JQUERY EASING
	wp_enqueue_script('jquery.easing',get_template_directory_uri(). '/js/vendor/jquery.easing.1.3.js', array(), 'v1.3', true);
	//JQUERY-POGO
	wp_enqueue_script('jquery.pogo-slider',get_template_directory_uri(). '/js/jquery.pogo-slider.js', array(), 'v1.2.1', true);
	//OWL
	wp_enqueue_script('owl',get_template_directory_uri(). '/js/owl.carousel.min.js', array(), '', true);
	//STELLAR
	wp_enqueue_script('stellar',get_template_directory_uri(). '/js/stellar.js', array(), 'v0.6.2', true);
	//Jquery.mixitup
	wp_enqueue_script('jquery.mixitup',get_template_directory_uri(). '/js/jquery.mixitup.min.js', array(), 'v2.1.11', true);
	//INSTAFEED
	wp_enqueue_script('instafeed',get_template_directory_uri(). '/js/instafeed.min.js', array(), 'v2.1.11', true);
	//DATEPICKER
	wp_enqueue_script('datepicker',get_template_directory_uri(). '/js/datepicker.min.js', array(), 'v1.0', true);
	//TIMEPICKER
	wp_enqueue_script('timepicker',get_template_directory_uri(). '/js/timepicker.min.js', array(), 'v0.0.7', true);//WOW
	wp_enqueue_script('wow',get_template_directory_uri(). '/js/wow.min.js', array(), 'v1.1.2', true);
	//Jquery.magnific-popup
	wp_enqueue_script('magnific-popup',get_template_directory_uri(). '/js/jquery.magnific-popup.min.js', array(), 'v1.1.0', true);
	//JQUERY.STICKY
	wp_enqueue_script('jquery.sticky',get_template_directory_uri(). '/js/jquery.sticky.js', array(), 'v1.0.4', true);



}

add_action( 'wp_enqueue_scripts', 'dwjl_scripts' );


//FAV ICONS
function prefix_custom_site_icon_size( $sizes ) {
   $sizes[] = 64;
 
   return $sizes;
}
add_filter( 'site_icon_image_sizes', 'prefix_custom_site_icon_size' );
 
function prefix_custom_site_icon_tag( $meta_tags ) {
   $meta_tags[] = sprintf( '<link rel="icon" href="%s" sizes="64x64" />', esc_url( get_site_icon_url( null, 64 ) ) );
 
   return $meta_tags;
}
add_filter( 'site_icon_meta_tags', 'prefix_custom_site_icon_tag' );