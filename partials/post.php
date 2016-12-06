<section class="post" id="p-<?php the_ID()?>">
  <a href="<?php the_permalink(); ?>">
    <header>
      <h2><?php the_title()?></h2>
      <time datetime="<?php the_time('d-m-Y')?>">
        <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) .' '. __('ago', 'ageno-dwt'); ?>
      </time>
    </header>
    <?php the_post_thumbnail('posts-bg'); ?>
  </a>
</section>
