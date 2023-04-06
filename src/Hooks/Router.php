<?php
namespace Theme\Hooks;

use SolidPress\Core\Hook;
use SolidPress\Core\Theme;
use Theme\Pages\Index\Index;
use Theme\Pages\PageNotFound\PageNotFound;


class Router extends Hook {
	public function __construct() {
		$this->add_action( 'wp_loaded', 'routing' );
	}

	public function routing() {
		switch ( true ) {
			case is_404():
				Theme::set_current_page( new PageNotFound() );
				break;

			default:
				Theme::set_current_page( new Index() );
				break;
		}
	}
}