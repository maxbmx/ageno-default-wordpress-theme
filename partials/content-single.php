<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
      <section class="meta">
        <div class="author">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?> <?php the_author() ?>
        </div>
        <time datetime="<?php the_time('d-m-Y')?>">
          <i class="fa fa-clock-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . __(' ago'); ?>
        </time>
      </section>
      <?php the_content()?>
      <?php wp_link_pages(); ?>

  </article>
</section>

<?php comments_template('/loops/comments.php'); ?>
<?php endwhile; else: ?>
  <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
