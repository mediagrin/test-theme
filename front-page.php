
<?php get_header(); ?>

<?php
	$pageid 	= get_the_ID();
	$siteurl 	= site_url();

	// $l_attachment_id = get_field('photo_left', $pageid);
	// $size = "series_p"; // (thumbnail, medium, large, full or custom size)
	// $l_image = wp_get_attachment_image_src( $l_attachment_id, $size );


	// if( !empty($l_image[0]) ) {
	// 	$img_left_alt = get_post_meta($l_attachment_id , '_wp_attachment_image_alt', true);
	// 	$img_left_url = $l_image[0];	
	// }


	// $r_attachment_id = get_field('photo_right', $pageid);
	// $size = "series_p"; // (thumbnail, medium, large, full or custom size)
	// $r_image = wp_get_attachment_image_src( $r_attachment_id, $size );


	// if( !empty($l_image[0]) ) {
	// 	$img_right_alt = get_post_meta($r_attachment_id , '_wp_attachment_image_alt', true);
	// 	$img_right_url = $r_image[0];	
	// }

	//$link_to = get_field('link_to', $pageid);

	$hero_image_text 		= get_field('hero_image_text', $pageid);

	$intro_section_heading 	= get_field('intro_section_heading',$pageid);

	$intro_text_left  		= get_field('intro_text_left',$pageid);
	$intro_text_right 		= get_field('intro_text_right',$pageid);

	$service_section_heading = get_field('service_section_heading',$pageid);

	$pageid = 6; // Services

	if( have_rows('services', $pageid) ):
		$x=0;
		while ( have_rows('services', $pageid) ) : the_row();

			$service_title[$x] 		= get_sub_field('service_title');
			$service_excerpt[$x] 	= get_sub_field('service_home_page_excerpt');

		
			// $display_option[$x] = get_sub_field('display_option');
			// $img_attachment_id = get_sub_field('s_image');

			// if ($display_option[$x] == 'Portrait') {
			// 	$size = "series_p"; // (thumbnail, medium, large, full or custom size)
			// 	$img_pos[$x] = '';
			// } elseif ($display_option[$x] == 'Landscape') {
			// 	$size = "series_l"; // (thumbnail, medium, large, full or custom size)
			// 	$img_pos[$x] = 'img-landscape';
			// }

			// $s_image = wp_get_attachment_image_src( $img_attachment_id, $size );
			// if( !empty($s_image[0]) ) {
			// 	$s_img_alt[$x] = get_post_meta($img_attachment_id , '_wp_attachment_image_alt', true);
			// 	$s_img_url[$x] = $s_image[0];	
			// }

			if ($x == 0 || $x == 1) {
				$anchorlink[$x] = 'service-top';
			} else {
				$anchorlink[$x] = 'service-'.$x;
			}

			$total_services = $x;
			$x++;

		endwhile;
	endif;

?>

<div id="home">

	<!-- ///// Hero section ///// -->

	<?php include('inc/hero-section.php'); ?>


	<!-- ///// Intro section ///// -->

	<div class="container intro-section">
		<div class="row">

			<div class="col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
			
				<h4 class="section-title"><?php echo $intro_section_heading; ?></h4>

			</div>

			<div class="col-12">

				<div class="row">
					<div class="col-12 col-sm-6">
						<?php echo $intro_text_left; ?>
					</div>

					<div class="col-12 col-sm-6">
						<?php echo $intro_text_right; ?>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- ///// Service section ///// -->

	<div class="container-fluid service-section">
		
		<div class="container">
	
			<div class="row">

				<div class="col-12">

					<h3 class="section-title"><?php echo $service_section_heading; ?></h3>

					<div class="row">
						<?php 
						for ($x = 0; $x <= $total_services; $x++) { ?>
							<div class="col-12 col-sm-6">
								<?php if ($x > 1)  { ?>
									<hr>
								<?php } ?>
								<h5 class="sub-section-title"><a href="<?php echo $siteurl; ?>/services/#<?php echo $anchorlink[$x]; ?>"><?php echo $service_title[$x]; ?></a></h5>
								<p><?php echo $service_excerpt[$x]; ?>... <a href="<?php echo $siteurl; ?>/services/#<?php echo $anchorlink[$x]; ?>" class="read-more">read more</a></p>
								
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