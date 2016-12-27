<?php if (show_posts_nav()) : ?>
<ul class="pagination">
  <li class="page-link pull-left"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'ageno-dwt')) ?></li>
  <li class="page-link pull-right"><?php previous_posts_link(__('Next', 'ageno-dwt') . ' <i class="fa fa-arrow-right"></i>') ?></li>
</ul>
<?php endif; ?>
