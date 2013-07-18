<?php

/* Update to Bootstrap 2.3.2 */

function update_bootstrap() {

    wp_dequeue_style( 'standard' );
    wp_dequeue_style( 'theme-responsive' );
    wp_dequeue_style( 'bootstrap-responsive' );
    wp_dequeue_style( 'standard-ad-468x60' );
    wp_dequeue_style( 'standard-ad-300x250-widget' );
    wp_dequeue_style( 'standard-ad-125x125-widget' );
    wp_dequeue_style( 'standard-personal-image-widget' );
    wp_dequeue_style( 'standard-influence');
    wp_dequeue_style( 'gcse-widget');
    wp_dequeue_style( 'standard-activity-tabs');

    wp_dequeue_style( 'bootstrap' );
    wp_register_style( 'bootstrap-latest', get_stylesheet_directory_uri() . '/css/lib/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-latest' );

    wp_dequeue_script( 'bootstrap' );
    wp_dequeue_script( 'fitvid' );
    wp_dequeue_script( 'theme-main' );
    wp_register_script( 'bootstrap-latest', get_stylesheet_directory_uri() . '/js/lib/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-latest' );
    wp_enqueue_script( 'fitvid' );

    wp_register_style( 'font-awesome-ie', get_stylesheet_directory_uri() . '/css/lib/font-awesome-ie7.css' );
    $GLOBALS['wp_styles']->add_data( 'font-awesome-ie', 'conditional', 'lt IE 8' );
    wp_enqueue_style( 'font-awesome-ie' );

    wp_enqueue_style( 'standard' );

}

add_action( 'wp_enqueue_scripts', 'update_bootstrap', 1000 );

/* Include Shortcodes */

require_once('lib/components/shortcodes.php');

/* Utility Functions */

/* Turn a string into a 'slug' */

function slug($str) {
	$str = strtolower(trim($str));
	$str = preg_replace('/[^a-z0-9-]/', '-', $str);
	$str = preg_replace('/-+/', "-", $str);
	return $str;
}