<?php
/**
 * @package vireo
 */

get_header(); ?>

<main id="main" class="site-main page-portfolio-archive" role="main">

  <header class="page-header">
    <h2 class="page-title">Portfolio</h2>
    <h1 class="page-sub-head">A sample of our work</h1>
  </header><!-- .entry-header -->

  <?php while (have_posts()) : the_post(); ?>
  <div class="portfolio-archive-post">
    <div class="container">
      <!-- featured image -->
      <?php if ( has_post_thumbnail() ) : ?>
	      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	      <?php the_post_thumbnail( 'large', array( 'class' => 'post portfolio-archive-post--image' ) ); ?>
	      </a>
      <?php endif; ?>

      <div class="portfolio-archive-post--content">
        <!-- title -->
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4 class="portfolio-archive-post--title"><?php the_title(); ?></h4></a>
        <!-- excerpt -->
        <?php the_excerpt(); ?>

        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="portfolio-archive-post-more"><button>Show me</button></a>
      </div><!-- /post content -->
      <span class="clear"></span>
    </div><!-- /container -->
  </div> <!-- /portfolio-archive post -->
  <?php endwhile; ?>
  <?php the_posts_navigation(); ?>
  <span class="clear"></span>
</main><!-- #main -->

<?php get_footer(); ?>
