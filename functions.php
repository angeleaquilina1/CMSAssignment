


<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' ); 
function my_theme_enqueue_styles() {
    $parent_style = 'twentyseventeen-style'; 
    $child_style = 'twentyseventeen-child-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $child_style, get_stylesheet_uri() );
}

/*Added Top bar Menu*/
function register_my_menu() {
register_nav_menu('new-menu',__( 'New Menu' ));
}
add_action( 'init', 'register_my_menu' );


/*Function to shorten the title for Product title*/
add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
    if ( ! is_singular( array( 'product' ) ) && get_post_type( $id ) === 'product' ) {
        return wp_trim_words( $title, 4, '...' ); // change last number to the number of words you want
    } else {
        return $title;
    }
}







