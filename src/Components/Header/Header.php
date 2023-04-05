<?php

namespace Theme\Components\Header;

use SolidPress\Core\Component;
use Theme\Components\LazyImage\LazyImage;
use Theme\Helpers\Utils;


class Header extends Component {
	public $props = [ 
		'class' => ''
	];

	public function get_props(): array {
		return [ 
			'logo_html_tag' => is_front_page() && is_home() ? 'div' : 'h1',
			'home_permalink' => get_bloginfo( 'url' ),
			'site_name' => get_bloginfo( 'name' ),
		];
	}

	public function template( array $props ): void { ?>
		<header id="masthead" class="_header <?php echo $props['class'] ?>">
			<div class="container">
				<<?php echo $props['logo_html_tag']; ?>>
					<a
						href="<?php echo $props['home_permalink']; ?>"
						aria-label="<?php echo $props['site_name']; ?>"
						class="">
						<?php
						echo new LazyImage( [ 
							'width' => 200,
							'height' => 52,
							'src' => Utils::get_asset_image_src( 'logo.svg' ),
							'alt' => $props['site_name'],
							'placeholder_fill' => 'FFF',
						] );
						?>
					</a>
				</<?php echo $props['logo_html_tag']; ?>>

				<button class="toggle-menu text-sm block lg:hidden p-0 m-0 ml-2">
					<i class="icon icon-menu"></i>
					<i class="icon icon-close"></i>
				</button>

				<nav id="site-navigation" class="main-navigation hidden lg:visible">
					<?php
					wp_nav_menu(
						array(
							'container' => false,
							'theme_location' => 'main-menu',
							'menu_id' => 'main-menu',
							'menu_class' => 'main-menu flex m-0 p-0',
						)
					);
					?>
				</nav>
			</div>
		</header>
	<?php }
}