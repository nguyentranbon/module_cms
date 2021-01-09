<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme_nhom_a
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
</article><!-- #post-<?php the_ID(); ?> -->
