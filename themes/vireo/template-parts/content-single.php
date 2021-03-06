<?php
/**
 * @package vireo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="parallax">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php vireo_posted_on(); ?>
		</div><!-- .entry-meta -->

	</div><!-- .header-content -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container-sm">
		<?php the_content(); ?>
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
