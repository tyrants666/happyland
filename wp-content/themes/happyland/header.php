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

		  <div class="navbar-toggler" style="border-color: transparent;" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<svg viewBox="0 0 800 600">
			    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
			    <path d="M300,320 L540,320" id="middle"></path>
			    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
			  </svg>
		  </div>

		<style media="screen">
		.navbar-toggler {
		background: rgba(0, 123, 255, 0.01);
		margin: 0;
		padding: 0;
		text-align: center;
		}
		.navbar-toggler svg {
		width: 94px;
		height: 57px;
		margin-right: -19px;
		margin-left: -24px;
		cursor: pointer;
		-webkit-transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		-o-transform: translate3d(0, 0, 0);
		-ms-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
		}
		path {
		fill: none;
		-webkit-transition: stroke-dashoffset 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25), stroke-dasharray 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25);
		-moz-transition: stroke-dashoffset 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25), stroke-dasharray 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25);
		-o-transition: stroke-dashoffset 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25), stroke-dasharray 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25);
		-ms-transition: stroke-dashoffset 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25), stroke-dasharray 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25);
		transition: stroke-dashoffset 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25), stroke-dasharray 0.5s cubic-bezier(0.25, -0.25, 0.75, 1.25);
		stroke-width: 30px;
		stroke-linecap: round;
		stroke: #808080;
		stroke-dashoffset: 0px;
		}
		path#top,
		path#bottom {
		stroke-dasharray: 240px 950px;
		}
		path#middle {
		stroke-dasharray: 240px 240px;
		}
		.cross path#top,
		.cross path#bottom {
		stroke-dashoffset: -650px;
		stroke-dashoffset: -650px;
		}
		.cross path#middle {
		stroke-dashoffset: -115px;
		stroke-dasharray: 1px 220px;
		}

		</style>

		<script type="text/javascript">

		(function () {
		  var i, resize;

		  // i = setInterval(function () {
		  //   return $(".navbar-toggler").toggleClass("cross");
		  // }, 1500);

		  $(".navbar-toggler").click(function () {
		    clearInterval(i);
		    return $(".navbar-toggler").toggleClass("cross");
		  });

		  resize = function () {
		    return $("body").css({
		      "margin-top": ~~((window.innerHeight - 150) / 2) + "px" });

		  };

		  $(window).resize(resize);

		  resize();

		}).call(this);

		</script>
		
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
