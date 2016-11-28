<?php get_header(); ?>
  <section class="post-header">
    <div class="caption">
      <h1><?php the_title();?></h1>
      <div class="meta">
       <?php the_category(' × ') ?>
      </div>
    </div>
    <?php the_post_thumbnail('header-bg'); ?>
  </section>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-1">
          <ul class="post-share">
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-md-10">
          <div class="main-content" role="main">
            <?php get_template_part('partials/content', 'single'); ?>
          </div>
        </div>

        <!-- <div class="col-md-1" id="sidebar" role="navigation">
           <?php// get_sidebar(); ?>
        </div> -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </main>


<?php get_footer(); ?>
