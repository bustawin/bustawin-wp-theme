<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<a href="<?php echo esc_url(get_permalink()) ?>" <?php post_class("list-group-item list-group-item-action"); ?>
   id="post-<?php the_ID(); ?>"
>
  <div class="d-flex w-100 justify-content-between">
    <h3 class="mb-1"><?php the_title() ?></h3>
    <small>
        <?php echo get_the_modified_date(); ?>
    </small>
  </div>
    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
  <div class="entry-content mb-1">
      <?php the_excerpt(); ?>
      <?php
      wp_link_pages(
          array(
              'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
              'after' => '</div>',
          )
      );
      ?>
  </div><!-- .entry-content -->
</a><!-- #post-## -->
