<?php
/**
 * Enqueueable.
 *
 * @package SolidPress
 */

namespace Theme\Hooks;

use SolidPress\Core\Hook;
use SolidPress\Core\Theme;

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
		$current_page = Theme::get_instance()->get_current_page();

		$main_css_path = get_template_directory_uri() . '/dist/main.css';
		wp_enqueue_style(
			'main-styles',
			$main_css_path,
			array(),
			filemtime( get_template_directory( $main_css_path ) )
		);

		if ( $current_page->has_css_assets ) {
			$css_path = sprintf(
				get_template_directory_uri() . '/dist/%s/styles.css',
				$current_page->get_assets_folder()
			);
			wp_enqueue_style(
				'solidpress-style',
				$css_path,
				array(),
				filemtime( get_template_directory( $css_path ) )
			);
		}

		$main_js_path = get_template_directory_uri() . '/dist/main.js';
		wp_enqueue_script(
			'main-scripts',
			$main_js_path . '#defer',
			array( 'jquery' ),
			filemtime( get_template_directory( $main_js_path ) ),
			true
		);

		if ( $current_page->has_js_assets ) {
			$js_path = sprintf(
				get_template_directory_uri() . '/dist/%s/scripts.js',
				$current_page->get_assets_folder()
			);
			wp_enqueue_script(
				'solidpress-scripts',
				$js_path . '#defer',
				array( 'jquery' ),
				filemtime( get_template_directory( $js_path ) ),
				true
			);
		}
	}
}