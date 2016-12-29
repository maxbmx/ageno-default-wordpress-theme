<?php
  class Ageno_Dwt_Comment extends Walker_Comment {
    var $tree_type = 'comment';
    var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

    // constructor – wrapper for the comments list
    function __construct() { ?>

      <section class="comments-list">

    <?php }

    // start_lvl – wrapper for child comments list
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $GLOBALS['comment_depth'] = $depth + 2; ?>

      <section class="child-comments comments-list">

    <?php }

    // end_lvl – closing wrapper for child comments list
    function end_lvl( &$output, $depth = 0, $args = array() ) {
      $GLOBALS['comment_depth'] = $depth + 2; ?>

      </section>

    <?php }

    // start_el – HTML for comment template
    function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
      $depth++;
      $GLOBALS['comment_depth'] = $depth;
      $GLOBALS['comment'] = $comment;
      $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );

      if ( 'article' == $args['style'] ) {
        $tag = 'article';
        $add_below = 'comment';
      } else {
        $tag = 'article';
        $add_below = 'comment';
      } ?>

      <article <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
        <div class="comment-meta post-meta" role="complementary">
          <figure class="gravatar"><?php echo get_avatar( $comment, 28, '', 'Gravatar' ); ?></figure>
          <a class="comment-author" href="<?php comment_author_url(); ?>" rel="nofollow" itemprop="author"><?php comment_author(); ?></a>
          <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          <?php edit_comment_link('<i class="comment-meta-item fa fa-pencil" aria-hidden="true"></i>','',''); ?>

          <time datetime="<?php comment_date('Y-m-d') ?> <?php comment_time('H:i') ?>" itemprop="datePublished">
            <a href="#comment-<?php comment_ID() ?>" itemprop="url"><i class="fa fa-clock-o"></i><?php echo human_time_diff(get_comment_date('U')).' '. __('ago','ageno-dwt') ?></a>
          </time>

          <?php if ($comment->comment_approved == '0') : ?>
            <!--<p class="comment-meta-item">Your comment is awaiting moderation.</p>-->
          <?php endif; ?>
        </div>
        <div class="comment-content post-content" itemprop="text">
          <?php comment_text() ?>
        </div>

    <?php }

    // end_el – closing HTML for comment template
    function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

      </article>

    <?php }

    // destructor – closing wrapper for the comments list
    function __destruct() { ?>

      </section>

    <?php }

  }
?>
