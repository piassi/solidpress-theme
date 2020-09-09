<?php
/**
 * Archive page router
 *
 * @see Theme\Pages\Archive
 *
 * @package SolidPress
 */

use Theme\Pages;

echo new Pages\AuthenticatedPage(
    array(
		'page' => new Pages\Archive(),
    )
);
