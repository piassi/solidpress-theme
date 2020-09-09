<?php
/**
 * Footer template
 *
 * @see Theme\Components\Footer
 *
 * @package piassi
 */

use Theme\Helpers\Utils;
use Theme\Components;

?>

<footer class="_footer bg-light py-8 mt-8">
    <div class="container flex-center flex-column">
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

        <small><?php echo $copyright_text; ?></small>
    </div>
</footer>