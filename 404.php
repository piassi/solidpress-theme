<?php
/**
 * 404 page router
 *
 * @see Theme\Pages\PageNotFound
 *
 * @package SolidPress
 */

use Theme\Pages;
use Theme\Components;

get_header();
echo new Components\Header();

echo new Pages\PageNotFound();

echo new Components\Footer();
get_footer();