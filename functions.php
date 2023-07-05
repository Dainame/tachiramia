<?php 

function tachiramia_enqueue_styles() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_style', 'tachiramia_enqueue_styles' );

?>