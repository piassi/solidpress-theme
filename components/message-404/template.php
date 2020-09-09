<?php
/**
 * Template for the 404Message component
 *
 * @see Theme\Components\404Message
 *
 * @package piassi
 */

?>

<div class="_message-404 py-10 text-center <?php echo $class; ?>">
    <h1 class="title h2 mb-4"><?php echo _e( 'Oops, page not found!', 'piassi' ); ?></h1>

    <div class="description mb-6">
        <p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'piassi' ); ?>
        </p>
    </div>

    <a class="btn btn-outline-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php echo _e( 'Go to home!', 'piassi' ); ?>
    </a>
</div>