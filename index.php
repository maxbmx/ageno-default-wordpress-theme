<?php get_header(); ?>

<?php get_template_part('partials/carousel'); ?>

<div id="content" class="container-fluid" role="main">
  <?php get_template_part('partials/content', get_post_format()); ?>
</div>

<?php get_footer(); ?>
