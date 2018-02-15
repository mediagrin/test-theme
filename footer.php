<!-- This section uses global.less, footer.less -->

<?php

// Contact details
if( have_rows('address_email','option') ):
	while ( have_rows('address_email','option') ) : the_row();
		$email		= get_sub_field('email');
		$e_subject	= get_sub_field('email_subject');
		$telephone	= get_sub_field('telephone');
		$tel_dial	= get_sub_field('telephone');
		$tel_dial 	= str_replace("(0)","",$tel_dial);
		$address	= get_sub_field('address');
	endwhile;
endif;

$footer_text = get_field('footer_text','option');


// Social Media
if( have_rows('social_media','option') ):
	while ( have_rows('social_media','option') ) : the_row();
		$TW		= get_sub_field('twitter');
		$FB		= get_sub_field('facebook');
		$GP		= get_sub_field('google_plus');
		$PT		= get_sub_field('pinterest');
		$LI		= get_sub_field('linkedin');
		$YT		= get_sub_field('youtube');
		$SO		= get_sub_field('stackoverflow');
		$IN		= get_sub_field('instagram');
	endwhile;
endif;


?>



<footer id="footer">

	<div class="container-fluid">

		<div class="row">
			
			<div class="container">
					
				<div class="row">

					<div class="col-sm-6">
						<div class="footer-left">
							<h5 class="footer-section-title">Contact Us</h5>

							<p><?php echo $address; ?></p>
							<p><a href="mailto:<?php echo $email; ?>?subject=<?php echo $e_subject ?>"><?php echo $email; ?></a></p>
							<p><?php echo $footer_text; ?></p>
							<?php /*
							<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo $tel_dial; ?>"><?php echo $telephone; ?></a><br/>
							<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $email; ?>?subject=<?php echo $e_subject ?>"><?php echo $email; ?></a></p>
							*/ ?>
						</div>
					</div>

					<div class="offset-sm-2 col-sm-3">
						<div class="footer-right">

							<h5 class="footer-section-title">Follow Us</h5>
							
							<div class="social-media">
								
								<?php if ($TW) { ?>
									<a class="twitter" href="<?php echo $TW; ?>" target="_blank">
										<i class="fa fa-twitter rounded-circle"></i>
										<span class="sr-only">Twitter</span>
									</a>
								<?php } ?>
								
								<?php if ($FB) { ?>
									<a class="facebook" href="<?php echo $FB; ?>" target="_blank">
										<i class="fa fa-facebook rounded-circle"></i>
										<span class="sr-only">Facebook</span>
									</a>
								<?php } ?>
								
								<?php if ($LI) { ?>
									<a class="linkedin" href="<?php echo $LI; ?>" target="_blank">
										<i class="fa fa-linkedin rounded-circle"></i>
										<span class="sr-only">Linked In</span>
									</a>
								<?php } ?>
								
								<?php if ($GP) { ?>
									<a class="google-plus" href="<?php echo $GP; ?>" target="_blank">
										<i class="fa fa-google-plus rounded-circle"></i>
										<span class="sr-only">Google Plus</span>
									</a>
								<?php } ?>
								
								<?php if ($PT) { ?>
									<a class="pinterest" href="<?php echo $PT; ?>" target="_blank">
										<i class="fa fa-pinterest rounded-circle"></i>
										<span class="sr-only">Pinterest</span>
									</a>
								<?php } ?>
								
								<?php if ($YT) { ?>
									<a class="youtube" href="<?php echo $YT; ?>" target="_blank">
										<i class="fa fa-youtube rounded-circle"></i>
										<span class="sr-only">Youtube</span>
									</a>
								<?php } ?>
								
								<?php if ($SO) { ?>
									<a class="stackoverflow" href="<?php echo $SO; ?>" target="_blank">
										<i class="fa fa-stack-overflow rounded-circle"></i>
										<span class="sr-only">Stackoverflow</span>
									</a>
								<?php } ?>

								<?php if ($IN) { ?>
									<a class="instagram" href="<?php echo $IN; ?>" target="_blank">
										<i class="fa fa-instagram rounded-circle"></i>
										<span class="sr-only">Instagram</span>
									</a>
								<?php } ?>

							</div>

							<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>



<?php wp_footer();?>

</body>
</html>