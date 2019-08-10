<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>
<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
  <div class="row">
    <main class="site-main col-md-9" id="main">
        <?php if (have_posts()) : ?>
          <header class="single-header">
            <h1 class="page-title">
                <?php
                printf(
                /* translators: %s: query term */
                    esc_html__('Search Results for: %s', 'understrap'),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>

          </header><!-- .page-header -->
          <div class="list-group list-group-flush">
              <?php while (have_posts()) : the_post(); ?>
                  <?php
                  get_template_part('loop-templates/content', get_post_format());
                  ?>
              <?php endwhile; ?>

          </div>
        <?php else : ?>
            <?php get_template_part('loop-templates/content', 'none'); ?>
        <?php endif; ?>
    </main>
      <?php get_template_part('sidebar-templates/sidebar', 'right'); ?>
  </div>
</div>
<?php get_footer(); ?>
