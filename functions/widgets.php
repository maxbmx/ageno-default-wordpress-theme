<?php

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'b4st' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer (footer widget areas)
   */

  register_sidebar( array(
    'name'          => __( 'Footer widget area', 'ageno-dwt' ),
    'id'            => 'footer-widget-area',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div class="widget %1$s %2$s col-sm-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>'
  ) );


  register_sidebar( array(
    'name'          => __( 'Post Advert', 'ageno-dwt' ),
    'id'            => 'post-advert',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div class="widget %1$s %2$s col-sm-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>'
  ) );

