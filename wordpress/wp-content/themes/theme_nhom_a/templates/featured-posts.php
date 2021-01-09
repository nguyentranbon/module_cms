<?php
/**
 * Template Name: Featured Posts
 *
 * @package theme_nhom_a
 */

get_header();
?>
<?php 
// the query
$paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
$wp_query  = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> 2, 'paged' => $paged)); ?>
 
<?php if ( $wp_query ->have_posts() ) : ?>
<div class="module-36">
    <!-- Flickity HTML init  -->
    <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true, "groupCells": 1, "autoPlay": 2000}'>
        <div class="carousel-cell"> <a href="#"> <img src="http://localhost/wordpress/wp-content/uploads/2021/01/sl1.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5>5 Sunny Days In Malaga</h5>
                </div>
            </a>
        </div>
        <div class="carousel-cell"> <a href="#"> <img src="http://localhost/wordpress/wp-content/uploads/2021/01/sl2.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5> Sightseeing in Novi Sad</h5>
                </div>
            </a></div>
        <div class="carousel-cell"> <a href="#"> <img src="http://localhost/wordpress/wp-content/uploads/2021/01/sl3.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5> Couple Of Days In Sunny Miami</h5>
                </div>
            </a></div>
        <div class="carousel-cell"> <a href="#"> <img src="http://localhost/wordpress/wp-content/uploads/2021/01/sl4.jpg" alt="img 1" class="img-fluid">
                <div class="content">
                    <h5> No Sleep In New York</h5>
                </div>
            </a></div>
    </div>
</div>
<?php
dynamic_sidebar( 'home_categories' );
?>
<div class="container">
    <div class="row">
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
        <div class="col-sm-3">
				<?php
					get_sidebar();
					dynamic_sidebar( 'top_travelers' );
					dynamic_sidebar( 'subscribe' );
				?>
			</div>
    </div>
</div>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
get_footer();
