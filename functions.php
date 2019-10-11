<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}

add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function add_child_theme_textdomain()
{
    load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}

add_action('after_setup_theme', 'add_child_theme_textdomain');

/**
 * Avoids understrap_all_excerpts_get_more_link functionality.
 *
 * @param string $post_excerpt Posts's excerpt.
 *
 * @return string
 */
function understrap_all_excerpts_get_more_link($post_excerpt)
{
    return $post_excerpt;
}


function allow_svg_filetype($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'allow_svg_filetype'); // allows uploading SVG files

function understrap_pagination($args = array(), $class = 'pagination')
{

    if ($GLOBALS['wp_query']->max_num_pages <= 1) {
        return;
    }

    $args = wp_parse_args(
        $args,
        array(
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => __('&laquo;', 'understrap'),
            'next_text' => __('&raquo;', 'understrap'),
            'screen_reader_text' => __('Posts navigation', 'understrap'),
            'type' => 'array',
            'current' => max(1, get_query_var('paged')),
        )
    );

    $links = paginate_links($args);

    ?>

  <nav aria-label="<?php echo $args['screen_reader_text']; ?>">

    <ul class="pagination justify-content-center">

        <?php
        foreach ($links as $key => $link) {
            ?>
          <li class="page-item <?php echo strpos($link, 'current') ? 'active' : ''; ?>">
              <?php echo str_replace('page-numbers', 'page-link', $link); ?>
          </li>
            <?php
        }
        ?>

    </ul>

  </nav>

    <?php
}

// bye bye css jetpack
// Stop JetPacks Minified/Concatention CSS file
add_filter('jetpack_implode_frontend_css', '__return_false');
//Remove JepPack CSS
function themeprefix_remove_jetpack_css()
{
    wp_deregister_style('AtD_style'); // After the Deadline
    wp_deregister_style('jetpack_likes'); // Likes
    wp_deregister_style('jetpack_related-posts'); //Related Posts
    wp_deregister_style('jetpack-carousel'); // Carousel
    wp_deregister_style('grunion.css'); // Grunion contact form
    wp_deregister_style('the-neverending-homepage'); // Infinite Scroll
    wp_deregister_style('infinity-twentyten'); // Infinite Scroll - Twentyten Theme
    wp_deregister_style('infinity-twentyeleven'); // Infinite Scroll - Twentyeleven Theme
    wp_deregister_style('infinity-twentytwelve'); // Infinite Scroll - Twentytwelve Theme
    wp_deregister_style('noticons'); // Notes
    wp_deregister_style('post-by-email'); // Post by Email
    wp_deregister_style('publicize'); // Publicize
    wp_deregister_style('sharedaddy'); // Sharedaddy
    wp_deregister_style('sharing'); // Sharedaddy Sharing
    wp_deregister_style('stats_reports_css'); // Stats
    wp_deregister_style('jetpack-widgets'); // Widgets
    wp_deregister_style('jetpack-slideshow'); // Slideshows
    wp_deregister_style('presentations'); // Presentation shortcode
    wp_deregister_style('jetpack-subscriptions'); // Subscriptions
    wp_deregister_style('tiled-gallery'); // Tiled Galleries
    wp_deregister_style('widget-conditions'); // Widget Visibility
    wp_deregister_style('jetpack_display_posts_widget'); // Display Posts Widget
    wp_deregister_style('gravatar-profile-widget'); // Gravatar Widget
    wp_deregister_style('widget-grid-and-list'); // Top Posts widget
    wp_deregister_style('jetpack-widgets'); // Widgets
    wp_dequeue_style('eu-cookie-law-style');
    wp_dequeue_style('jetpack-social-menu');
    wp_dequeue_style('genericons');
}

add_action('wp_enqueue_scripts', 'themeprefix_remove_jetpack_css', 100);
