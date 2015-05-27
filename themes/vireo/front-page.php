<?php
/**
 * @package vireo
 */

get_header(); ?>
<section class="home-hero">
  <div class="container">
    <h1 class="hero-title">Vireo Productions</h1>
    <p class="hero-info"><strong>We make websites</strong>, and we fill those sites with professional, engaging content. Websites are made to share information and ideas online, and the best websites feature both great content and beautiful design.</p>
    <a class="hero-button" href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/"><button class="button-red" type="button" name="button">See our work</button></a>


    <div class="hero-social">
      <ul>
        <li><a href="https://www.facebook.com/VireoProductions" target="_BLANK"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="https://twitter.com/vireoproduction" target="_BLANK"><i class="fa fa-twitter-square"></i></a></li>
        <li><a href="https://plus.google.com/u/1/102692056654896730713" target="_BLANK"><i class="fa fa-google-plus-square"></i></a></li>
        <li><a href="https://instagram.com/vireoproductions/" target="_BLANK"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </div><!-- /container -->
</section><!-- /hero -->

<section class="home-services">
  <div class="container">

    <div class="home-services-section">
      <h3>Design</h3>
      <p class="bar">Websites are an applied art; they require both practical function and pleasing aesthetics. The same principles apply to all types of graphic design. We know how to create a coherent, appealing design for any visual product.</p>
    </div>

    <div class="home-services-section">
      <h3>Content</h3>
      <p class="bar">When done well, words and images can be inspiring, exciting, and motivating. At Vireo Productions, we produce writing, photos, and videos that deliver a clear message: Your business cares about the quality of the content it delivers.</p>
    </div>

    <div class="home-services-section">
      <h3>Marketing</h3>
      <p>Everything your business puts out into the world is part of its brand. Whether you need a website, social media management, email marketing, or a press kit, we'll make sure it strengthens and enhances your business's unique image.</p>
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

    		<div class="home-post">
          <!-- featured image -->
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'thumbnail', array( 'class' => 'post home-post--image' ) ); }
          ?>
          <div class="home-post--content">
            <!-- title -->
      			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4 class="home-post--title"><?php the_title(); ?></h4></a>
            <!-- date posted -->
      			<p class="home-post--date"><?php the_time('jS F Y') ?></p>
            <!-- excerpt -->
            <?php the_excerpt(); ?>

            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="read-more">read the post</a>

          </div><!-- /post content -->
          <div class="clear"></div>
    		</div> <!-- /post container -->

    <?php endwhile; ?>
    <div class="clear"></div>
    <div class="read-all-posts">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">See more posts</a>
    </div>

  </div><!-- /container -->
</section><!-- /blog -->

<?php get_footer(); ?>
