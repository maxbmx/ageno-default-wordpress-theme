<?php
  $carousel_name = 'carousel-ageno';
  $carousel_indicator_post_no = 0;
  $carousel_post_no = 0;

  if ( is_category('Home Slider') ) {
    $category_name = 'Home Slider';
  } else {
    $category_name = null;
  }
?>

<?php
  $wp_query_args = array(
    'category_name' => $category_name,
    'posts_per_page' => 12
    );
  $the_query = new WP_Query( $wp_query_args );

  print_r($the_query->have_posts());
?>

<div class="row posts">

<?php
  $i = 1;
  $post_count = $wp_query->post_count ;
  $randomize = rand(2, $post_count);

  if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();?>

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

<?php endif; ?>

