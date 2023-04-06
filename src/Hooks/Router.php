<?php
namespace Theme\Hooks;

use SolidPress\Core\Hook;
use SolidPress\Core\Theme;
use Theme\Pages\Index\Index;
use Theme\Pages\PageNotFound\PageNotFound;


class Router extends Hook {
	public function __construct() {
		$this->add_action( 'template_redirect', 'routing' );
	}

	public function routing() {
		$theme = Theme::get_instance();

		switch ( true ) {
			case is_404():
				$theme->set_current_page( new PageNotFound() );
				break;

			default:
				$theme->set_current_page( new Index() );
				break;
		}
	}
}