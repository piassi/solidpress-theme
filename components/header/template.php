<?php
/**
 * Header template file
 *
 * @see Theme\Components\Header
 *
 * @package SolidPress
 */

use Theme\Components;
use Theme\Helpers\Utils;
?>

<header id="masthead" class="_header">
    <div class="container">
        <<?php echo $logo_html_tag; ?>>
            <a
                href="<?php echo $home_permalink; ?>"
                aria-label="<?php echo $site_name; ?>"
                class="">
                <?php
				echo new Components\LazyImage(
					array(
						'width'            => 200,
						'height'           => 52,
						'src'              => Utils::get_asset_image_src( 'logo.svg' ),
						'alt'              => $site_name,
						'placeholder_fill' => 'FFF',
					)
				);
				?>
            </a>
        </<?php echo $logo_html_tag; ?>>

        <button class="toggle-menu text-sm block lg:hidden p-0 m-0 ml-2">
            <i class="icon icon-menu"></i>
            <i class="icon icon-close"></i>
        </button>

        <nav id="site-navigation" class="main-navigation hidden lg:visible">
            <?php
			wp_nav_menu(
				array(
					'container'      => false,
					'theme_location' => 'main-menu',
					'menu_id'        => 'main-menu',
					'menu_class'     => 'main-menu flex m-0 p-0',
				)
			);
			?>
        </nav>
    </div>
</header>