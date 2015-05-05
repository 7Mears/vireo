<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package vireo
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function vireo_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'vireo_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function vireo_jetpack_setup
add_action( 'after_setup_theme', 'vireo_jetpack_setup' );

function vireo_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function vireo_infinite_scroll_render