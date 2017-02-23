<?php
/*
 * Enable Support for Auto Load Next Post.
 *
 * This provides support for Auto Load Next Post 1.5 and up.
 *
 * @since 1.0
 */
function alnp_braxton_support() {
	add_theme_support('auto-load-next-post', array(
		'content_container' => '#content-main',
		'title_selector' => 'h1.story-title',
		'navigation_container' => 'div.prev-next-wrapper',
		'comments_container' => 'div#comments',
	));

	// Removes the post navigation from Auto Load Next Post template file.
	remove_action('alnp_load_after_content', 'auto_load_next_post_navigation', 1, 10);
}
add_action('after_setup_theme', 'alnp_braxton_support');

/**
 * Enqueues stylesheet.
 *
 * @since 1.0
 */
function alnp_braxton_scripts() {
	// Braxton Theme stylesheet.
	wp_enqueue_style('braxton-style-css', get_template_directory_uri() . '/style.css');
	// Child Theme stylesheet.
	wp_enqueue_style('alnp-braxton', get_stylesheet_directory_uri() . '/style.css', array('braxton-style-css'));
}
add_action('wp_enqueue_scripts', 'alnp_braxton_scripts');
