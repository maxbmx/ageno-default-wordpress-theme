<?php get_header(); ?>

<?php
  // $wp_query_args = array(
  //   'posts_per_page' => 12
  //   );
  // $the_query = new WP_Query( $wp_query_args );

  // //print_r ($the_query);

?>

  <section class="post-header">
    <div class="caption">
      <h1><?php _e( 'Error 404', 'ageno-default-wordpress-theme' ); ?></h1>
      <div class="meta"><?php _e( 'Ooops, looks like the page you were looking for doesn\'t seem to exist.', 'ageno-default-wordpress-theme' ); ?></div>
    </div>
    <img src="<?php echo get_template_directory_uri().'/build/images/404/cycling-crash.gif'; ?>" alt="404" class="attachment-header-bg">
  </section>



  <div id="content" class="container-fluid" role="main">
    <?php get_template_part('partials/content', '404'); ?>
  </div>






<?php get_footer(); ?>




