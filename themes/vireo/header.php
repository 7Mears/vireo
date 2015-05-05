<?php
/**
 * @package vireo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="page">

	<header class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Vireo</a></h1>
			</div><!-- /site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul id="primary-menu" class="menu nav-menu">
					<li><a href="#0">Who we are</a></li>
					<li><a href="#0">What we do</a></li>
					<li><a href="#0">Portfolio</a></li>
					<li><a href="#0">Contact us</a></li>
				</ul>
			</nav><!-- /site-navigation -->

		</div><!-- /container -->
	</header>
