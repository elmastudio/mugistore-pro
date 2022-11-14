<?php
/**
 * Class for the custom WP hooks.
 *
 * @package Merlin WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Merlin_Hooks {
	/**
	 * The class constructor.
	 */
	public function __construct() {
		add_action( 'import_start', array( $this, 'maybe_disable_creating_different_size_images_during_import' ) );
	}

	/**
	 * Wrapper function for the after all import action hook.
	 *
	 * @param int $selected_import_index The selected demo import index.
	 */
	public function after_all_import_action( $selected_import_index ) {
		do_action( 'merlin_after_all_import', $selected_import_index );

		return true;
	}

	/**
	 * Maybe disables generation of multiple image sizes (thumbnails) in the content import step.
	 */
	public function maybe_disable_creating_different_size_images_during_import() {
		if ( ! apply_filters( 'merlin_regenerate_thumbnails_in_content_import', true ) ) {
			add_filter( 'intermediate_image_sizes_advanced', '__return_null' );
		}
	}
}
