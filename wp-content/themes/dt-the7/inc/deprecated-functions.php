<?php
/**
 * Deprecated function.
 */

// File Security Check.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @deprecated
 *
 * @param $postID
 * @param $post
 */
function presscore_save_shortcode_inline_css( $postID, $post ) {
	the7_save_shortcode_inline_css( $postID, $post );
}

/**
 * @deprecated
 *
 * @param $content
 *
 * @return string
 */
function presscore_generate_shortcode_css( $content ) {
	return the7_generate_shortcode_css( $content );
}
