<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<aside class="col-md-3 widget-area padding-top" id="right-sidebar" role="complementary">
  <img src="<?php print get_stylesheet_directory_uri() . '/img/timmy-blog.png' ?>"
       id="timmy-coffee"
       class="img-responsive d-none d-sm-block"
       title="Me, a merciless coder, writer, and manager."
  >
  <hr>
    <?php dynamic_sidebar('right-sidebar'); ?>
</aside><!-- #right-sidebar -->
