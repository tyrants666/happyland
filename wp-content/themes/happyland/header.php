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

		 <script
		   src="https://code.jquery.com/jquery-3.4.0.min.js"
		   integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
		   crossorigin="anonymous"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



 	 <?php wp_head(); ?>
	 </head>


<!--Body................ -->
<body  <?php body_class(); ?> >

	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous" ></script>

	<div class="">

		<nav class="navbar fixed-top navbar-expand-lg navbar-light padding-x">

			<a href="<?php echo home_url(); ?>">
					<div class="navbar-brand logo">

				    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo.png" class="" alt="Logo"/>

						<div class="site-title">

							<?php include 'Mobile_Detect.php';
							$detect = new Mobile_Detect(); ?>

							<?php if ($detect->isMobile()):?>
								<h1>Happyland Higher</br>Secondary School</h1>
							<?php else:?>
								<h1> <?php echo get_bloginfo('name'); ?></h1>
							<?php endif; ?>
					    <h2> <?php echo get_bloginfo('description'); ?> </h2>
						</div>

					</div>
			</a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse top-menu" id="navbarNavDropdown">
				<?php wp_nav_menu( array('theme_location' => 'primary',
				'depth'             => 2,
				'container'         => '',
				'container_class'   => '',
				'container_id'      => '',
				'menu_class'        => 'navbar-nav ml-auto  mr-4',
				) ); ?>
		  </div>

		</nav>


<!-- ***********  HTML Styling (Coz php doesnt works on css) *************** -->
		<style>


		</style>

<!-- ***********   Preloader  **************** -->
