<?php
/**
 * Lazy image template file
 *
 * @see Theme\Components\LazyImage
 *
 * @package SolidPress
 */

use Theme\Helpers\Utils;
?>

<img
    class="lozad <?php echo $class; ?>"
    width="<?php echo $width; ?>"
    height="<?php echo $height; ?>"
    src="<?php echo Utils::image_placeholder( $width, $height, $placeholder_fill ); ?>"
    data-src="<?php echo $src; ?>"
    alt="<?php echo $alt; ?>" />
