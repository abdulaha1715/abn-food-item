<?php
/**
 * Plugin Name:       Woo Product Gallery Slider
 * Plugin URI:        https://example.com/
 * Description:       A Simple Food & Restaurant Menu Display Plugin for Restaurant, Cafes, Fast Food, Coffee House with WooCommerce Online Ordering.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdulaha Islam
 * Author URI:        https://www.linkedin.com/in/abdulaha-islam/
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       abn-food-item
 * Domain Path:       /languages
 */


/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Load plugin textdomain.
 */
function abn_food_menu_load_textdomain() {
    load_plugin_textdomain( 'abn-food-item', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

add_action('init', 'abn_food_menu_load_textdomain');


// register javascript and css on initialization
function abn_food_menu_register_script() {

    wp_register_style( 'slick-theme', plugins_url('/assets/css/slick-theme.css', __FILE__), false, '1.5.0', 'all');
    wp_register_style( 'slick', plugins_url('/assets/css/slick.min.css', __FILE__), false, '1.5.0', 'all');
    wp_register_style( 'bootstrap', plugins_url('/assets/css/bootstrap-5.1.3.min.css', __FILE__), false, '4.1.3', 'all');

    wp_register_style( 'abn-food-menu-style', plugins_url('/assets/css/style.css', __FILE__), false, '1.0.0', 'all');


    wp_register_script( 'bootstrap', plugins_url('/assets/js/bootstrap-5.1.3.min.js', __FILE__), array('jquery'), '4.0.0' );
    wp_register_script( 'slick', plugins_url('/assets/js/slick.min.js', __FILE__), array('jquery'), '1.5.0' );
    
    wp_register_script( 'app', plugins_url('/assets/js/app.js', __FILE__), array('jquery'), '1.0.0' );
}

add_action('init', 'abn_food_menu_register_script');


// use the registered javascript and css above
function abn_food_menu_enqueue_style(){
    wp_enqueue_style('slick-theme');
    wp_enqueue_style('slick');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('abn-food-menu-style');

    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'slick' );
    wp_enqueue_script( 'app' );
}

add_action('wp_enqueue_scripts', 'abn_food_menu_enqueue_style');








