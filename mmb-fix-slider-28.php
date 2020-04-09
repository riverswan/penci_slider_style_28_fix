<?php

/**
 * Plugin Name:       Soledad Slider 28 fix
 * Plugin URI:        https://github.com/riverswan/penci_slider_style_28_fix
 * Description:       Quick fix for Style №28 homepage slider of Soledad WordPress theme.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Paul Swan
 * Author URI:        https://github.com/riverswan
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       penci-28-fix
 * Domain Path:       /languages
 */


if ( is_page( 'tests' ) ) {
	add_action(
		'wp_enqueue_scripts',
		function () {
			wp_enqueue_script( 'mmb-fix-slider-28', plugin_dir_url( __FILE__ ) . 'mmb-fix-slider-28_for_tests_page.js', array( 'jquery' ), '', true );
		}
	);
} else {
	add_action(
		'wp_enqueue_scripts',
		function () {
			wp_enqueue_script( 'mmb-fix-slider-28', plugin_dir_url( __FILE__ ) . 'mmb-fix-slider-28.js', array( 'jquery' ), '', true );
		}
	);
}
