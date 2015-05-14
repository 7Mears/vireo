<?php
/**
 * Template Name: About page
 *
 * @package vireo
 */

get_header(); ?>


<main id="main" class="site-main" role="main">

	<header class="about-header">
		<h1>Vireo <span>Productions</span></h1>
		<h2>Web design and content creation</h2>
	</header><!-- .entry-header -->

	<div class="container">
    <p class="about-intro">At Vireo, we believe in beautifying the Internet, and that top-notch writing, images, and videos are just as important to a website’s success as the design itself. We believe partnering with clients is the best way to serve your needs, and that the best partnerships are open and transparent. Named for the vireo, a type of bird that summers in Saskatchewan, we’re proud of our prairie roots.</p>

		<ul class="services-list">
			<li class="number">.01</li>
			<li class="title">Design services</li>
			<li>Website design and development</li>
			<li>Logo development</li>
			<li>Infographics</li>
			<li>Print and display design</li>
		</ul>

		<ul class="services-list">
			<li class="number">.02</li>
			<li class="title">Content development</li>
			<li>Copywriting and journalism</li>
			<li>Editing</li>
			<li>Photography</li>
			<li>Videography</li>
		</ul>

		<ul class="services-list">
			<li class="number">.03</li>
			<li class="title">Marketing services</li>
			<li>Website integration</li>
			<li>Email marketing</li>
			<li>Social media management</li>
			<li>Media kits</li>
		</ul>

		<ul class="services-list">
			<li class="number">.04</li>
			<li class="title">Technical support</li>
			<li>Setting up hosting</li>
			<li>Training in website management</li>
			<li>Analytics set-up and monitoring</li>
			<li>Ongoing website maintenance</li>
		</ul>
		<div class="clear"></div>

<div class="about-services">
		<h3>We design custom websites and create professional content.</h3>
		<p>At Vireo Productions, we believe in building our clients a unique space to showcase their business. We’re not plugging slapdash content into a prefabricated theme — we work hard to build you a website from scratch, and fill it with original, high-quality content. To learn more about how we do this, see our process.</p>
		<p>To do this, we draw upon a wide variety of skills and services, provided by Vireo staff and our network of freelancers. Building a website that fits into your marketing plan often takes all of the skills listed below, but you can also contract us to help you with any service we provide, even if you’re not building a website.</p>
</div>
	</div><!-- /container -->

	<div class="call-to-action">
		<div class="container">

		<div class="call-to-action--left">
			<h4>A typical website process</h4>
			<p>Let's walk through your typical website creation process.</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>process/"><button>Website process</button></a>
		</div>

		<div class="call-to-action--right">
			<h4>The think tank blog</h4>
			<p>Check out what we are up to and what's new</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/"><button>Think tank</button></a>
		</div>
		</div><!-- /container -->
		<div class="clear"></div>
	</div>


	<div class="container">

    <div class="person">
      <h4 class="name">Ashleigh Mattern</h4>
      <h5 class="role">Owner and project manager</h5>
			<img class="mug mug-first" src="http://localhost/vireo/wp-content/uploads/2015/05/ashleigh-face.jpg" alt="Ashleigh Mattern mug shot">
      <p>Ashleigh is a writer and editor by training and experience. For seven years, she ran a freelance writing and editing business under her own name, and she continues to serve many of her long-time clients through Vireo Productions. As Vireo’s project manager, she’s our clients’ main point of contact, ensuring projects are moving along smoothly, and websites are being delivered on time.</p>
    </div>

    <div class="person">
      <h4 class="name">Jordan Mears</h4>
      <h5 class="role">Owner and designer-developer</h5>
			<img class="mug mug-last" src="http://localhost/vireo/wp-content/uploads/2015/05/jordan-face.jpg" alt="Jordan Mears mug shot">
      <p>Jordan is a self-taught designer and front-end developer. He first started learning code as a kid, and has been making websites since Angelfire and Geocities were cool. As Vireo’s designer-developer, he helps you create the visual style for your site, then builds it from the ground up. His goal with all of his sites is to write clean code that any programmer can work with down the road.</p>
		</div>
<div class="clear"></div>
  </div><!-- /container -->

</main><!-- /main -->


  <?php get_footer(); ?>
