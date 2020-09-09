<?php
/**
 * Post
 *
 * @package SolidPress
 */

namespace Theme\Models;

/**
 * Post helper functions
 */
class Post {
	/**
	 * Return global $wp_query found posts
	 *
	 * @return integer
	 */
	public static function get_found_posts(): int {
		global $wp_query;
		return $wp_query->found_posts;
	}

	/**
	 * Get post formatted content
	 *
	 * @return string
	 */
	public static function get_the_content(): string {
		return apply_filters( 'the_content', get_the_content( null, false, get_the_ID() ) );
	}
}
