<?php
/**
	* Template Name: News
*/
?>

<?php get_header(); ?>

<div id="blog-section">

	<div class="container-fluid">


        <!-- ///// Intro section ///// -->

		<div class="container">

			<div class="row">

                <div class="col-xs-12">
                    <div class="intro-title on-green">
                        <h1>Our Blog</h1>
                        <div class="title-underline"></div>
                    </div>
                </div>

            </div>

            <div class="row">

				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="entry-content">
		
								<div class="col-xs-12 col-sm-6">

									<a href="<?php the_permalink(); ?>" title="<?php echo $post_title; ?>" >
										<div class="post-block on-blog">

											<?php if ( has_post_thumbnail() ) : ?>
												<?php the_post_thumbnail(); ?>
											<?php endif; ?>
									
											<div class="post-block-txt">

												<h2 class="post-title"><?php echo get_the_title(); ?></h2>
												<div class="title-underline"></div>
												<div class="post-excerpt"><?php the_excerpt(); ?></div>
												<p class="read-more">Read more</p>

											</div>

										</div>
									</a>
								</div>
							</div>
						
					</article><?php
				endwhile; 
				else: ?>  
					<p>Sorry, no posts matched your criteria</p>
				<?php
				endif;  
				?>
				

			</div>

		</div>
	
	</div>

</div>

 <?php get_footer(); ?>