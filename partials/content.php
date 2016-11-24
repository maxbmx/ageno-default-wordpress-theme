<div class="row posts">

<?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="col-md-3 col-sm-6">
      <article id="p-<?php the_ID()?>">
        <a href="<?php the_permalink(); ?>">
          <header>
            <h2><?php the_title()?></h2>
            <time datetime="<?php the_time('d-m-Y')?>">
              <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . __(' ago'); ?>
            </time>
          </header>
          <?php the_post_thumbnail('posts-bg'); ?>
        </a>
      </article>
    </div>
<?php endwhile;  ?>
</div>

<?php get_template_part('partials/pagination'); ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
