<?php
/**
 * Template Name: About Page
 **/

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
the_post();
wp_redirect('/about/', 301);
?>
