<?php

/**
 * JL MetroCafe's functions and definitions
 *
 * @package JL MetroCafe
 * @since JL MetroCafe 1.0
 */
 

/*
		================== FUNCTIONS ====================
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

		/**
			ADD SUPPORT LOGO
		**/
		add_theme_support( 'custom-logo',[
			'width' => 180,
			'height' => 94,
			'flex-width' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		]);


		/**
			SUPPORT THUMBNAILS
		**/
		add_theme_support( 'post-thumbnails' );

		/**
		 * FORMAT POSTS
		 */
		add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );


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
	wp_enqueue_style('jl-restaurant',get_template_directory_uri().'/style.css');
	//RESPONSIVE
	wp_enqueue_style('main-responsive',get_template_directory_uri().'/css/responsive.css');

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
	//MODERNIZR
	wp_enqueue_script('modernizr',get_template_directory_uri(). '/js/vendor/modernizr-2.8.3.min.js', array(), 'v2.8.3');



}

add_action( 'wp_enqueue_scripts', 'dwjl_scripts' );



/**
	====================== CUSTOMIZER =================================
*/

if (!function_exists('dwjl_customizer')) {
	
	function dwjl_customizer($wp_customize)
	{
		$wp_customize->add_setting( 'header_textcolor' , [
			'default'   => '#000000',
			'transport' => 'refresh',
		]);

		$wp_customize->add_section('dwjl_preheader',[
			'title' =>__('Pre-Header','dwjl_theme'),
			'priority'   => 30,
		]);

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'      => __( 'Header Color', 'dwjl_theme' ),
	'section'    => 'dwjl_preheader',
	'settings'   => 'header_textcolor',
) ) );
	}

}
add_action( 'customize_register', 'dwjl_customizer', 10, 1 );

/**
	====================== CUSTOMIZER =================================
*/

