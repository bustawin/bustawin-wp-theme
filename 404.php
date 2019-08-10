<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main text-center" id="main">
          <img src="<?php print get_stylesheet_directory_uri() . '/img/404-timmy.jpg' ?>">
          <hr>
          <h5>404 — Just not found.</h5>
          <hr>
          <a href="/" class="btn btn-primary">
            Come back home, Timmy...
            <br>
            <i class="fa fa-home fa-lg"></i>
          </a>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
