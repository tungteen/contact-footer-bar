<?php
/**
 * Plugin Name: Contact Footer Bar
 * Plugin URI: https://khacbiet.com/plugin/contact-footer-bar
 * Description: Fixed Hotline on the screen.
 * Version: 2.0.6
 * Author: Nguyen Tung
 * Author URI: https://khacbiet.com
 *
 * Text Domain: Contact-footer-bar
 * Domain Path: 
 *
 * @package Contact Footer Bar
 */


if ( ! defined( 'ABSPATH' ) ) {
    die( 'Invalid request.' );
}

add_action( 'wp_enqueue_scripts', 'khacbiet_scripts_and_styles' );
function khacbiet_scripts_and_styles() {
    wp_enqueue_style( 'khacbiet-css', plugin_dir_url( __FILE__ ) . '/assets/css/style-1.css', array(), '1.0.0' );
}

require_once( plugin_dir_path( __FILE__ ) . '/includes/admin.php' );
require_once( plugin_dir_path( __FILE__ ) . '/includes/show.php' );


