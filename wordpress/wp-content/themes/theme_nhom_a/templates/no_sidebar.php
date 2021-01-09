<?php
/**
 * Template Name: No Sidebar
 *
 * @package theme_nhom_a
 */

get_header();
dynamic_sidebar( 'map' );
dynamic_sidebar( 'home_categories' );
?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>
<?php 
// the query
$paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
$wp_query  = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> 4, 'paged' => $paged)); ?>
 
<?php if ( $wp_query ->have_posts() ) : ?>
 
<div class="container">
    <div class="row center">
        <div class="col-sm-9">
            <!-- the loop --> 
    <?php while ( $wp_query ->have_posts() ) : $wp_query ->the_post(); ?>
    <div class="type-4">
		
        <?php theme_nhom_a_post_thumbnail(); ?>
        
        <?php
            // if ( is_singular() ) :
            //     the_title( '<h3 class="blog-item-title">', '</h3>' );
            // else :
            //     the_title( '<h3 class="blog-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
            // endif;

            the_title( '<h3 class="blog-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
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
    <?php endwhile; ?>
    <!-- end of the loop -->
    <div class="type-10">
				<?php
				the_posts_pagination();
				?>
			</div>
        </div>
    </div>
</div>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
get_footer();
