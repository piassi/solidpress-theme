<?php
/**
 * Index page router
 *
 * @see Theme\Pages\Index
 *
 * @package SolidPress
 */

use Theme\Pages;
use Theme\Components;

get_header();
echo new Components\Header();
echo new Pages\Index();
echo new Components\Footer();
get_footer();
