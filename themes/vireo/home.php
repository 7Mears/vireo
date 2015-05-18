<?php
/**
 * @package vireo
 */

get_header(); ?>

		<main id="main" class="site-main page-blog" role="main">

      <header class="page-header">
        <h2>The think tank</h2>
      </header><!-- .entry-header -->

      <div class="container">

	    <?php while (have_posts()) : the_post(); ?>

	    		<div class="blog-post">
	          <!-- featured image -->
	          <?php if ( has_post_thumbnail() ) {
	            the_post_thumbnail( 'thumbnail', array( 'class' => 'post blog-post--image' ) ); }
	          ?>
	          <div class="blog-post--content">
	            <!-- title -->
	      			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h4 class="blog-post--title"><?php the_title(); ?></h4></a>
	            <!-- excerpt -->
	            <?php the_excerpt(); ?>

	            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="blog-post-more">read the post</a>
              <!-- date posted -->
              <p class="blog-post--date"><?php the_time('jS F Y') ?></p>
	          </div><!-- /post content -->
	          <span class="clear"></span>
	    		</div> <!-- /blog post -->
	    <?php endwhile; ?>
      <?php the_posts_navigation(); ?>
      </div><!-- /container -->
      <span class="clear"></span>
		</main><!-- #main -->

<?php get_footer(); ?>
