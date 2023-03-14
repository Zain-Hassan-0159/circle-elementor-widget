<?php
/**
 * Plugin Name:       Circle Widget
 * Description:       Circle Widget is created by Zain Hassan.
 * Version:           1.1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Zain Hassan
 * Author URI:        https://hassanzain.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       circle-widget 
*/

if(!defined('ABSPATH')){
    exit;
}

add_action( 'elementor/elements/categories_registered', 'custom_category_elementor_wishes' );
add_action( 'elementor/widgets/register', 'register_wishes_elementor_widgets' );
  

function custom_category_elementor_wishes( $elements_manager ) {

	$elements_manager->add_category(
		'el-circle',
		[
			'title' => esc_html__( 'Circle', 'circle-widget' ),
			'icon' => 'fa fa-plug',
		]
	);
}

function register_wishes_elementor_widgets( $widgets_manager ) {
  require_once( __DIR__ . '/inc/circle-widget.php' );
  $widgets_manager->register( new \circle_widget_elementore );
}

