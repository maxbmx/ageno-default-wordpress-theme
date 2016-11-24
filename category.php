<?php get_header(); ?>

<?php get_template_part('partials/carousel', get_post_format()); ?>
<h1>Category: <?php echo single_cat_title(); ?></h1>

<div class="container">

  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
      <div id="content" role="main">
          <?php get_template_part('partials/content', get_post_format()); ?>
      </div>
      <div class="col-sm-2">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
