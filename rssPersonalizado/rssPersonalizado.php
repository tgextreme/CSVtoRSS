<?php
/*
Plugin Name: rssPersonalizado
Plugin URI: https://infogonzalez.com
Description: Plugin de ejemplo del post de como crear un plugin en WordPress
Version: 1.0
Author: Angela
Author URI: https://infogonzalez.com
License: GPL2
*/
function rssPersonalizado_shortcode( $atts = [], $content = null, $tag = '' ) {
    
    $o ="hola mundo ".$atts["id"];
    
    return $o;
}

/**
 * Central location to create all shortcodes.
 */
function rssPersonalizado_shortcodes_init() {
    add_shortcode( 'rssPersonalizado', 'rssPersonalizado_shortcode' );
}

add_action( 'init', 'rssPersonalizado_shortcodes_init' );

?>