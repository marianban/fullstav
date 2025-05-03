<?php
add_action( 'wp_enqueue_scripts', 'neve_child_enqueue', 20 );
function neve_child_enqueue() {
  // 1) enqueue parent (Neve) style
  wp_enqueue_style( 'neve-parent', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'neve' )->get( 'Version' ) );
  // 2) enqueue child style, after parent
  wp_enqueue_style( 'neve-child',
    get_stylesheet_uri(),
    array( 'neve-parent' ),
    wp_get_theme()->get( 'Version' )
  );
}
