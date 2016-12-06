<?php
/**
 * Slider on home page
 *
 * Remember to use 'Home Slider' category for this slider
 *
 */

?>

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
    'posts_per_page' => 2
    );
  $the_query = new WP_Query( $wp_query_args );
?>

<div id="<?php echo $carousel_name; ?>" class="carousel slide" data-ride="carousel" data-interval="5000">

  <ol class="carousel-indicators">

    <?php if ( $the_query->post_count != 1 ) : ?>
      <?php while ( $the_query->have_posts() ) :
        $the_query->the_post(); ?>
          <li data-target="#<?php echo $carousel_name; ?>" data-slide-to="<?php echo $carousel_indicator_post_no ?>" <?php if ($carousel_indicator_post_no == 0) :?> class="active" <?php endif; ?>></li>
          <?php $carousel_indicator_post_no++; ?>
      <?php endwhile; ?>
    <?php endif; ?>

  </ol>

  <div class="carousel-inner" role="listbox">
    <?php

      while ( $the_query->have_posts() ) :
      $the_query->the_post();
    ?>
        <div class="carousel-item <?php if ( $carousel_post_no == 0 ) : ?> active <?php endif; ?>">
          <?php $carousel_post_no++ ;?>
        <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('carousel-bg');
          }
        ?>

        <div class="carousel-caption">
          <header>
            <h2><?php the_title();?></h2>
            <div class="meta">
             <?php the_category(' × ') ?>
            </div>
          </header>
          <footer>
            <div class="author">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?> <?php the_author() ?>
            </div>
            <time datetime="<?php the_time('d-m-Y')?>">
              <i class="fa fa-clock-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) .' '. __('ago','ageno-default-wordpress-theme'); ?>


            </time>
          </footer>
        </div>
       </div>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>

  <?php if ( $the_query->post_count != 1 ) : ?>
    <a class="left carousel-control" href="#<?php echo $carousel_name; ?>" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#<?php echo $carousel_name; ?>" data-slide="next">›</a>
  <?php endif; ?>
</div>
