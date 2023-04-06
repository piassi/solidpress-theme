<?php
namespace Theme\Components\Footer;

use SolidPress\Core\Component;
use Theme\Components\LazyImage\LazyImage;
use Theme\Helpers\Utils;

class Footer extends Component {
	public $props = [ 
		'copyright_text' => '',
		'site_name' => '',
	];

	public function get_props(): array {
		return [ 
			'copyright_text' => get_field( 'copyright_text', 'option' ),
			'site_name' => get_bloginfo( 'name' ),
		];
	}

	public function template( array $props ): void { ?>
		<footer class="_footer bg-gray-400">
			<div class="container flex justify-center items-center">
				<?php
				echo new LazyImage( [ 
					'width' => 200,
					'height' => 52,
					'src' => Utils::get_asset_image_src( 'logo.svg' ),
					'alt' => $props['site_name'],
					'placeholder_fill' => 'FFF',
				] );
				?>

				<small>
					<?php echo $props['copyright_text']; ?>
				</small>
			</div>
		</footer>
	<?php }
}