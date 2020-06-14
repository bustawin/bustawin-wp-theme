<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
the_post();
?>

<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
  <div class="row">
    <main class="site-main col-md-9" id="main">
      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <header class="single-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>
          <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
                    'after' => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->
        <footer class="entry-footer">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <small>Created <?php the_date(); ?></small>
            </li>
            <li class="list-inline-item">
              <small>Updated <?php the_modified_date() ?></small>
            </li>
          </ul>
            <?php understrap_entry_footer(); ?>
        </footer><!-- .entry-footer -->
      </article><!-- #post-## -->
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    </main><!-- #main -->
      <?php get_template_part('sidebar-templates/sidebar', 'right'); ?>
  </div><!-- .row -->
</div><!-- #content -->


<?php get_footer(); ?>
