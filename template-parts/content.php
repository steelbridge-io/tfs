<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

include_once(get_template_directory() . '/page-templates/post-meta/post-meta-default.php');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('default-template'); ?>>

<?php if ( has_post_thumbnail() ) { ?>
		
  <header class="template-header">

  <img src="<?php echo $default_post_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">

  <div class="center-content-flex template-header-content">
  <div class="basicpagelogo signature-header template-class text-center">

    <dl class="landing-hd">
      <dd class="dd-1"><img src="<?php echo $default_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="The Fly Shop Default Template Logo"></dd>

      <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>

       <?php if ( get_post_meta($post->ID, 'signature-description', true) ) 
          echo '<dd class="dd-3"><p class="template-description">' . $default_page_description . '</p></dd>' ?>

      <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
    </dl>

    </div>
  </div>
  </header>
		
<?php } else { ?>
	
	<header class="entry-header basic-page text-center">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_fly_shop_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
  
  <?php } ?>

	<div class="container default-template">

		<div id="default-entry-styles" class="entry-content">
    <h2 class="logo-tel"><?php echo get_the_title(); ?></h2>
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
		
	</div><!-- .container-fluid -->

	<footer class="entry-footer">
		<?php the_fly_shop_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
