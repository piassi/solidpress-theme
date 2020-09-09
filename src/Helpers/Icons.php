<?php

namespace Theme\Helpers;

use SolidPress\Core\Field;
use SolidPress\Fields;

/**
 * Helper class to handle icons
 */
class Icons {

	const LIST = array(
		'facebook',
		'g-plus',
		'twitter',
		'instagram',
		'behance',
		'arrow',
		'html5',
		'phone',
		'rocket',
		'thunder',
	);

	/**
	 * Generate a select field with the list of icons.
	 *
	 * @param string $label - Field label on admin.
	 * @return Field - Fields\Select instance with icons as options.
	 */
	public static function select_field( string $label = 'Ícone' ): Field {
		return new Fields\Select(
			$label,
			array(
				'choices' => array_combine( self::LIST, self::LIST ),
			)
		);
	}
}