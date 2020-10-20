<?php

/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop
 */

if ( ! is_active_sidebar( 'sidebar-5' ) ) {
  return;
}
?>

<aside id="esblodge-sidebar" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'sidebar-5' ); ?>
</aside><!-- #secondary -->

