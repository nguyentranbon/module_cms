<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_nhom_a
 */
	$url_host = 'http://' . $_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header responsive">
	<div class="type-1">
    <nav class="navbar navbar-expand-lg navbar-light no-response">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				
            <div class="navbar-brand" href="#"><?php the_custom_logo(); ?></div>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'        => 'navbar-nav ml-auto',
					)
				);
            ?>
            </div>
        </div>
    </nav>
</div>
	</header><!-- #masthead -->
    <?php if ( is_front_page() ) { 
      dynamic_sidebar( 'map' );
      dynamic_sidebar( 'home_categories' );
      } ?>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>