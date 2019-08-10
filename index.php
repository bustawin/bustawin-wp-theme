<?php
/**
 * The main template file.
 */
get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
    <?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>

<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
  <div class="row">
    <main class="site-main col-md-9" id="main">
        <?php if (have_posts()) : ?>
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
        <?php understrap_pagination(); ?>
    </main>
      <?php get_template_part('sidebar-templates/sidebar', 'right'); ?>
  </div>
</div>

<?php get_footer(); ?>
