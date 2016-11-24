<?php get_header(); ?>

<?php get_template_part('partials/carousel', get_post_format()); ?>

<div id="content" class="container-fluid" role="main">
  <?php get_template_part('partials/content', get_post_format()); ?>
</div>


<?php get_footer(); ?>
