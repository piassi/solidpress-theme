<?php
/**
 * Footer component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 */
class Footer extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/footer/template';

	/**
	 * Values returned by get_props will be avaliable at the template as variables
	 *
	 * @return array
	 */
	public function get_props(): array {
		return array(
			'copyright_text' => get_field( 'copyright_text', 'option' ),
			'site_name'      => get_bloginfo( 'name' ),
		);
	}
}