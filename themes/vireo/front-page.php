<?php
/**
 * @package vireo
 */

get_header(); ?>


<section class="hero">
  <ul class="hero-slider">
    <li class="selected">
      <div class="full-width">
        <h1>Vireo Productions</h1>
        <p>We make websites.</p>
      </div> <!-- .full-width -->
    </li>

    <li>
      <div class="half-width">
        <h2>Let's get started</h2>
        <p>Websites are a dance between design, content, and marketing; take a look at our process for building a website.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>process/"><button class="button-red-solid">The process</button></a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/"><button class="button-red">Contact us</button></a>
      </div> <!-- .half-width -->

      <div class="half-width img-container">
      </div> <!-- .half-width.img-container -->
    </li>

    <li>
      <div class="half-width img-container">
        <img src="<?php bloginfo('template_directory'); ?>/images/slider/slide-website2.jpg" alt="Advanced auto care and tire website" class="slide-website-img">
      </div> <!-- .half-width.img-container -->

      <div class="half-width">
        <h2>See our work</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
        <a href="http://www.advancedautocareandtire.ca" target="_BLANK"><button class="button-red-solid">Visit site</button></a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/advanced-auto-care-and-tire/"><button class="button-red">Case study</button></a>
      </div> <!-- .half-width -->

    </li>
  </ul> <!-- .hero-slider -->

  <div class="slider-nav">
    <nav>
      <span class="marker item-1"></span>

      <ul>
        <li class="selected"><a href="#0">Welcome</a></li>
        <li><a href="#0">Get started</a></li>
        <li><a href="#0">Featured site</a></li>
      </ul>
    </nav>
  </div> <!-- .slider-nav -->
</section> <!-- .hero -->

<section class="home-services">
  <div class="container">
    <div class="home-services-section">
      <h3>Design</h3>
      <p>Websites are an applied art; they require both <strong>practical function and pleasing aesthetics</strong>. The same principles apply to all types of graphic design. We know how to create a <strong>coherent, appealing design</strong> for any visual product.</p>
    </div>
    <div class="home-services-section">
      <h3>Content</h3>
      <p>When done well, words and images can be <strong>inspiring, exciting, and motivating</strong>. At Vireo Productions, we produce writing, photos, and videos that deliver a <strong>clear message</strong>: Your business cares about the quality of the content it delivers.</p>
    </div>
    <div class="home-services-section">
      <h3>Marketing</h3>
      <p>Everything your business puts out into the world is part of its <strong>brand</strong>. Whether you need a website, social media management, email marketing, or a press kit, we'll make sure it <strong>strengthens and enhances</strong> your business's unique image.</p>
    </div>
    <h4>Websites are a dance between design, content, and marketing; <a href="<?php echo esc_url( home_url( '/' ) ); ?>process/">take a look at our process</a> for building a website. <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/">Learn more about us</a> to see a full list of the services we provide.</h4>
  </div><!-- /container -->
</section><!-- /services -->

<section class="home-blog">
  <div class="container">
      <h2 class="section-title">Blog</h2>
      <h4 class="section-sub-head">The Bird's Eye Review</h4>
      <?php query_posts('posts_per_page=3') ?>
      <?php while (have_posts()) : the_post(); ?>
  		<div class="blog-post">
        <!-- featured image -->
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'thumbnail', array( 'class' => 'post blog-post--image' ) ); } ?></a>
        <div class="blog-post--content">
          <!-- title -->
    			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4 class="blog-post--title"><?php the_title(); ?></h4></a>
          <!-- date posted -->
    			<p class="blog-post--date"><?php the_time('jS F Y') ?></p>
          <!-- excerpt -->
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="read-more"><i class="fa fa-angle-double-right"></i> read the post</a>
        </div><!-- /post content -->
  		</div> <!-- /post container -->
      <?php endwhile; ?>

    <div class="read-all-posts">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">See more posts</a>
    </div>
  </div><!-- /container -->
</section><!-- /blog -->

<?php get_footer(); ?>
