<?php get_header(); ?>
 
 <?php	
	//echo "<script>console.log( 'image: " . $header_img . "' );</script>";
	//echo $header_img;  
?> 



<div id="single">	
	
	<div class="container-fluid">

		<div class="container intro-section on-white">

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10">
					<div class="intro-title on-green">

						<a href="<?php echo site_url(); ?>/blog/" class="back-to"><i class="fa fa-chevron-left" aria-hidden="true"></i>back to blog list</a>


						<h1><?php the_title(); ?></h1>
						<div class="title-underline"></div>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10">

					<?php 
					if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content single-body">

								
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="featured-img">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php endif; ?>

											
								<div class="the-content">
									<?php the_content(); ?>
								</div>

								<div class="share-this">
									<h3>Share this</h3><div id="share"></div>
									<div class="clearfix"></div>
								</div>
										
							</div>
						</article> 
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- ***** This brings in the contact section and its angled background ***** -->
	<?php include('section-bottom-contact.php'); ?>




</div>

<?php get_footer(); ?>