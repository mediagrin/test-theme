<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <?php /* <title ><?php wp_title( '|', true, 'right' ); ?></title> */ ?>
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    
    <!--
    <meta name="google-site-verification" content="XXmEdLWWkc3nC8nyAj17IN2pOHB1Au2ep-_JLhx3unA" />
    -->
    
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php

	$logo = get_field('logo','option');
	if( !empty($logo) ) {
		
		//$url = $logo['url'];
		$site_logo_title = $logo['title'];
		$site_logo_alt = $logo['alt'];
		$site_logo_desc = $logo['description'];
		$site_logo_url = esc_url($logo['url']);
	}


	$siteurl = site_url();


	// $award_2 = get_field('award_2','option');
	// if( !empty($award_2) ) {
		
	// 	$award_2title = $award_2['title'];
	// 	$award_2alt = $award_2['alt'];
	// 	$award_2desc = $award_2['description'];
	// 	$award_2url = esc_url($award_2['url']);
	// }

	?>
	
	<?php wp_head(); ?> 


</head>

<body <?php body_class(); ?> >
	
	
	<div id="nav-logo" class="navbar-fixed-top22 sticky-top ">
		
		<div class="container">
			
			<div class="row">

				<div class="col-12">

					<nav class="navbar navbar-expand-sm navbar-dark">

						<a class="navbar-brand col-8 col-sm-4" href="<?php echo $siteurl; ?>">
							<img src="<?php echo $site_logo_url; ?>" alt="<?php echo $site_logo_alt; ?>" class="img-fluid">
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
												
						<?php 
							$menu_type = "primary";
							//if (!is_404()) {
							//	
							//	$menu_type = "primary";
							//	
							//} else {
							//	
							//	$menu_type = "error";
							//}
							
							$arg = array(
								'menu'              => $menu_type,
								'theme_location'    => $menu_type,
								'depth'             => 4,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'navbarSupportedContent',
								'menu_class'        => 'navbar-nav mx-auto',
								//'items_wrap'      	=> $menu_wrap,
								'fallback_cb'       => 'wp_bootstrap4_navwalker::fallback',
								'walker'            => new wp_bootstrap4_navwalker()
							); 
							
							wp_nav_menu( $arg ); 
						?>

					</nav>

				</div>

			</div>
		
		</div>

	</div>