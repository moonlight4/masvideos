<?php
/**
 * MasVideos Widget Functions
 *
 * Widget related functions and widget registration.
 *
 * @package MasVideos/Functions
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include widget classes.
require MASVIDEOS_ABSPATH . 'includes/abstracts/abstract-masvideos-widget.php';
require MASVIDEOS_ABSPATH . 'includes/widgets/class-masvideos-widget-movies-layered-nav.php';

/**
 * Register Widgets.
 *
 * @since 1.0.0
 */
function masvideos_register_widgets() {
    register_widget( 'MasVideos_Widget_Movies_Layered_Nav' );
}
add_action( 'widgets_init', 'masvideos_register_widgets' );