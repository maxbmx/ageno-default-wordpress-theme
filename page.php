<?php get_header(); ?>
  <section class="post-header">
    <div class="caption">
      <h1><?php the_title();?></h1>
    </div>
    <?php the_post_thumbnail('header-bg'); ?>
  </section>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-1 offset-1">
        </div>
        <div class="col-md-10">
          <div class="main-content" role="main">
            <?php get_template_part('partials/content', 'page'); ?>
          </div>
        </div>

        <!-- <div class="col-md-1" id="sidebar" role="navigation">
           <?php// get_sidebar(); ?>
        </div> -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </main>


<?php get_footer(); ?>
