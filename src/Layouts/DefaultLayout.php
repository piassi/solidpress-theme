<?php
namespace Theme\Layouts;

use SolidPress\Core\Page;
use Theme\Components\Footer\Footer;
use Theme\Components\Header\Header;

class DefaultLayout extends Page {
	public function template( array $props ): void {
		get_header();
		echo new Header();
		echo $props['page'];
		echo new Footer();
		get_footer();
	}
}