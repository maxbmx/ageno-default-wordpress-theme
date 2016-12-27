<div class="sidebar closed">
  <button class="hamburger hamburger--collapse" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

  <div class="search">
    <form class="form-inline navbar-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input class="form-control" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search...', 'ageno-dwt'); ?>" name="s" id="s">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>


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
