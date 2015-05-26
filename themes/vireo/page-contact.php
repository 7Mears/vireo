<?php
/**
 * Template Name: Contact page
 * @package vireo
 */

get_header(); ?>


		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>


        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="page-header">
						<h2 class="page-title">Contact</h2>
						<h1 class="page-sub-head">Get in touch</h1>
        	</header><!-- .entry-header -->

        		<div class="container">


							<div class="contact-links">
								<ul>
									<li><a href="#0"><i class="fa fa-facebook-square"></i> Facebook</a></li>
									<li><a href="#0"><i class="fa fa-twitter-square"></i> Twitter</a></li>
									<li><a href="#0"><i class="fa fa-google-plus-square"></i> Google+</a></li>
									<li><a href="#0"><i class="fa fa-instagram"></i> Instagram</a></li>
								</ul>
							</div>


							<div class="contact-form">
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
							</div><!-- /contact form -->



        		</div><!-- /container -->

        	<footer class="entry-footer">
        		<?php vireo_entry_footer(); ?>
        	</footer><!-- .entry-footer -->
        </article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>
		</main><!-- /main -->


<?php get_footer(); ?>
