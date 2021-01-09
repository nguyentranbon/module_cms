<?php
/**
 * Template Name: Contact
 *
 * @package theme_nhom_a
 */

get_header();
?>


	<main id="primary" class="site-main">
    <div class="module-20">
    <div class="blog-media">

    </div>
</div>
		<div class="type-25">
        <div class="container">
        <h1 class="post-title">Contact</h1>
        
            <div class="row">
                <div class="col-md-10">
                <div class="type-2">
    <div id="map" class="contact-map"></div> 
</div>
                <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="358" title="Contact form 1"]'); ?>
</div>
		</div>
                </div>
            </div>
        </div>

	</main><!-- #main -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>
<?php
get_footer();
