<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package theme_nhom_a
 */
?>

<?php $unique_id = esc_attr( theme_nhom_a_unique_id( 'search-form-' ) ); ?>

<div class="type-15">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for &hellip;', 'placeholder', 'theme_nhom_a' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="fa fa-search"></i><span class="screen-reader-text"><?php echo _x( '', 'submit button', 'theme_nhom_a' ); ?></span></button>
</form>
</div>