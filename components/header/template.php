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

<header
    id="masthead"
    class="_header py-4 py-lg-0 sticky-top bg-white shadow-sm animate__animated animate__fadeInDown animate__faster">
    <div class="container">
        <div class="d-flex py-0 py-lg-4 justify-content-end justify-content-md-between align-items-center">
            <div class="mr-auto mr-lg-0">
                <div class="site-branding m-0 position-relative">
                    <<?php echo $logo_html_tag; ?> class="site-title d-block m-0">
                        <a
                            href="<?php echo $home_permalink; ?>"
                            aria-label="<?php echo $site_name; ?>"
                            class="d-inline-block py-2 pr-2">
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
                </div>
            </div>

            <button class="toggle-menu text-sm d-block d-lg-none p-0 m-0 ml-2">
                <i class="icon icon-menu"></i>
                <i class="icon icon-close"></i>
            </button>
        </div>

        <nav id="site-navigation" class="main-navigation bg-white">
            <?php
			wp_nav_menu(
				array(
					'container'      => false,
					'theme_location' => 'main-menu',
					'menu_id'        => 'main-menu',
					'menu_class'     => 'main-menu d-lg-flex list-unstyled m-0 p-0',
				)
			);
			?>
        </nav>
    </div>
</header>
