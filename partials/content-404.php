<?php
  $wp_query_args = array(
    'category_name' => $category_name,
    'posts_per_page' => 16
  );
  $the_query = new WP_Query( $wp_query_args );
?>

<div class="row posts">

  <?php
    if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();
  ?>

    <div class="col-sm-6 col-md-6 col-lg-3">
      <?php get_template_part('partials/post'); ?>
    </div>

    <?php
      endwhile;
      wp_reset_postdata();
    ?>

  <?php endif; ?>

</div>



