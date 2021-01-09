<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme_nhom_a
 */

get_header();
dynamic_sidebar( 'map' );
?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

	<main id="primary" class="site-main">

			
	<?php if ( have_posts() ) : ?>

<header class="page-header">
	<div class="module-19">
	<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="archive-description">', '</div>' );
	?>
	</div>
</header><!-- .page-header -->
		<div class="container">
<div class="row">
				<div class="col-sm-9">

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	/*
	 * Include the Post-Type-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
	 */
	get_template_part( 'template-parts/content', get_post_type() );

endwhile;

the_posts_navigation();

else :

get_template_part( 'template-parts/content', 'none' );

endif;
?>
				</div>
				<div class="col-sm-3">
				<?php
					get_sidebar();
					dynamic_sidebar( 'top_travelers' );
					dynamic_sidebar( 'subscribe' );
				?>
			</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
