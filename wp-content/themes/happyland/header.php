<!doctype html>
<html <?php language_attributes(); ?>>



<!--Head...............-->

<head>


		 <meta charset="utf-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <meta name="csrf-token" content="{{ csrf_token() }}">
		 <meta name="google-site-verification" content="CtDu80_zTFbmH2mrgkOdF6uioCNAff92nwuSaQhI2Dw" />

		 <title><?php bloginfo('name') ?></title>

		 <link rel="shortcut icon" type="image/png" href="<?php echo get_bloginfo( 'template_directory' ); ?>/images/favicon.png"/>

		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


		 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
		 <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->



 	 <?php wp_head(); ?>
	 </head>


<!--Body................ -->
<body  <?php body_class(); ?> >

	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous" ></script>

	<div class="">

                <!-- Header -->

								<?php if( !is_front_page() ) :  ?>
									<!-- Transparent header -->
									<nav class="navbar fixed-top containerr " id="navbar" style="background-color: white;">
								<?php else: ?>
									<!-- White header -->
									<nav class="navbar fixed-top containerr " id="navbar" style="background-color: transparent;">
								<?php endif ?>

                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="<?php echo home_url();?>"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo.svg" class="d-inline-block align-top" alt=""></a>



										<!-- MOBILE TOGGLE BUTTON -->
										<div class="menu-button">

											<?php if( !is_front_page() ) :  ?>

													<!-- current Page -->
													<div class="current-page"> <a href="/index.php?page_id=9">Work</a> </div>

												<?php endif ?>

													<!-- toggle Icon -->
													<a href="#"> <div class="menuu" id="icon-toggle"></div> </a>
										</div>


										<!-- overlay -->
										<div class="overlay ">

												<ul class="wrap-nav containerr">
													<a class="navbar-brand logo logo-overlay" href="<?php echo home_url();?>"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo-white.svg" class="d-inline-block align-top" alt="logo"></a>
													<?php wp_nav_menu( array('theme_location' => 'primary',
																					'depth'             => 2,
																					'container'         => '',
																					'container_class'   => 'collapse navbar-collapse primary-menu',
																					'container_id'      => 'bs-example-navbar-collapse-1',
																					'menu_class'        => 'navbar-nav ml-auto  mr-4',
																					) ); ?>
													</ul>
											</div>

                </nav>


		</header>

<!-- ***********  HTML Styling (Coz php doesnt works on css) *************** -->
		<style>


		</style>

<!-- ***********   Preloader  **************** -->
