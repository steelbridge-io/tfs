<?php
/**
 *  Template Name: Front Page
 *  Template Post Type: page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

include_once('post-meta/post-meta-front-page.php');

get_header(); ?>

    <!-- Banner -->
    <!-- The .banner hack is used with the Theme Customizer feature. Because JQuery does not target pseudo elements, we can target a class in the DOM and change it to a <style> element -->
    <span class="bannerhack"></span>
    <section id="banner">
        <div class="inner">
            <img src="<?php echo $front_page_logo;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
            <h3><?php echo get_theme_mod('telephone_number'); ?></h3>
        </div>
        <a href="#main" class="more scrolly">Learn More</a>
    </section>

    <article id="main">
        <!-- === JOIN NEWS LETTER === -->
        <div id="fp-well" class="well well-sm text-center no-margin-bottom">

            <div id="fp-well" class="well well-sm text-center no-margin-bottom">

                <form class="form-inline" method="post" action="https://oi.vresp.com?fid=85819a996f" target="vr_optin_popup"  onsubmit="window.open( 'https://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true">

                    <div id="pop-over-fp" class="form-group link-color-tfs-red">
                        <div>
                            <label for="exampleInputEmail2"><h3>Sign Up For Our Newsletter</h3></label>
                        </div>
                        <input name="email_address" type="email" class="form-control removeglow" id="exampleInputEmail2" placeholder="jane.doe@example.com"><span class="mt-1618-mobile">

        <button class="btn-md btn background-color-tfs-red font-color-white opacity-7"  type="submit" value="Sign Up!">Click Here To Sign Up!</button>

        <a tabindex="0" role="button" aria-hidden="true" data-trigger="hover" data-toggle="popover" data-placement="top" title="Safe Subscribe" data-content="We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your email address to any third party. Nor will we send you unsolicited email. You will have the option to safely unsubscribe upon receiving our newsletters. We just want to deleiver great photos, fantastic fly fishing ideas and motivation!"><span class="glyphicon glyphicon-question-sign gi-2x"></span></a></span>
                    </div>

                </form>

            </div>

        </div>

        <!-- ====== FEATURE ROW ====== -->
        <div class="container-fluid2">
            <div class="row">
                <div class="col-md-4">
                    <!-- Front Page Widget #1 -->
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_1_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_1_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_1_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_1; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_1_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_1_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Front Page Widget #2 -->
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_2_title_link; ?>" target="_blank" title="The Fly Shop Featured Content"><?php echo $front_page_image_2_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_2_title_link; ?>" target="_blank" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_2; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_2_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_2_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Front Page Widget #3 -->
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_3_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_3_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_3_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_3; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_3_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_3_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Front Page Widget #4 -->
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_4_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_4_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_4_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_4; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_4_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_4_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Front Page Widget #5 -->
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_5_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_5_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_5_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_5; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_5_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_5_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Front Page Widget #6 -->
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_6_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_6_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_6_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_6; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_6_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_6_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== FEATURE ROW ====== -->
        <div class="container-fluid2">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_7_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_7_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_7_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_7; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_7_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_7_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_8_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_8_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_8_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_8; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_8_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_8_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail-no-border">
                        <h3 class="widget-title"><a href="<?php echo $front_page_image_9_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_9_title; ?></a></h3>
                        <a href="<?php echo $front_page_image_9_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_9; ?>"></a>
                        <section id="" class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $front_page_image_9_sub_title; ?></h3>
                                <p class="text-justify"><?php echo $front_page_image_9_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> <!--</section>-->

        <!-- === FLIP PAGE SECTION === -->
        <div id="fp-well" class="well well-sm text-center no-margin-bottom">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="widget-title"><a href="<?php echo $flippage1_title_link; ?>" target="_blank" title="The Fly Shop Featured Content"><?php echo $flippage1_title; ?></a></h3>
                    <a href="<?php echo $flippage1_title_link; ?>" class="thumbnail" target="_blank">
                        <img src="<?php echo $flippage1_image; ?>" alt="<?php echo $flippage1_image_alt ?>" title="Flip Page Catalog #1">
                    </a>
                    <section class="widget">
                        <div class="caption">
                            <h3 class="widget-title"><?php echo $flippage1_sub_title;?></h3>
                            <p class="text-justify"><?php echo $flippage1_caption;?></p>
                        </div>
                    </section>
                </div>

                <?php if(get_post_meta(get_the_ID(), 'flip-page-2-checkbox', true) == 'yes'): ?>

                    <div class="col-md-3">
                        <h3 class="widget-title"><a href="<?php echo $flippage2_title_link; ?>" target="_blank" title="The Fly Shop Flip Page Catalog Title"><?php echo $flippage2_title; ?></a></h3>
                        <a href="<?php echo $flippage2_title_link;?>" class="thumbnail" target="_blank" title="Flip Page Catalog #2">
                            <img src="<?php echo $flippage2_image;?>" alt="<?php echo $flippage2_image_alt ?>">
                        </a>
                        <section class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $flippage2_sub_title;?></h3>
                                <p class="text-justify"><?php echo $flippage2_caption;?></p>
                            </div>
                        </section>
                    </div>

                <?php endif; ?>

                <?php if(get_post_meta(get_the_ID(), 'flip-page-3-checkbox', true) == 'yes'): ?>

                    <div class="col-md-3">
                        <h3 class="widget-title"><a href="<?php echo $flippage3_title_link; ?>" target="_blank" title="The Fly Shop Featured Content"><?php echo $flippage3_title; ?></a></h3>
                        <a href="<?php echo $flippage3_title_link;?>" class="thumbnail" target="_blank" title="Flip Page Catalog #3">
                            <img src="<?php echo $flippage3_image;?>" alt="<?php echo $flippage3_image_alt ?>">
                        </a>
                        <section class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $flippage3_sub_title;?></h3>
                                <p class="text-justify"><?php echo $flippage3_caption;?></p>
                            </div>
                        </section>
                    </div>

                <?php endif; ?>

                <?php if(get_post_meta(get_the_ID(), 'flip-page-4-checkbox', true) == 'yes'): ?>

                    <div class="col-md-3">
                        <h3 class="widget-title"><a href="<?php echo $flippage4_title_link; ?>" target="_blank" title="The Fly Shop Featured Content"><?php echo $flippage4_title; ?></a></h3>
                        <a href="<?php echo $flippage4_title_link;?>" class="thumbnail" target="_blank" title="Flip Page Catalog #4">
                            <img src="<?php echo $flippage4_image;?>" alt="<?php echo $flippage4_image_alt ?>">
                        </a>
                        <section class="widget">
                            <div class="caption">
                                <h3 class="widget-title"><?php echo $flippage4_sub_title;?></h3>
                                <p class="text-justify"><?php echo $flippage4_caption;?></p>
                            </div>
                        </section>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </article>

    <!-- CTA -->
    <section id="cta" class="wrapper style4 text-justify">
        <div class="inner">
            <header class="text-center">
                <section class="widget tfs_customtext front-page-cta" id="tfs_customtext-15">
                    <div class="caption">
                        <h2 class="widget-title"><?php echo $front_page_cta_title; ?></h2>
                        <p class="lead"><?php echo $front_page_cta_content; ?></p>
                    </div>
                </section>

            </header>
        </div>
    </section>

<?php
get_footer();
