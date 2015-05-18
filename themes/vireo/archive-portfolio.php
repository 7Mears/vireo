<?php
/**
 * @package vireo
 */

get_header(); ?>

<main id="main" class="site-main page-portfolio" role="main">

  <header class="page-header">
    <h1>Portfolio</h1>
  </header><!-- .entry-header -->

  <div class="container">

  <?php while (have_posts()) : the_post(); ?>

      <div class="portfolio-post">
        <!-- featured image -->
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'thumbnail', array( 'class' => 'post portfolio-post--image' ) ); }
        ?>
        <div class="portfolio-post--content">
          <!-- title -->
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4 class="portfolio-post--title"><?php the_title(); ?></h4></a>
          <!-- excerpt -->
          <?php the_excerpt(); ?>

          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="portfolio-post-more">read the post</a>
        </div><!-- /post content -->
        <span class="clear"></span>
      </div> <!-- /portfolio post -->
  <?php endwhile; ?>
  <?php the_posts_navigation(); ?>
  </div><!-- /container -->
  <span class="clear"></span>
</main><!-- #main -->

<?php get_footer(); ?>
