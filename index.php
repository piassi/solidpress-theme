<?php
/**
 * Index page router
 *
 * @see Theme\Pages\Index
 *
 * @package SolidPress
 */

use Theme\Components\Footer\Footer;
use Theme\Components\Header\Header;
use Theme\Pages\Index\Index;

get_header();
echo new Header();
echo new Index();
echo new Footer();
get_footer();