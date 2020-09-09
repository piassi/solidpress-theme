<?php
/**
 * Link button template file
 *
 * @see Theme\Components\LinkButton
 *
 * @package piassi
 */

?>

<a
    class="_link-button btn btn-outline-dark text-uppercase d-inline-flex align-items-center <?php echo $class; ?>"
    target="<?php echo $target; ?>"
    href="<?php echo $url; ?>"
    title="<?php echo wp_strip_all_tags( $title ); ?>"
    <?php echo $target === '_blank' ? 'rel="noopener noreferrer"' : ''; ?>>
    <?php echo $title; ?>
</a>