  <!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-full navbar-fixed-top navbar-dark navbar-ageno">

  <?php
    $logo = get_option('ageno_dwt_theme_logo');
    $logo = sanitize_text_field($logo['ageno_dwt_logo']);
    if (($logo != null) && ($logo != '')):
      $navbar = '<img src='.$logo.' class="logo-image" alt="'.get_bloginfo('name').'">';
    else:
      $navbar = '<span class="logo">'.get_bloginfo('name').'</span>';
    endif;
  ?>

  <a class="navbar-brand" href="<?= home_url('/'); ?>"><?= $navbar; ?></a>

  <div class="sidebar closed">
    <button class="hamburger hamburger--collapse" type="button" aria-label="Menu" aria-controls="navigation">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <?php
      if ( has_nav_menu( 'navbar-menu' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'navbar-menu',
          'menu_class'     => 'nav navbar-nav pull-xs-left float-xl-left',
          'container'      => false,
          'menu'           => 'top_menu',
          'depth'          => 3,
          'container'      => false,

          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker()
          //'container_class' => 'my_extra_menu_class'
        ) );
      }
    ?>
  </div>
  <?php get_template_part('navbar-search'); ?>
</nav>


<?php /*
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in theme/css/b4st.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
        <a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
*/ ?>
