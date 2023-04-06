<?php
use SolidPress\Core\Theme;

$theme = Theme::get_instance();
$current_page = $theme->get_current_page();
$layout = $current_page->layout ?? $theme->get_default_layout();

echo new $layout( [ 'page' => $current_page ] );