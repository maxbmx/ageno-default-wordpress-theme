<?php
/*
All the functions are in the PHP pages in the `functions/` folder.
*/

load_theme_textdomain( 'ageno-dwt', get_template_directory().'/languages' );
require_once locate_template('/functions/helper.php');

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/wp_bootstrap_navwalker.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');

//require_once locate_template('/functions/search-widget.php');
require_once locate_template('/functions/index-pagination.php');
//require_once locate_template('/functions/split-post-pagination.php');
//require_once locate_template('/functions/feedback.php');

require_once locate_template('/functions/images.php');

require_once locate_template('/functions/custom-admin.php');

