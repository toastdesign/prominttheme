<?php
/**
 * Configure responsive images sizes
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 2.6.0
 */

// Add featured image sizes
//
// Sizes are optimized and cropped for landscape aspect ratio
// and optimized for HiDPI displays on 'small' and 'medium' screen sizes.
add_image_size( 'featured-small', 640, 200, true ); // name, width, height, crop
add_image_size( 'featured-medium', 1060, 540, true );
add_image_size( 'featured-large', 1440, 400, true );
add_image_size( 'featured-xlarge', 1920, 400, true );
add_image_size( 'project-thema', 480, 320, true );
add_image_size( 'gallery-size', 520, 340, true );

// Add additional image sizes
add_image_size( 'fp-small', 640 );
add_image_size( 'fp-medium', 1024 );
add_image_size( 'fp-large', 1200 );
add_image_size( 'fp-xlarge', 1920 );

// Register the new image sizes for use in the add media modal in wp-admin
function foundationpress_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'gallery-size'  => __( '520x340' ),
	) );
}
add_filter( 'image_size_names_choose', 'foundationpress_custom_sizes' );
