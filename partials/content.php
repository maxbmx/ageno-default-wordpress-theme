<div class="row posts">

<?php
  $i = 0;
  $post_count = $wp_query->post_count ;
  $randomize = rand(2, $post_count);
  ///echo $randomize;
  if(have_posts()): while(have_posts()): the_post();
    $i++;
  ?>

  <?php if ( $i <= 2 ) : //added post-advert widget ?>

  <div class="col-sm-6 col-md-6 col-lg-6 two-latest el-<?= $i; ?>">
    <?php get_template_part('partials/post'); ?>
  </div>

  <?php else: ?>

  <div class="col-sm-6 col-md-6 col-lg-3 el-<?= $i; ?>">
    <?php get_template_part('partials/post'); ?>
  </div>

  <?php endif; ?>

  <?php if (( $randomize == $i) && (is_active_sidebar( 'post-advert' ))) : //added post-advert widget ?>

    <div class="col-sm-6 col-md-6 col-lg-3">
      <article>
        <?php dynamic_sidebar('post-advert'); ?>
      </article>
    </div>

  <?php endif; ?>

<?php endwhile;  ?>

</div>

<?php get_template_part('partials/pagination'); ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
