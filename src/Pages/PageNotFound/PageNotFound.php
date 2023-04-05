<?php

namespace Theme\Pages;

use SolidPress\Core\Page;
use Theme\Components\Message404\Message404;

class PageNotFound extends Page {
	public function template( array $props ): void { ?>
		<main id="404-page" class="page-wrapper">
			<?php echo new Message404(); ?>
		</main>
	<?php }
}