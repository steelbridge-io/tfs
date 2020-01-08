<?php
/**
 * Template part for displaying post meta in blog-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$blog_description			= get_post_meta(get_the_ID(), 'blog-description', true);
