<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <div class="article-content row">

<?php if ( has_post_thumbnail() ) {
  global $post;
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
  $post_title = get_the_title($post->ID);
  $post_permalink = get_the_permalink($post->ID);
  
  ?>
  
  <div class="col-md-4">
    <a href="<?php echo $post_permalink; ?>" title="<?php echo $post_title; ?>">
    <img class="img-responsive" src="<?php echo $featured_img_url ?>" alt="">
    </a>
    
  </div>
  
		
<?php } ?>

	<div id="content-template-part-content" class="col-md-8">

		<div id="default-entry-styles" class="entry-content content-part">
          
          <a href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>">
            <h2 class="content-title"><?php echo get_the_title(); ?></h2>
          </a>
          <p><b>Published:&nbsp;<?php echo get_the_date( 'F j, Y' ); ?></b></p>
			<?php
				the_excerpt( sprintf(
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
		
	</div><!-- .container-fluid -->
  </div>
</article><!-- #post-## -->
