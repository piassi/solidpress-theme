<?php

namespace Theme\Hooks;

use SolidPress\Core\Hook;

/**
 * Init theme
 */
class Theme extends Hook {
	/**
	 * Add actions and filters
	 */
	public function __construct() {
        $this->add_action( 'after_setup_theme', 'setup_theme' );
		$this->add_filter( 'body_class', 'add_classes_to_body' );
		$this->add_action( 'wp_head', 'add_pingback_url_header' );
	}

	/**
	 * Setup WordPress theme
	 *
	 * @return void
	 */
	public function setup_theme(): void {
		// Make theme available for translation.
		// Translations can be filed in the /languages/ directory.
		load_theme_textdomain( 'piassi', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		// By adding theme support, we declare that this theme does not use a hard-coded <title> tag, and expect WordPress to provide it for us.
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in the Header and Footer.
		register_nav_menus(
            array(
				'main-menu' => esc_html__( 'Main Menu', 'piassi' ),
            )
        );

		// Switch default core markup for search form, gallery and image captions to output valid HTML5.
		add_theme_support(
            'html5',
            array(
				'search-form',
				'gallery',
				'caption',
			)
        );

		add_theme_support( 'post-thumbnails' );
	}

	/**
	 * Adds custom classes to the array of body classes.
     *
	 * @param array $classes Classes for the body element.
	 */
	public function add_classes_to_body( $classes ): array {
		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}

	/**
	 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
	 *
	 * @return void
	 */
	public function add_pingback_url_header(): void {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}
	}
}
