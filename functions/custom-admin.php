<?php
  function ageno_dwt_customize_register( $wp_customize ){

    //section logo
    $wp_customize->add_section('ageno_dwt_theme_logo', array(
        'title'    => __('Logo', 'ageno_dwt'),
        'priority' => 120,
    ));

    //  =============================
    //  Logo
    //  =============================
    $wp_customize->add_setting('ageno_dwt_theme_logo[ageno_dwt_logo]', array(
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'ageno_dwt_logo', array(
        'label'    => __('Logo', 'ageno_dwt'),
        'section'  => 'ageno_dwt_theme_logo',
        'settings' => 'ageno_dwt_theme_logo[ageno_dwt_logo]',
    )));

    //  =============================
    //  Social
    //  =============================
    $wp_customize->add_section('ageno_dwt_theme_social_media', array(
        'title'    => __('Social media', 'ageno_dwt'),
        'priority' => 121,
    ));

    //  Facebook
    $wp_customize->add_setting('ageno_dwt_theme_social[url_facebook]', array(
        'default'    => 'http://www.wp.pl/',
        'type'           => 'option',
    ));

    $wp_customize->add_control('ageno_dwt_url_facebook', array(
        'label'      => __('Facebook', 'ageno_dwt'),
        'section'    => 'ageno_dwt_theme_social_media',
        'default'    => '123',
        'settings'   => 'ageno_dwt_theme_social[url_facebook]',
    ));

    //  Twitter
    $wp_customize->add_setting('ageno_dwt_theme_social[url_twitter]', array(
        'type'           => 'option',
    ));

    $wp_customize->add_control('ageno_dwt_url_twitter', array(
        'label'      => __('Twitter', 'ageno_dwt'),
        'section'    => 'ageno_dwt_theme_social_media',
        'settings'   => 'ageno_dwt_theme_social[url_twitter]',
    ));

    //  Instagram
    $wp_customize->add_setting('ageno_dwt_theme_social[url_instagram]', array(
        'type'           => 'option',
    ));

    $wp_customize->add_control('ageno_dwt_url_instagram', array(
        'label'      => __('Instagram', 'ageno_dwt'),
        'section'    => 'ageno_dwt_theme_social_media',
        'settings'   => 'ageno_dwt_theme_social[url_instagram]',
    ));
}

add_action('customize_register', 'ageno_dwt_customize_register');


// ----------------------- ----------------------- ----------------------- -----------------------


function ageno_dwt_social() {

  $social = get_option('ageno_dwt_theme_social');

  foreach ($social as $key => $value) :
    if ($value != null && $value != '') {
      $value = sanitize_text_field($value);
      $value = addhttp( $value );
      echo '<a href="'.$value.'"><i class="fa fa-'.str_replace('url_','',$key).'"></i></a>';
    }
  endforeach;
}
