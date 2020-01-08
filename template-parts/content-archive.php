<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

include_once(get_template_directory() . '/page-templates/post-meta/post-meta-archive.php');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-template'); ?>>

		<div id="archive-entry-styles" class="entry-content">
    <h3 class="archive archive-event-title"><?php echo get_the_title(); ?></h3>
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-fly-shop' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-fly-shop' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php the_fly_shop_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
