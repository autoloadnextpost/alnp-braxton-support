<?php
/**
 * This file loads the content when called.
 *
 * @version 1.0
 */

if ( have_posts() ) :

	// Load content before the loop.
	do_action('alnp_load_before_loop');

	// Check that there are posts to load.
	while ( have_posts()) : the_post();

		// Load content before the post content.
		do_action('alnp_load_before_content');

		// Include the post content.
		get_template_part('auto-load-next-post/content', 'single');

		// Load content after the post content.
		do_action('alnp_load_after_content');

	// End the loop.
	endwhile;

		// Load content after the loop.
		do_action('alnp_load_after_loop');

else :

	// Load content if there are no more posts.
	do_action('alnp_no_more_posts');

endif; // END if have_posts()
