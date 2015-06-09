<?php
/**
 * The template for displaying a single artcode experience.
 */
defined('ABSPATH') or die("No script kiddies please!");

$artcode = $_REQUEST['artcode'];
	
// serve page with custom mime type to start custom app
header( "Content-Type: application/x-artcode" );

// Start the loop.
if ( have_posts() ) {
	the_post();
	header( "Content-Disposition: attachment;filename=".$post->ID.".artcode" );
	echo artcode_get_experience( $post );
}

