<?php
/**
 * @package vireo
 */

get_header(); ?>


<div class="header-unit">
	<div id="video-container">

	</div><!-- end video-container -->
</div><!-- end .header-unit -->


<section class="hero">

<video autoplay loop id="video-background" muted>
  <source src="<?php bloginfo('template_directory'); ?>/video/We-Work-We-Wait/We-Work-We-Wait.mp4" type="video/mp4">
</video>

  <div class="container">
    <h1>Vireo <span>Productions</span></h1>
    <p>We make websites and create great content.</p>
  </div>
</section> <!-- .hero -->


<section class="home-services">
  <div class="container">
    <div class="one-third">
      <h3>Design</h3>
      <p>Websites are an applied art; they require both <strong>practical function and pleasing aesthetics</strong>. The same principles apply to all types of graphic design. We know how to create a <strong>coherent, appealing design</strong> for any visual product.</p>
    </div>
    <div class="one-third">
      <h3>Content</h3>
      <p>When done well, words and images can be <strong>inspiring, exciting, and motivating</strong>. At Vireo Productions, we produce writing, photos, and videos that deliver a <strong>clear message</strong>: Your business cares about the quality of the content it delivers.</p>
    </div>
    <div class="one-third">
      <h3>Marketing</h3>
      <p>Everything your business puts out into the world is part of its <strong>brand</strong>. Whether you need a website, social media management, email marketing, or a press kit, we'll make sure it <strong>strengthens and enhances</strong> your business's unique image.</p>
    </div>
    <h4>Building a website requires design expertise, content development, marketing knowledge, and technical know-how.  <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/">Learn more about us</a> to see a full list of the services we provide.</h4>
  </div><!-- /container -->
</section><!-- /services -->

<section class="home-portfolio">
	<div id="home-portfolio-bg"></div>
	  <div class="container">
	    <h2 class="section-title">Our work</h2>

	    <figure data-panel="panel1" class="portfolio-panel">
				<img class="portfolio-panel-img" src="http://localhost/vireo/wp-content/uploads/2015/05/globalexteriors-featured.jpg" alt="Global Exteriors" />
				<figcaption class="portfolio-panel-text">
	      	<h3 class="portfolio-panel-title">Global Exteriors</h3>
	      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</figcaption>
	    </figure>

			<figure data-panel="panel2" class="portfolio-panel">
				<img class="portfolio-panel-img" src="http://localhost/vireo/wp-content/uploads/2015/05/aacat-4.jpg" alt="Global Exteriors" />
				<figcaption class="portfolio-panel-text">
	      	<h3 class="portfolio-panel-title">Advanced Auto Care and Tire</h3>
	      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</figcaption>
	    </figure>

			<figure data-panel="panel3" class="portfolio-panel">
				<img class="portfolio-panel-img" src="http://localhost/vireo/wp-content/uploads/2015/05/platinum-featured.jpg" alt="Global Exteriors" />
				<figcaption class="portfolio-panel-text">
	      	<h3 class="portfolio-panel-title">Platinum Paint and Body</h3>
	      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</figcaption>
	    </figure>

			    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/">see more</a>.</h4>
		</div>
</section>

<section class="home-blog">
  <div class="container">
      <h2 class="section-title">Blog</h2>
      <h4 class="section-sub-head">The Bird's Eye Review</h4>
      <?php query_posts('posts_per_page=3') ?>
      <?php while (have_posts()) : the_post(); ?>
  		<div class="blog-post">
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'thumbnail', array( 'class' => 'post blog-post--image' ) ); } ?></a>
        <div class="blog-post--content">
    			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4 class="blog-post--title"><?php the_title(); ?></h4></a>
    			<p class="blog-post--date"><?php the_time('jS F Y') ?></p>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="read-more"><i class="fa fa-long-arrow-right"></i> read the post</a>
        </div><!-- /post content -->
  		</div> <!-- /post container -->
      <?php endwhile; ?>

    <div class="read-all-posts">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">See more posts</a>
    </div>
  </div><!-- /container -->
</section><!-- /blog -->

<?php get_footer(); ?>
