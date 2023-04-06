<?php
namespace Theme\Components\LazyImage;

use SolidPress\Core\Component;
use Theme\Helpers\Utils;

class LazyImage extends Component {
	/**
	 * @var array
	 */
	public $props = [ 
		'class' => '',
		'width' => 0,
		'height' => 0,
		'alt' => '',
		'placeholder_fill' => 'F1F1F1',
		'image' => null,
	];

	public function get_props(): array {
		if ( $this->props['image'] ) {
			return [ 
				'src' => $this->props['image']->src,
				'width' => $this->props['image']->width,
				'height' => $this->props['image']->height,
				'alt' => $this->props['image']->alt,
			];
		}

		return array();
	}

	public function template( array $props ): void { ?>
		<img
			class="lozad <?php echo $props['class']; ?>"
			width="<?php echo $props['width']; ?>"
			height="<?php echo $props['height']; ?>"
			src="<?php echo Utils::image_placeholder( $props['width'], $props['height'], $props['placeholder_fill'] ); ?>"
			data-src="<?php echo $props['src']; ?>"
			alt="<?php echo $props['alt']; ?>" />
	<?php }
}