<?php get_header(); ?>

  <section class="post-header">
    <div class="caption">
      <h1><?php _e( 'Error 404', 'ageno-dwt' ); ?></h1>
      <div class="meta"><?php _e( 'Ooops, looks like the page you were looking for doesn\'t seem to exist.', 'ageno-dwt' ); ?></div>
    </div>
    <img src="<?php echo get_template_directory_uri().'/build/images/404/cycling-crash.gif'; ?>" alt="404" class="attachment-header-bg">
  </section>

  <div id="content" class="container-fluid" role="main">
    <?php get_template_part('partials/content', '404'); ?>
  </div>

<?php get_footer(); ?>
