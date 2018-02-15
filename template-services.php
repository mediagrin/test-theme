<?php
/**
	* Template Name: Services
*/
?>

<?php
	$pageid 	= get_the_ID();
	$siteurl 	= site_url();

	$hero_image_text = get_field('hero_image_text', $pageid);

	if( have_rows('services', $pageid) ):
		$x=0;
		while ( have_rows('services', $pageid) ) : the_row();

			$service_title[$x] 	= get_sub_field('service_title');
            $service_text[$x] 	= get_sub_field('service_text');
			$total_services = $x;
			$x++;

		endwhile;
	endif;

?>


<?php get_header(); ?>


<div id="services">

    <!-- ///// Hero section ///// -->

    <?php include('inc/hero-section.php'); ?>


    <!-- ///// Service section ///// -->

    <div id="service-top" class="container-fluid service-section">
		
		<div class="container">
	
			<div class="row">

				<div class="col-12">

					<?php /* <h3 class="section-title">Service section</h3> */ ?>

					<div class="row">
						<?php 
						for ($x = 0; $x <= $total_services; $x++) { ?>
                            <div id="service-<?php echo $x; ?>" class="col-12 col-sm-6">
                            <div class="offset">
								<h5><?php echo $service_title[$x]; ?></h5>
                                <p><?php echo $service_text[$x]; ?></p>
                            </div>
							</div>
						<?php
						} 
						?>

					</div>
				</div>
			</div>
		</div>
	</div>




</div>

<?php get_footer(); ?>