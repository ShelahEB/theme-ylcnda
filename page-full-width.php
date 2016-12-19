<?php
/*
Template Name: Full Width
*/
get_header(); ?>
	<section id="content" class="width100 alignleft">
					 <?php while ( have_posts() ) : the_post();  ?>
						<div>
							<?php the_post_thumbnail( 'page-featured-image' ); ?>
						</div><!-- featured image -->
						<?php if( function_exists( 'bcn_display' ) ){ ?>
							<nav class="breadcrumb">
								<?php bcn_display(); ?>
							</nav>
						<?php } ?>
						<article id="page-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
							<header>
								<h1 class="text-shad-lt"><?php the_title(); ?></h1>
							</header>
							<div class="content">
								<?php the_content(); ?>
							</div><!-- content -->
						</article>

<!-----------------------------CONTENT FLEXSLIDER------------------------------------------------------->
        <div id="content" class=".col-xs-12 .col-sm-6 .col-lg-8">
            <!--Start div content-->
            <div class="flexslider">
                <!-- Start Flex Slider -->
                <ul class="slides">
                    <li><img src="images/slider.png" /></li>
                    <li><img src="img/slide_2.png" /></li>
                    <li><img src="images/slider.png" /></li>
                </ul>
            </div>
            <!-- End Flex Slider -->

<!------------------------------Shop NOW divider----------------------------------------------------------------->
            <div id="shopnow" class="center .col-xs-12 .col-sm-6 .col-lg-8">
                <!--start shop now-->
                <a href="javascript:;"><img src="images/shop_now.png" /></a>
            </div>
            <!--end shop now-->
 <!-------------------------------CTA BOXES--------------------------------------------------------->


            <div class="cta ">
                <div class="cta_boxes .col-xs-6 .col-sm-4">
                    <figure class="cta_effect cta-item">
                        <img class="img img-responsive" src="http://gimepix.com/img/300-200-textures-006" />


                        <figcaption>
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitDuis non mauris libero.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <figure class="cta_effect cta-item .col-xs-6 .col-sm-4">
                    <img class="img img-responsive" src="http://gimepix.com/img/300-200-still-004" />



                    <figcaption>
                        <h2>New Collections</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitDuis non mauris libero.</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="cta_effect cta-item .col-xs-6 .col-sm-4">
                    <img class="img img-responsive" src="http://gimepix.com/img/300-200-transport-005" />


                    <figcaption>
                        <h2>Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitDuis non mauris libero.</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
            </div>
            <!--end cta class-->


        </div>
        <!--End div contentt-->


<!-----------------------------END---CONTENT----------------------------------------------->


					<?php endwhile; ?>
		</section>

<?php get_footer(); ?>
