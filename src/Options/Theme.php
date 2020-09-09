<?php

namespace Theme\Options;

use SolidPress\Core\OptionsPage;

/**
 * Register email options page
 */
class Theme extends OptionsPage {
	/**
	 * Set options page args
	 */
	public function __construct() {
		$this->args = array(
			'page_title' => __( 'Theme', 'SolidPress-bio' ),
			'menu_title' => __( 'Theme', 'SolidPress-bio' ),
			'menu_slug'  => 'theme-options',
			'capability' => 'edit_posts',
			'redirect'   => false,
		);
	}
}
