<?php
/**
 * @package vireo
 */

get_header(); ?>


<section class="hero">
  <div class="container parallax">
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
  <div class="container">
    <h2 class="section-title">Portfolio</h2>

    <h3>Global Exteriors</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <button type="button" name="button" class="btn-light">Let's see this</button>

    <img class="home-portfolio--image" src="http://localhost/vireo/wp-content/uploads/2015/05/global-featured.png" alt="Global Exteriors" />
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
