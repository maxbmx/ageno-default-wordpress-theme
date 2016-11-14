<?php get_header(); ?>

<?php get_template_part('partials/carousel', get_post_format()); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="content" role="main">
          <?php get_template_part('partials/content', get_post_format()); ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div id="content" role="main">
          <?php get_template_part('partials/content', get_post_format()); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
