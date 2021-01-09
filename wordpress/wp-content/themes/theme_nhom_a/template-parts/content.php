<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme_nhom_a
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				theme_nhom_a_posted_on();
				theme_nhom_a_posted_in();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	<!-- </header>.entry-header -->
	
	<div class="type-4">
		
	<?php theme_nhom_a_post_thumbnail(); ?>
	
	<?php
		if ( is_singular() ) :
			the_title( '<h3 class="blog-item-title">', '</h3>' );
		else :
			the_title( '<h3 class="blog-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
	?>
		<div class="blog-item-meta">

		<?php
				theme_nhom_a_posted_on();
				theme_nhom_a_posted_in();
				?>
		</div>
				<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'theme_nhom_a' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'theme_nhom_a' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	</div>
	

	<!-- <footer class="entry-footer">
		<?php theme_nhom_a_entry_footer(); ?>
	</footer>.entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
