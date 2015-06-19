<?php
/**
 * @package vireo
 */

 get_header(); ?>

<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<?php
  $background_image = get_field('header_background_image');

  if( !empty($background_image) ):
?>
<style>
.portfolio-post-header {
  background: url('<?php echo $background_image['url']; ?>') no-repeat center center;
  background-size: cover;
}
</style>
<?php endif; ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	<header class="portfolio-post-header">
    <div class="parallax">
 		<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
     <a href="<?php the_field('website_link'); ?>"><button>Visit the site</button></a>
   </div>
 	</header><!-- .entry-header -->

<div class="container">
  <div class="portfolio-post-excerpt">
   <?php the_excerpt(); ?>
  </div>
</div>

 <div class="clear"></div>


 	<div class="portfolio-post-content">
 		<div class="container">
       <div class="portfolio-post-left">
     		<?php
     			/* translators: %s: Name of current post */
     			the_content( sprintf(
     				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'vireo' ), array( 'span' => array() ) ),
     				the_title( '<span class="screen-reader-text">"', '"</span>', false )
     			) );
     		?>
      </div>

      <div class="portfolio-post-right">
        <?php
        $image1 = get_field('portfolio_image_1');
        $image2 = get_field('portfolio_image_2');
        $image3 = get_field('portfolio_image_3');
        $image4 = get_field('portfolio_image_4');
        $image5 = get_field('portfolio_image_5');
        $image6 = get_field('portfolio_image_6');

        if( !empty($image1) ): ?>
          <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
        <!-- /website-image1 -->
        <?php endif; ?>

        <?php if( !empty($image2) ): ?>
          <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
        <!-- /website-image2 -->
        <?php endif; ?>

        <?php
          $second_text = get_field('portfolio_second_text');
          if( !empty($second_text) ):
        ?>
        </div>
        <div class="clear"></div>
          <div class="portfolio-post-left">
            <p><?php echo $second_text ?> </p>
          </div>
        <div class="portfolio-post-right">
        <?php endif; ?>

        <?php if( !empty($image3) ): ?>
          <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
        <!-- /website-image3 -->
        <?php endif; ?>

        <?php if( !empty($image4) ): ?>
          <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
        <!-- /website-image4 -->
        <?php endif; ?>

        <?php if( !empty($image5) ): ?>
          <img src="<?php echo $image5['url']; ?>" alt="<?php echo $image5['alt']; ?>" />
        <!-- /website-image5 -->
        <?php endif; ?>

        <?php if( !empty($image6) ): ?>
          <img src="<?php echo $image6['url']; ?>" alt="<?php echo $image6['alt']; ?>" />
        <!-- /website-image6 -->
        <?php endif; ?>
      </div>

      <div class="clear"></div>
 		</div><!-- /container -->
 	</div><!-- .entry-content -->

 </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

</main><!-- #main -->


<div class="call-to-action">
  <div class="container">
    <div class="call-to-portfolio">
      <a href="<?php the_field('website_link'); ?>"><button class="button-alt">Check out the site</button></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/"><button class="button-alt">Back to the portfolio</button></a>
    </div>
  </div><!-- /container -->
  <div class="clear"></div>
</div>

 <?php get_footer(); ?>
