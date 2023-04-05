<?php
/**
 * 404 page router
 *
 * @see Theme\Pages\PageNotFound
 *
 * @package SolidPress
 */

use Theme\Components\Footer\Footer;
use Theme\Components\Header\Header;
use Theme\Pages\PageNotFound;

get_header();
echo new Header();
echo new PageNotFound();
echo new Footer();
get_footer();