<?php
	/**
	 * Template Name: News Template
	 * Template Post Type: post, page
	 * Developed for The Fly Shop
	 * @package The_Fly_Shop
	 * Author: Chris Parsons
	 * Author URL: https://steelbridge.io
	 */
	
	get_header(); ?>
    <div id="news-header" class="container-fluid featured-post">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <?php
              $top_options = array(
                  'post_type' => 'post',
                  'posts_per_page'  => 1,
              );
              $top_query  = new WP_Query($top_options);
              while($top_query -> have_posts()) : $top_query -> the_post();
        
                  $top_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                  $top_thumbnail_id = get_post_thumbnail_id( $post->ID );
                  $alt_top = get_post_meta($top_thumbnail_id, '_wp_attachment_image_alt', true);
                  $top_permalink = get_post_permalink();
                  $top_title = get_the_title();
        
                  echo '<div class="col-lg-4">' .
                       '<h1>'. $top_title .'</h1>';
	              echo '<p></p><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
                        the_excerpt(__('(more…)'));
                  echo '</div>';
                  
                  echo '<div class="col-lg-8 featured-news-image">' .
                       '<img class="img-responsive news-featured-image" src="'. $top_img_url .'" alt="' . $alt_top . '">' .
                       '</div>';
    
              endwhile;
                wp_reset_postdata();
             
            ?>
          </div>
        </div>
      </div>
    </div>
	
	<div id="news-blog-template" class="container-fluid blog-posts">
		<div class="row news-blog-template-wrap">
          <div class="col-lg-9">
  
            <div class="panel panel-default">
              <div class="panel-body">
              <?php
                  // Define our WP Query Parameters
                  $query_options = array(
                      'post_type'   => 'post',
                      'posts_per_page' => 2,
                  );
                  $the_query = new WP_Query( $query_options );
                  
                  while ($the_query -> have_posts()) : $the_query -> the_post();
                  
                  $news_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                  $news_thumbnail_id = get_post_thumbnail_id( $post->ID );
                  $alt_news = get_post_meta($news_thumbnail_id, '_wp_attachment_image_alt', true);
                  $news_permalink = get_post_permalink();
                  $news_title = get_the_title();
                  
                  echo '<div class="row">' .
                       '<div class="col-6">' .
                       '<a href="'.$news_permalink .'" title="'. $news_title .'"><img class="img-responsive" src="' . $news_img_url . '" alt="' . $alt_news . '"></a>' .
                       '</div>' .
                       '<div class="col-6">' .
                       '<h2>The Fly Shop News</h2>' .
                       '<a href="'. $news_permalink .'" title="'. $news_title .'"><h3>' . $news_title . '</h3></a>';
                  echo '<span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span>';
                        //the_excerpt(__('(more…)'));
                  echo '</div>'.
                       '</div>';
                  
                  endwhile;
                  wp_reset_postdata();
              ?>
              </div>
            </div>
  
            <div class="panel panel-default">
              <div class="panel-body">
              <?php
                  // Define our WP Query Parameters
                  $query_options = array(
                      'post_type'   => 'travel-blog',
                      'posts_per_page' => 2,
                  );
                  $the_query = new WP_Query( $query_options );
                  
                  while ($the_query -> have_posts()) : $the_query -> the_post();
                  
                  $travel_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                  $travel_thumbnail_id = get_post_thumbnail_id( $post->ID );
                  $alt_travel = get_post_meta($travel_thumbnail_id, '_wp_attachment_image_alt', true);
                  $travel_permalink = get_post_permalink();
                  $travel_title = get_the_title();
                  
                  
                  echo '<div class="row">' .
                       '<div class="col-6">' .
                       '<a href="'. $travel_permalink .'" title="'. $travel_title .'"><img class="img-responsive" src="' . $travel_img_url . '" alt="' . $alt_travel . '">' .
                       '</div>' .
                       '<div class="col-6">' .
                       '<h2>Travel News</h2>' .
                       '<a href="'. $travel_permalink .'" title="'. $travel_title .'"><h3>' . $travel_title . '</h3></a>';
                  echo '<span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span>';
                        //the_excerpt(__('(more…)'));
                  echo '</div>' .
                       '</div>';
                  
                  endwhile;
                  wp_reset_postdata();
              ?>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
              <?php
                  // Define our WP Query Parameters
                  $query_l48_options = array(
                      'post_type'   => 'lower48blog',
                      'posts_per_page' => 2,
                  );
                  $the_l48_query = new WP_Query( $query_l48_options );
                  
                  while ($the_l48_query -> have_posts()) : $the_l48_query -> the_post();
                  
                  $l48_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                  $l48_thumbnail_id = get_post_thumbnail_id( $post->ID );
                  $alt_l48 = get_post_meta($l48_thumbnail_id, '_wp_attachment_image_alt', true);
                  $l48_permalink = get_post_permalink();
                  $l48_title = get_the_title();
                  
                  echo  '<div class="row">' .
                        '<div class="col-6">' .
                        '<a href="'. $l48_img_url .'" title="'. $l48_title .'"><img class="img-responsive" src="' . $l48_img_url . '" alt="' . $alt_l48 . '"></a>' .
                        '</div>' .
                        '<div class="col-6">' .
                        '<h2>Lower 48 News</h2>' .
                        '<a href="'. $l48_permalink .'" title="'. $l48_title .'"><h3>' . $l48_title . '</h3></a>';
                  echo  '<span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span>';
                          //the_excerpt(__('(more…)'));
                  echo  '</div>' .
                        '</div>';
                  
                  endwhile;
                  wp_reset_postdata();
              ?>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
            <?php
                // Define our WP Query Parameters
                $query_outfitters_options = array(
                    'post_type'   => 'flyfishing-news',
                    'posts_per_page' => 2,
                );
                
                $the_outfitter_query = new WP_Query( $query_outfitters_options );
      
                while ($the_outfitter_query -> have_posts()) : $the_outfitter_query -> the_post();
                
                $outfitters_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                $outfitters_thumbnail_id = get_post_thumbnail_id( $post->ID );
                $alt_outfitters = get_post_meta($outfitters_thumbnail_id, '_wp_attachment_image_alt', true);
                $outfitters_permalink = get_post_permalink();
                $outfitters_title = get_the_title();
                
                echo  '<div class="row">' .
                      '<div class="col-6">' .
                      '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><img class="img-responsive" src="'. $outfitters_img_url .'" alt="'. $alt_outfitters .'"></a>' .
                      '</div>' .
                      '<div class="col-6">' .
                      '<h2>Outfitters News</h2>' .
                      '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><h3>' . $outfitters_title . '</h3></a>';
                echo  '<span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span>';
                        //the_excerpt(__('(more…)'));
                echo  '</div>' .
                      '</div>';
                endwhile;
                wp_reset_postdata();
            ?>
              </div>
            </div>
        </div>
          
          <div class="col-lg-3">
            <?php get_sidebar(); ?>
          </div>
        </div>
    </div>
	
	<?php
	get_footer();
