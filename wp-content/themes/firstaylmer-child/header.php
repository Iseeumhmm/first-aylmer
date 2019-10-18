<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firstAylmer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans+HK:400,700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
	<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="content" class="site-content">
		<div class="nav-container">
			<nav class="navbar navbar-expand-xl navbar-dark">
				<div class="logo">
				<a href="<?php echo get_site_url() ?>/">
					<div class="logo"></div>
					<div class="logo-text">FIRST AYLMER</div>
				</a>
				</div>
				<button class="navbar-toggler mr-md-7" data-toggle="collapse" data-target="#navbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<div class="navbar-nav ml-auto navbar-mobile-center">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a href="<?php echo get_site_url() ?>/" class="nav-link">Calendar</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo get_site_url() ?>/" class="nav-link">Downloads</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo get_site_url() ?>/" class="nav-link">Contact Us</a>
							</li>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="header-spacer"></div>
	<div id="content" class="site-content">
