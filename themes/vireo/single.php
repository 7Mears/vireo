<?php
/**
 * @package vireo
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

			<?php
			  $blog_background_image = get_field('blog_background_image');

			  if( !empty($blog_background_image) ):
			?>
			<style>
			.entry-header {
			  background: url('<?php echo $blog_background_image['url']; ?>') no-repeat center center;
			  background-size: cover;
			}
			</style>
			<?php endif; ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

		<div class="call-to-action">
			<div class="container">

				<?php
				$next_post = get_next_post();
				if ( is_a( $next_post , 'WP_Post' ) ) { ?>

				<div class="call-to-action--right">
					<h4>Next post</h4>
  				<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?></a>
				</div>

				<?php } else {  //opening single post div ?>
					<div class="call-to-action--single-post">
				<?php	} ?>

				<?php
				$prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>

				<div class="call-to-action--left">
					<h4>Previous post</h4>
				  <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a>
				</div>
				<?php endif; ?>

				<?php // closing sing post div
				if ( is_a( $next_post , 'WP_Post' ) ) { ?>
				<?php } else { ?>
				</div>
				<?php	} ?>

			</div><!-- /container -->
			<div class="clear"></div>
		</div>

<?php get_footer(); ?>
