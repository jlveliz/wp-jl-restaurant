<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */

function dwjl_scripts () {
	//css
	wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css',[],'v3.0.3');
	wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css',[],'v3.0.3');
}

add_action( 'wp_enqueue_scripts', 'dwjl_scripts' );