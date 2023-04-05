<?php
namespace Theme\Components\LinkButton;

use SolidPress\Core\Component;

class LinkButton extends Component {
	public $props = [ 
		'class' => '',
		'target' => '',
		'url' => '',
		'title' => '',
	];

	public function template( array $props ): void { ?>
		<a
			class="_link-button <?php echo $props['class']; ?>"
			target="<?php echo $props['target']; ?>"
			href="<?php echo $props['url']; ?>"
			title="<?php echo wp_strip_all_tags( $props['title'] ); ?>"
			<?php echo $props['target'] === '_blank' ? 'rel="noopener noreferrer"' : ''; ?>>
			<?php echo $props['title']; ?>
		</a>
	<?php }
}