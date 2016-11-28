<?php

function register_menus() {
  register_nav_menus(
    array(
      'navbar-menu' => __( 'Navbar Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );
