<?php
use Theme\Pages\Index\Index;
use Theme\Pages\Layouts\DefaultLayout;

echo new DefaultLayout( [ 'page' => new Index() ] );