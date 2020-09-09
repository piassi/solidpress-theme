<?php

namespace Theme\FieldsGroups;

use SolidPress\Core\FieldGroup;
use SolidPress\Core\OptionsPage;
use SolidPress\Fields;

/**
 * Register fields to Category taxonomy
 */
class Theme extends FieldGroup {

	/**
	 * Set fields and group args
	 */
	public function __construct() {
        $this->set_fields(
            array(
				'footer_tab'     => new Fields\Tab( 'Footer' ),
				'copyright_text' => new Fields\Text( 'Copyright' ),
			)
		);

		$this->args = array(
			'key'      => 'theme-options-fields',
			'title'    => 'Email',
			'location' => array(
				array(
					OptionsPage::is_equal_to( 'theme-options' ),
				),
			),
		);
	}
}