<?php
/*
The Page Loop
=============
*/
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>

      <div class="adt">
        <?php the_content()?>
      </div>

      <?php wp_link_pages(); ?>

  </article>
</section>

<?php endwhile; else: ?>
  <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
