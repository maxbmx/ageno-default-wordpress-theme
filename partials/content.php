<div class="row posts">

<?php
  $i = 1;
  $post_count = $wp_query->post_count ;
  $randomize = rand(2, $post_count);

  if(have_posts()): while(have_posts()): the_post();?>

    <div class="col-sm-6 col-md-6 col-lg-3">
      <article id="p-<?php the_ID()?>">
        <a href="<?php the_permalink(); ?>">
          <header>
            <h2><?php the_title()?></h2>
            <time datetime="<?php the_time('d-m-Y')?>">
              <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) .' '. __('ago', 'ageno-dwt'); ?>
            </time>
          </header>
          <?php the_post_thumbnail('posts-bg'); ?>
        </a>
      </article>
    </div>

    <?php
      $i++;
      if (( $randomize == $i) && (is_active_sidebar( 'post-advert' ))) :
    ?>

      <div class="col-sm-6 col-md-6 col-lg-3">
        <article>
          <?php dynamic_sidebar('post-advert'); ?>
        </article>
      </div>

    <?php
      endif;
    ?>

<?php endwhile;  ?>

</div>

<?php get_template_part('partials/pagination'); ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
