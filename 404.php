<?php
use Theme\Pages\Layouts\DefaultLayout;
use Theme\Pages\PageNotFound\PageNotFound;

echo new DefaultLayout( [ 'page' => new PageNotFound() ] );