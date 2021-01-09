<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme_nhom_a
 */

get_header();
dynamic_sidebar( 'map' );
?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

	<main id="primary" class="site-main">

		<div class="container">
				<div class="row center">
					<div class="col-sm-9">
					<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			?>

			
					</div>
				</div>

				
		</div>
		<div class="type-29">
<div class="share-section tag-section">
        <a href="#">beach</a
        ><a href="#">sea</a
        ><a href="#">spain</a
        ><a href="#">sunny</a
        ><a href="#">vacation</a>
      </div>

      <div class="grey-section">
        <div class="container">
          <div class="text-center">
            <div class="author-avatar">
              <img
                src="http://localhost/wordpress/wp-content/uploads/2021/01/avatar-4.jpg"
                width="100"
                height="100"
                alt="Sandy Smith"
                class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo"
              />
            </div>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
              quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
              aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
              eos qui ratione voluptatem sequi nesciunt.
            </p>
          </div>
        </div>
      </div>

      <div class="share-section">
        <div class="post-share">
          <a
            href="#"
            class="share facebook"
            target="_blank"
            title="Share on Facebook"
            ><i class="fa fa-facebook-f fa-fw"></i>
          </a>
          <a
            href="#"
            class="share twitter"
            target="_blank"
            title="Share on Twitter"
            ><i class="fa fa-twitter fa-fw"></i
          ></a>
          <a
            href="#"
            class="share google"
            target="_blank"
            title="Share on Google+"
            ><i class="fa fa-google fa-fw"></i
          ></a>
          <a
            href="#"
            class="share linkedin"
            target="_blank"
            title="Share on LinkedIn"
            ><i class="fa fa-linkedin fa-fw"></i
          ></a>
          <a
            href="#"
            class="share tumblr"
            target="_blank"
            title="Share on Tumblr"
            ><i class="fa fa-tumblr fa-fw"></i
          ></a>
        </div>
      </div>
</div>

		<div class="container">
		<div class="row center">
					<div class="col-sm-9">
						
			<?php

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
?>

					</div>
				</div>
		</div>
		<div class="type-31">
				<?php 
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Prev Post', 'theme_nhom_a' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post', 'theme_nhom_a' ) . '</span> <span class="nav-title">%title</span>',
				)
			);?>
			<?php
		endwhile; // End of the loop.
		?>
				
		</div>

	</main><!-- #main -->

<?php
get_footer();
