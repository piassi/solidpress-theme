<?php
/**
 * Header component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 */
class Header extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/header/template';

	/**
     * Component default props
     *
     * @var array
     */
	public $props = array(
		'class' => '',
	);

	/**
	 * Values returned by get_props will be avaliable at the template as variables
	 *
	 * @return array
	 */
	public function get_props(): array {
		return array(
			'logo_html_tag'  => is_front_page() && is_home() ? 'div' : 'h1',
			'home_permalink' => get_bloginfo( 'url' ),
			'site_name'      => get_bloginfo( 'name' ),
		);
	}
}