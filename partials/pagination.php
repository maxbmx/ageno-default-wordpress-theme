<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
<ul class="pagination">
  <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
  <li class="newer"><?php previous_posts_link(__('Next', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
</ul>
<?php } ?>
//todo
