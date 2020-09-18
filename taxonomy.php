<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

get_header(); ?>
  
  <div id="taxonomy" class="container-fluid">
    <div class="row taxonomy">
      <header class="panel">
        <div class="panel-body">
        <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
        </div>
      </header><!-- .page-header -->
    </div>
  </div>
  
<div id="taxonomy-content">
  <div class="taxonomy content-area row">
    <div class="col-lg-8 taxonomy-body">
      <?php
      if ( have_posts() ) : ?>
        
        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post();
          
          /*
   * Include the Post-Format-specific template for the content.
   * If you want to override this in a child theme, then include a file
   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
   */
         get_template_part( 'template-parts/content', get_post_format() );
        
        endwhile;
        
        the_posts_navigation();
      
      else :
        
        get_template_part( 'template-parts/content', 'none' );
      
      endif; ?>
    
    </div><!-- /col -->
    <div class="col-lg-4 taxonomy-sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div><!-- /row -->
</div>

<?php
get_footer();
