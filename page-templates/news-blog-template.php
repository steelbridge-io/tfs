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
	
	<div id="news-blog-template" class="container-fluid">
		<div class="row news-blog-template-wrap">
			<div class="col-lg-6">
                <h2>The Fly Shop News</h2>
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
					
					echo '<div class="card">' .
					     '<h3>' . get_the_title() . '</h3>' .
                         '<div class="cardbody">' .
                         '<img class="img-responsive" src="' . $news_img_url . '" alt="' . $alt_news . '">';
					        the_excerpt(__('(more…)'));
                    echo '</div>' .
                         '</div>';
					
					endwhile;
					wp_reset_postdata();
				?>
			</div>
			<div class="col-lg-6">
                <h2>Travel News</h2>
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
						
					echo '<div class="card">' .
					     '<h3>' . get_the_title() . '</h3>' .
                         '<div class="cardbody">' .
					     '<img class="img-responsive" src="' . $travel_img_url . '" alt="' . $alt_travel . '">';
                            the_excerpt(__('(more…)'));
					echo '</div>' .
                         '</div>';
					
					endwhile;
					wp_reset_postdata();
				?>
			</div>
			<div class="col-lg-6">
                <h2>Lower 48 News</h2>
				<?php
					// Define our WP Query Parameters
					$query_l48_options = array(
						'post_type'   => 'lower48blog',
						'posts_per_page' => 1,
					);
					$the_l48_query = new WP_Query( $query_l48_options );
					
					while ($the_l48_query -> have_posts()) : $the_l48_query -> the_post();
					
					$l48_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                    $l48_thumbnail_id = get_post_thumbnail_id( $post->ID );
                    $alt_l48 = get_post_meta($l48_thumbnail_id, '_wp_attachment_image_alt', true);
                    
                    echo '<div class="card">' .
                         '<h3>' . get_the_title() . '</h3>' .
                         '<div class="cardbody">' .
                         '<img class="img-responsive" src="' . $l48_img_url . '" alt="' . $alt_l48 . '">';
                            the_excerpt(__('(more…)'));
                    echo '</div>' .
                         '</div>';
                    
					endwhile;
					wp_reset_postdata();
				?>
			</div>
          <div class="col-lg-6">
            <h2>Outfitters News</h2>
	          <?php
		          // Define our WP Query Parameters
		          $query_outfitters_options = array(
			          'post_type'   => 'flyfishing-news',
			          'posts_per_page' => 1,
		          );
		          
		          $the_outfitter_query = new WP_Query( $query_outfitters_options );
		
		          while ($the_outfitter_query -> have_posts()) : $the_outfitter_query -> the_post();
		          
                  $outfitters_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                  $outfitters_thumbnail_id = get_post_thumbnail_id( $post->ID );
                  $alt_outfitters = get_post_meta($outfitters_thumbnail_id, '_wp_attachment_image_alt', true);
                  
                  echo  '<div class="card">' .
                        '<h3>' . get_the_title() . '</h3>' .
                        '<div class="cardbody">' .
                        '<img class="img-responsive" src="'. $outfitters_img_url .'" alt="'. $alt_outfitters .'">';
                          the_excerpt(__('(more…)'));
                  echo  '</div>' .
                        '</div>';
                  
		          endwhile;
		          wp_reset_postdata();
	          ?>
          </div>
		</div>
	</div>
	
	<?php
	get_footer();
