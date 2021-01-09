<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_nhom_a
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		
	  <div class="module-27">
    <div class="footer-blog-icon">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="box-post">
					<?php
      dynamic_sidebar( 'recent_post' );
	  ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="title-wrap">
                        <h2 class="widget-title">Instagram</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                    <div class="box-tag">
                    <div class="tags-title">
                        <ul class="nav nav-pills mb-3">
						<?php
      dynamic_sidebar( 'tags' );
	  ?>
                        </ul>
                    </div>
                    </div>

					
                </div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-6">
					
				<div class="title-wrap">
                            <h2 class="widget-title">Follow Us</h2>
                        </div>
                        <div class="widget-social-27">
                            <a href="#" class="icon"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="icon"> <span class="fa fa-twitter"></span></a>
                            <a href="#" class="icon"><span class="fa fa-google"></span></a>
                            <a href="#" class="icon"><span class="fa fa-linkedin"></span></a>
                            <a href="#" class="icon"><span class="fa fa-pinterest"></span></a>
                            <a href="#" class="icon"><span class="fa fa-youtube"></span></a>
                            <a href="#" class="icon"><span class="fa fa-flickr"></span></a>
                            <a href="#" class="icon"><span class="fa fa-behance"></span></a>
                        </div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-6">
				</div>
					
				<div class="col-xl-4 col-lg-4 col-md-4 col-6">
					
				<div class="title-wrap">
                        <h2 class="widget-title">Search</h2>
                    </div>
                    <div class="travelog-form">
					<?php
      dynamic_sidebar( 'search' );
	  ?>
                    </div>
			</div>
        </div>
    </div>
</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
