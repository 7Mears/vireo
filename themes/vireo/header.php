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

	<header id="site-header" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Vireo</a></h1>
			</div><!-- /site-branding -->

			<a href="#" class="menu-link"><i class="fa fa-bars"></i></a>
			<nav id="menu" class="main-navigation" role="navigation">
				<ul >
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about/">About</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/">Portfolio</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">Blog</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">Contact</a></li>
				</ul>
			</nav><!-- /site-navigation -->

		</div><!-- /container -->
	</header>
