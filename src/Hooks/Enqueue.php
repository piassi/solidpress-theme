<?php
/**
 * Enqueueable.
 *
 * @package SolidPress
 */

namespace Theme\Hooks;

use SolidPress\Core\Hook;

/**
 * Enqueue assets for current template
 */
class Enqueue extends Hook {

	/**
	 * Adds actions
	 */
	public function __construct() {
        $this->add_action( 'wp_enqueue_scripts', 'enqueue_template_scripts' );
	}

	/**
	 * Enqueue assets
	 *
	 * @return void
	 */
	public function enqueue_template_scripts(): void {
		$template_name = $this->get_template_name();

		if ( ! $template_name ) {
			return;
		}

		global $theme_class;

		// Theme scripts & styles
		$css_path = sprintf(
			get_template_directory_uri() . '/dist/%s.css',
			$template_name
		);

		$js_path = sprintf(
			get_template_directory_uri() . '/dist/%s.js',
			$template_name
		);

		wp_enqueue_style(
			'piassi-style',
			$css_path,
			array(),
			filemtime( get_template_directory( $css_path ) )
		);

		wp_enqueue_script(
			'piassi-scripts',
			$js_path . '#defer',
			array( 'jquery' ),
			filemtime( get_template_directory( $js_path ) ),
			true
		);
	}

	/**
	 * Return current page template name based on WordPress template hierarchy
	 *
	 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @return string
	 */
	public static function get_template_name(): string {
		$template_name = 'index';

		if ( is_archive() ) {
			$template_name = 'archive';
		} elseif ( is_search() ) {
			$template_name = 'search';
		} elseif ( is_single() ) {
			$post_type = get_post_type();
			if ( $post_type === 'post' ) {
				$template_name = 'single';
			} else {
				$template_name = 'single-' . str_replace( '_', '-', $post_type );
			}
		} elseif ( is_page() ) {
			$template_name = 'page';

			// Set $template_name for custom templates.
			if ( is_page_template() ) {
				$template_name = str_replace(
					array( 'template-', '.php' ),
					array( '', '' ),
					get_page_template_slug()
				);
			}
		} elseif ( is_404() ) {
			// 404
			$template_name = '404';
		}

		// Return template name, providing filter hook to add or modify rules
		return apply_filters( 'solidpress_template_name', $template_name );
	}
}
