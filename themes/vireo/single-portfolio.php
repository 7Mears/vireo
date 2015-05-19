<?php
/**
 * @package vireo
 */

 get_header(); ?>

<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<style>
.portfolio-post-header {
  background: url('http://localhost/vireo/wp-content/uploads/2015/05/advancedauto.jpg') no-repeat center center;
  background-size: cover;
}
</style>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	<header class="portfolio-post-header">
 		<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
     <button>Visit the site</button>
 	</header><!-- .entry-header -->

<div class="container">
  <div class="portfolio-post-excerpt">
   <?php the_excerpt(); ?>
  </div>
</div>

 <div class="clear"></div>
</div>

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
        <img src="http://localhost/vireo/wp-content/uploads/2015/05/advancedauto.jpg">

        <img src="http://localhost/vireo/wp-content/uploads/2015/05/advancedauto.jpg">

        <img src="http://localhost/vireo/wp-content/uploads/2015/05/advancedauto.jpg">

      </div>

      <div class="clear"></div>
 		</div><!-- /container -->
 	</div><!-- .entry-content -->

 </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>
</main><!-- #main -->

 <?php get_footer(); ?>
