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
    
    <?php $hasposts_post = get_posts('post_type=post');
          if(!empty($hasposts_post)) { ?>
    
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
      
                echo '<div class="col-md-4">' .
                     '<h1>'. $top_title .'</h1>';
                echo '<p></p><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
                      the_excerpt(__('(more…)'));
                echo '</div>';
                
                echo '<div class="col-md-8 featured-news-image">' .
                     '<img class="img-responsive news-featured-image" src="'. $top_img_url .'" alt="' . $alt_top . '">' .
                     '</div>';
  
            endwhile;
              wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
	
  <div id="news-blog-template" class="container-fluid blog-posts">
    <div class="row news-blog-template-wrap">
      <div class="col-lg-9">
	
      <?php $hasposts_post = get_posts('post_type=post');
            if(!empty($hasposts_post)) { ?>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_options = array(
          'post_type'   => 'post',
          'posts_per_page' => 1,
          );
          $the_query = new WP_Query( $query_options );
          
          while ($the_query -> have_posts()) : $the_query -> the_post();
          
          $news_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $news_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_news = get_post_meta($news_thumbnail_id, '_wp_attachment_image_alt', true);
          $news_permalink = get_post_permalink();
          $news_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'.$news_permalink .'" title="'. $news_title .'"><img class="img-responsive" src="' . $news_img_url . '" alt="' . $alt_news . '"></a>' .
               '</div>' .
               '<div class="col-md-6">' .
               '<h2>The Fly Shop News</h2>' .
               '<a href="'. $news_permalink .'" title="'. $news_title .'"><h3>' . $news_title . '</h3></a>';
          
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-one" aria-expanded="false" aria-controls="collapse-news-archive-one">
                See more News articles
                </button>
                </div>
                </div>
                </div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div><!-- /row -->
        </div><!-- /panel-body -->
      </div><!-- /panel-default -->
  
      <div class="collapse" id="collapse-news-archive-one">
        <div class="well">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_post_collapse_options = array(
          'post_type'   => 'post',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_post_collapse_query = new WP_Query( $query_post_collapse_options );
          
          while ($the_post_collapse_query -> have_posts()) : $the_post_collapse_query -> the_post();
          
          $news_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $news_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_news = get_post_meta($news_thumbnail_id, '_wp_attachment_image_alt', true);
          $news_permalink = get_post_permalink();
          $news_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'.$news_permalink .'" title="'. $news_title .'"><img class="img-responsive" src="' . $news_img_url . '" alt="' . $alt_news . '"></a>' .
               '<a href="'. $news_permalink .'" title="'. $news_title .'"><h4>' . $news_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
                
                the_excerpt(__('(more…)'));
                
          echo '</div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
        </div>
      </div>
			
      <?php }
      $hasposts_travelblog = get_posts('post_type=travel-blog');
      if(!empty($hasposts_travelblog)) { ?>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_options = array(
          'post_type'   => 'travel-blog',
          'posts_per_page' => 1,
          );
          $the_query = new WP_Query( $query_options );
          
          while ($the_query -> have_posts()) : $the_query -> the_post();
          
          $travel_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $travel_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_travel = get_post_meta($travel_thumbnail_id, '_wp_attachment_image_alt', true);
          $travel_permalink = get_post_permalink();
          $travel_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'. $travel_permalink .'" title="'. $travel_title .'"><img class="img-responsive" src="' . $travel_img_url . '" alt="' . $alt_travel . '">' .
               '</div>' .
               '<div class="col-md-6">' .
               '<h2>Travel News</h2>' .
               '<a href="'. $travel_permalink .'" title="'. $travel_title .'"><h3>' . $travel_title . '</h3></a>';
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-two" aria-expanded="false" aria-controls="collapse-news-archive-two">
                See more News articles
                </button>
                </div>
                </div>
                </div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
        </div>
      </div>
      
      <div class="collapse" id="collapse-news-archive-two">
        <div class="well">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_travel_collapse_options = array(
          'post_type'   => 'travel-blog',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_travel_collapse_query = new WP_Query( $query_travel_collapse_options );
          
          while ($the_travel_collapse_query -> have_posts()) : $the_travel_collapse_query -> the_post();
          
          $travel_collapse_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $travel_collapse_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_travel_collapse = get_post_meta($travel_collapse_thumbnail_id, '_wp_attachment_image_alt', true);
          $travel_collapse_permalink = get_post_permalink();
          $travel_collapse_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'.$travel_collapse_permalink .'" title="'. $travel_collapse_title .'"><img class="img-responsive" src="' . $travel_collapse_img_url . '" alt="' . $alt_travel_collapse . '"></a>' .
               '<a href="'. $travel_collapse_permalink .'" title="'. $travel_collapse_title .'"><h4>' . $travel_collapse_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '</div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
        </div>
      </div>
	
      <?php }
      $hasposts_lower48blog = get_posts('post_type=lower48blog');
      if(!empty($hasposts_lower48blog)) { ?>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
          <?php
          $query_l48_options = array(
          'post_type'   => 'lower48blog',
          'posts_per_page' => 1,
          );
          
          $the_l48_query = new WP_Query( $query_l48_options );
          
          while ($the_l48_query -> have_posts()) : $the_l48_query -> the_post();
          
          $l48_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $l48_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_l48 = get_post_meta($l48_thumbnail_id, '_wp_attachment_image_alt', true);
          $l48_permalink = get_post_permalink();
          $l48_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'. $l48_permalink .'" title="'. $l48_title .'"><img class="img-responsive" src="' . $l48_img_url . '" alt="' . $alt_l48 . '">' .
               '</div>' .
               '<div class="col-md-6">' .
               '<h2>Travel News</h2>' .
               '<a href="'. $l48_permalink .'" title="'. $l48_title .'"><h3>' . $l48_title . '</h3></a>';
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-three" aria-expanded="false" aria-controls="collapse-news-archive-three">
                See more News articles
                </button>
                </div>
                </div>
                </div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
        </div>
      </div>
      
      <div class="collapse" id="collapse-news-archive-three">
        <div class="well">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_l48_options = array(
          'post_type'   => 'lower48blog',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_l48_query = new WP_Query( $query_l48_options );
          
          while ($the_l48_query -> have_posts()) : $the_l48_query -> the_post();
          
          $l48_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $l48_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_l48 = get_post_meta($l48_thumbnail_id, '_wp_attachment_image_alt', true);
          $l48_permalink = get_post_permalink();
          $l48_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'.$l48_permalink .'" title="'. $l48_title .'"><img class="img-responsive" src="' . $l48_img_url . '" alt="' . $alt_l48 . '"></a>' .
               '<a href="'. $l48_permalink .'" title="'. $l48_title .'"><h4>' . $l48_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '</div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
        </div>
      </div>
	
        <?php }
        $hasposts_flyfishing_news = get_posts('post_type=flyfishing-news');
        if(!empty($hasposts_flyfishing_news)) { ?>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_outfitters_options = array(
          'post_type'   => 'flyfishing-news',
          'posts_per_page' => 1,
          );
          $the_outfitters_query = new WP_Query( $query_outfitters_options );
          
          while ($the_outfitters_query -> have_posts()) : $the_outfitters_query -> the_post();
          
          $outfitters_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $outfitters_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_outfitters = get_post_meta($outfitters_thumbnail_id, '_wp_attachment_image_alt', true);
          $outfitters_permalink = get_post_permalink();
          $outfitters_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><img class="img-responsive" src="' . $outfitters_img_url . '" alt="' . $alt_outfitters . '">' .
               '</div>' .
               '<div class="col-md-6">' .
               '<h2>Outfitters News</h2>' .
               '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><h3>' . $outfitters_title . '</h3></a>';
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          endwhile;
          wp_reset_postdata();
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-four" aria-expanded="false" aria-controls="collapse-news-archive-four">
                See more News articles
                </button>
                </div>
                </div>
                </div>'; ?>
          
          </div>
        </div>
      </div>
  
      <div class="collapse" id="collapse-news-archive-four">
        <div class="well">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_outfitters_options = array(
          'post_type'   => 'flyfishing-news',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_outfitters_query = new WP_Query( $query_outfitters_options );
          
          while ($the_outfitters_query -> have_posts()) : $the_outfitters_query -> the_post();
          
          $outfitters_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $outfitters_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_outfitters = get_post_meta($outfitters_thumbnail_id, '_wp_attachment_image_alt', true);
          $outfitters_permalink = get_post_permalink();
          $outfitters_title = get_the_title();
          
          echo '<div class="col-md-6">' .
               '<a href="'.$outfitters_permalink .'" title="'. $outfitters_title .'"><img class="img-responsive" src="' . $outfitters_img_url . '" alt="' . $alt_outfitters . '"></a>' .
               '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><h4>' . $outfitters_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by:&nbsp;' . get_the_author() .'</span>&nbsp;<span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '</div>';
          
          endwhile;
          wp_reset_postdata();
          ?>
          
          </div>
        </div>
      </div>
      
      <?php } ?>
      
      </div>
      <div class="col-lg-3">
      <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

	
	<?php
	get_footer();
