<?php
/**
 * Link button component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Display link styled as button
 *
 * @param string class - CSS class for the root element
 * @param string title - Button content
 * @param string target - Link target _blank | _self
 * @param string url - Link href
 */
class LinkButton extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/link-button/template';

	/**
     * Component default props
     *
     * @var array
     */
	public $props = array(
		'class'  => '',
		'target' => '',
		'url'    => '',
		'title'  => '',
	);
}
