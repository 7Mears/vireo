<?php
/**
 * Template Name: Process page
 * @package vireo
 */

get_header(); ?>


		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>


        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
        	</header><!-- .entry-header -->

        	<div class="entry-content">
        		<div class="container-sm">
        		<?php
        			/* translators: %s: Name of current post */
        			the_content( sprintf(
        				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'vireo' ), array( 'span' => array() ) ),
        				the_title( '<span class="screen-reader-text">"', '"</span>', false )
        			) );
        		?>

        		<?php
        			wp_link_pages( array(
        				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vireo' ),
        				'after'  => '</div>',
        			) );
        		?>
        		</div><!-- /container -->
        	</div><!-- .entry-content -->

        	<footer class="entry-footer">
        		<?php vireo_entry_footer(); ?>
        	</footer><!-- .entry-footer -->
        </article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>
		</main><!-- /main -->


<?php get_footer(); ?>
