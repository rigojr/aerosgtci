<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gruptech Cloud Innovations</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/form.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/modal.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 logo">
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logogtci.png" alt="GTCI Logo" title="Gruptech Cloud Innovations">
					</a></p>
				</div>
				<nav class="col-sm-9 navigation">
					<ul class="nav justify-content-center">
  						<li class="nav-item">
    						<a class="nav-link active" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/solutions">SOLUTIONS</a>
  						</li>
  						<li class="nav-item">
   							<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/news">NEWS</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/about">WHY US</a>
  						</li>
  						<li class="nav-item">
    						<a id="myBtnF" class="nav-link" href="#">CONTACT</a>
  						</li>
  						<li class="nav-item">
    						<a id="myBtnS" class="nav-link" href="#">SIGN UP</a>
  						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>