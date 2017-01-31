<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">		

    <title>Soul South | Soul Food from the South</title>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	

	</head>
	<body role="document">
		<header class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<?php if ( get_theme_mod( 'soulsouth_logo' ) ) : ?>
						  <div class='site-logo'>
						    <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
						    	title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
						    	<img src='<?php echo esc_url( get_theme_mod( 'soulsouth_logo' ) ); ?>' 
						    	alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						  </div>
						<?php else : ?>
							<div class="site-title-head">
							  <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' 
							  	title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' 
							  	rel='home'><?php bloginfo( 'name' ); ?></a></h1>
							  <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
						  </div>
						<?php endif; ?>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-3">
						<div class="contact-head">
							<h4>Contact Us</h4>
							<p>
								Phone: 780-555-1234<br />
								Fax: 780-555-4321<br />
								Email: hello@soulsouth.com<br />
							</p>
						</div>
					</div>
				</div> <!-- end row -->
				<div class="row nav-row">
					<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
									data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
								</button>
							</div> <!-- end navbar-header -->

							<div id="navbar" class="navbar-collapse collapse my-nav">
								<ul class="nav navbar-nav">
								<?php 
							  // somwhere in your header.php file, "use" one of the
							  // menu locations you created in the functions.php file.
							  // See http://codex.wordpress.org/Function_Reference/wp_nav_menu
							  // for more details on what options are available.
							  wp_nav_menu( array(
							    'theme_location'  => 'primary',
							    'container_class' => 'container-fluid',
							    'menu_class' => 'nav navbar-nav'
							  ) ) ; ?>
								</ul>	

							</div> <!-- end navbar-collapse -->
					</nav> <!-- end navbar -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</header>
		<div class="container theme-showcase my-well" role="main">
				