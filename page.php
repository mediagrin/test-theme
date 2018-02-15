

<?php get_header(); ?>


<?php
	$pageid = get_the_ID();
	
	$hero_image_text = get_field('hero_image_text', $pageid);
	
	function the_loop() {
		if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>			
				</div>     
			</article> <?php
		endwhile; 
	}



?>

<div id="page">

	<!-- ///// Hero section ///// -->

    <?php include('inc/hero-section.php'); ?>

	<div class="container-fluid page-section">

		<div class="container">
			<div class="row">
				<div class="col-12">


					<?php the_loop(); ?>


				</div>
			</div>
		</div>
	</div>


	

</div>





<?php get_footer(); ?>