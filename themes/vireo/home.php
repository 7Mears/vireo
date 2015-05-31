<?php
/**
 * @package vireo
 */

get_header(); ?>

		<main id="main" class="site-main page-blog" role="main">

      <header class="page-header">
				<h2 class="page-title">Blog</h2>
				<h1 class="page-sub-head">The Bird's Eye Review</h1>
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

	            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="blog-post-more"><i class="fa fa-angle-double-right"></i> read the post</a>
              <!-- date posted -->
              <p class="blog-post--date"><?php the_time('jS F Y') ?></p>
	          </div><!-- /post content -->

	    		</div> <!-- /blog post -->
	    <?php endwhile; ?>
      <?php the_posts_navigation(); ?>
      </div><!-- /container -->
		</main><!-- #main -->

<?php get_footer(); ?>
