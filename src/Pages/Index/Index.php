<?php
namespace Theme\Pages\Index;

use SolidPress\Core\Page;

class Index extends Page {
	public function template( array $props ): void { ?>
		<main id="index-page" class="page">
			<div class="container py-8">
				<h1 class="text-3xl font-bold text-blue-400">
					Hello Solidpress 🤝 Tailwind
				</h1>
			</div>
		</main>
	<?php }
}