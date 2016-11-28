<?php get_header(); ?>

<section class="post-header">
  <div class="caption">
    <h1><?php echo single_cat_title(); ?></h1>
    <div class="meta">
     <?php echo category_description(); ?>
    </div>
  </div>
  <?php the_post_thumbnail('header-bg'); ?>
</section>

<div id="content" class="container-fluid" role="main">
  <?php get_template_part('partials/content', get_post_format()); ?>
</div>

<?php get_footer(); ?>
