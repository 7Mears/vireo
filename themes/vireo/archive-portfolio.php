<?php
/**
 * @package vireo
 */

get_header(); ?>

<main id="main" class="site-main page-portfolio-archive" role="main">

  <header class="page-header">
    <h1 class="entry-title">Portfolio</h1>
  </header><!-- .entry-header -->

  <?php while (have_posts()) : the_post(); ?>
  <div class="portfolio-archive-post">
    <div class="container">
      <!-- featured image -->
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'large', array( 'class' => 'post portfolio-archive-post--image' ) ); }
      ?>
      <div class="portfolio-archive-post--content">
        <!-- title -->
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4 class="portfolio-archive-post--title"><?php the_title(); ?></h4></a>
        <!-- excerpt -->
        <?php the_excerpt(); ?>

        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="portfolio-archive-post-more"><button>Show me more</button></a>
      </div><!-- /post content -->
      <span class="clear"></span>
    </div><!-- /container -->
  </div> <!-- /portfolio-archive post -->
  <?php endwhile; ?>
  <?php the_posts_navigation(); ?>
  <span class="clear"></span>
</main><!-- #main -->

<?php get_footer(); ?>
