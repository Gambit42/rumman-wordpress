<?php
/** Rumman theme. A fictional recipe, restaurant and pantry brand. */

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', fn() => add_editor_style( 'style.css' ) );

add_action(
	'wp_enqueue_scripts',
	function () {
		// Swiper (vendored, https://swiperjs.com) drives the collections and pantry rows.
		wp_register_style( 'swiper', get_theme_file_uri( 'assets/vendor/swiper/swiper.min.css' ), array(), '14.2.0' );
		wp_register_script( 'swiper', get_theme_file_uri( 'assets/vendor/swiper/swiper-bundle.min.js' ), array(), '14.2.0', array( 'strategy' => 'defer' ) );
		wp_enqueue_style( 'rumman', get_stylesheet_uri(), array( 'swiper' ), filemtime( get_stylesheet_directory() . '/style.css' ) );
		wp_enqueue_script( 'rumman', get_theme_file_uri( 'assets/js/rumman.js' ), array( 'swiper' ), filemtime( get_theme_file_path( 'assets/js/rumman.js' ) ), array( 'strategy' => 'defer' ) );
		// Runs in <head> so reveal targets are hidden before first paint (no flash, no jump).
		wp_add_inline_script( 'rumman', 'document.documentElement.classList.add("rm-js");', 'before' );
	}
);

// Theme image URL for patterns.
function rumman_img( $name ) {
	return esc_url( get_theme_file_uri( "assets/images/$name.jpg" ) );
}

add_action( 'init', fn() => register_block_pattern_category( 'rumman', array( 'label' => 'Rumman' ) ) );
