<?php

// Do not delete this section
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
  die ('Please do not load this page directly. Thanks!'); }
if ( post_password_required() ) { ?>
  <div class="alert alert-warning">
    <?php _e('This post is password protected. Enter the password to view comments.', 'ageno-dwt'); ?>
  </div>
<?php
  return;
}
// End do not delete section


if (have_comments()) : ?>

<p class="text-muted">
 <a href=""><i class="fa fa-comment-o"></i> <?php comments_number(__('None', 'ageno-dwt'), '1', '%'); ?></a>
</p>

<ol class="commentlist">
  <?php wp_list_comments( 'avatar_size'=> 50 );?>
</ol>

<p class="text-muted">
  <?php paginate_comments_links() ?>
</p>

<?php
  else :
	  if (comments_open()) :
  echo "<p class='alert alert-info'>" . __('Be the first to write a comment.', 'ageno-dwt') . "</p>";
		else :
			echo "<p class='alert alert-warning'>" . __('Comments are closed for this post.', 'ageno-dwt') . "</p>";
		endif;
	endif;
?>

<?php if (comments_open()) : ?>
<section id="respond">
  <p><?php cancel_comment_reply_link(); ?></p>
  <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
  <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'ageno-dwt'), wp_login_url(get_permalink())); ?></p>
  <?php else : ?>
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if (is_user_logged_in()) : ?>
    <p>
      <?php printf(__('Logged in as', 'ageno-dwt') . ' <a href="%s/wp-admin/profile.php">%s</a>.', get_option('siteurl'), $user_identity); ?>
      <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'ageno-dwt'); ?>"><?php echo __('Log out', 'ageno-dwt') . ' <i class="glyphicon glyphicon-arrow-right"></i>'; ?></a>
    </p>
    <?php else : ?>
    <div class="form-group">
      <label for="author" class="sr-only"><?php _e('Your name', 'ageno-dwt'); if ($req) echo ' <span class="text-muted">' . __('(required)', 'ageno-dwt') . '</span>'; ?></label>
      <input type="text" class="form-control" name="author" id="author" placeholder="<?php _e('Your name', 'ageno-dwt'); ?>" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
    </div>
    <div class="form-group">
      <label for="email" class="sr-only"><?php _e('Your email address', 'ageno-dwt'); if ($req) echo ' <span class="text-muted">' . _e('(required, but will not be published)', 'ageno-dwt') . '</span>'; ?></label>
      <input type="email" class="form-control" name="email" id="email" placeholder="<?php _e('Your email address', 'ageno-dwt'); ?>" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
    </div>
    <div class="form-group">
      <label for="url" class="sr-only"><?php echo __('Your website', 'ageno-dwt') . ' <span class="text-muted">' . __('if you have one (not required)', 'ageno-dwt') . '</span>'; ?></label>
      <input type="url" class="form-control" name="url" id="url" placeholder="<?php _e('Your website url', 'ageno-dwt'); ?>" value="<?php echo esc_attr($comment_author_url); ?>">
    </div>
    <?php endif; ?>
    <div class="form-group">
      <label for="comment" class="sr-only"><?php _e('Your comment', 'ageno-dwt'); ?></label>
      <textarea name="comment" class="form-control" id="comment" placeholder="<?php _e('Your comment', 'ageno-dwt'); ?>" rows="8" aria-required="true"></textarea>
    </div>
    <p><input name="submit" class="btn btn-default btn-primary" type="submit" id="submit" value="<?php _e('Submit comment', 'ageno-dwt'); ?>"></p>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  <?php endif; ?>
</section>
<?php endif; ?>
