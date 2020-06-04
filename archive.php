<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */
$archive_page_hero = get_theme_mod( 'archive_page_hero', '' );
$archive_page_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$archive_logo_upload = get_theme_mod ('archive_page_logo');

include_once('page-templates/post-meta/post-meta-archive.php');

get_header(); ?>
  
  </div>

<?php if ( $archive_page_hero !== '' ) : ?>
  
  <div class="template-header">
    <div id="basic-scrolly">
      <img src="<?php echo $archive_page_hero; ?>" class="archive-hero paralaxed img-responsive-width-100 center-block">
      
      <div class="center-content-flex template-header-content">
        <div class="basicpagelogo signature-header template-class text-center">
          
          <dl class="landing-hd">
            <dd class="dd-1"><img src="<?php echo $archive_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
            
            <?php
            $value1 = get_theme_mod( 'archive_page_title', '' );
            
            if ($value1 !== '') {
              
              echo '<h1 class="archive-title">' . $value1 . '</h1>';
              
            } else {
              
              echo '<dd class="dd-2">' . post_type_archive_title( '<h1 class="archive-title">', '</h1>' ) . '</dd>';
              
            }
            ?>
            
            <dd class="dd-4"><h3 class="archive logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
          </dl>
        
        </div>
      </div>
      <a href="#main" class="more scrolly">Sign Up Here!</a>
    </div>
  </div>

<?php else: ?>
  
  <div class="template-header">
    
    <img src="<?php echo $archive_page_default; ?>" class="archive-hero paralaxed img-responsive-width-100 center-block">
    
    <div class="center-content-flex template-header-content">
      <div class="basicpagelogo signature-header template-class text-center">
        
        <dl class="landing-hd">
          <dd class="dd-1"><img src="<?php echo $archive_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
          
          <?php
          $value2 = get_theme_mod( 'archive_page_title', '' );
          
          if ($value2 !== '') {
            
            echo '<h1 class="archive-title">' . $value2 . '</h1>';
            
          } else {
            
            echo '<dd class="dd-2">' . post_type_archive_title( '<h1 class="archive-title">', '</h1>' ) . '</dd>';
            
          }
          ?>
          
          <dd class="dd-4"><h3 class="archive logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
        </dl>
      
      </div>
    </div>
    <div id="basic-scrolly">
      <a href="#main" class="more scrolly">Sign Up Here!</a>
    </div>
  </div>

<?php endif; ?>
  
  <div id="main" class="container-fluid">
    <?php if ( get_theme_mod('archive_page_textarea') !== '' ) : ?>
      <div class="archive panel panel-default">
        <div class="archive panel-body">
          <?php echo do_shortcode(get_theme_mod('archive_page_textarea')); ?>
        </div>
      </div>
    <?php endif; ?>
    <div class="container-fluid"></div>
    <div class="archive content-area row display-flex">
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
          get_template_part( 'template-parts/content', 'archive' );
        
        endwhile;
        
        the_posts_navigation();
      
      endif; ?>
      
      <!--<div class="col-md-4">
        <?php //get_sidebar(); ?>
      </div> -->
    </div><!-- /row -->
  </div><!-- /container-fluid -->
  </div>

<?php
get_footer();
