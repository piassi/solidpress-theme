<?php
/**
 * 404 Message component
 *
 * @package piassi
 */

namespace Theme\Components;

use SolidPress\Core\Component;

/**
 * Handle template and props
 *
 * @param string class - CSS class for the root element
 */
class Message404 extends Component {
	/**
	 * Component template path relative to theme root
	 *
	 * @var string
	 */
	public $template = 'components/message-404/template';

	/**
     * Component default props
     *
     * @var array
     */
	public $props = array(
		'class' => '',
	);
}
