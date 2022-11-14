<?php
/**
 * Theme Demo Import.
 *
 * @package mugistore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Demo import.
*/
function mugistore_import_files() {

	return array(
		array(
			'import_file_name'           => 'Mugistore',
			'import_file_url'            => 'https://elmastudiouploads.s3.eu-central-1.amazonaws.com/mugistore-demo-import.xml',
			'import_preview_image_url'	 => esc_url( 'https://elmastudiouploads.s3.eu-central-1.amazonaws.com/mugistore-screenshot-01.png' ),
			'preview_url'                => 'https://themes.ainoblocks.io/mugistore/',
		),
	);
}

/**
* Assign menus and front page after demo import
*
* @param array $selected_import array with demo import data
*/
function mugistore_after_import( $selected_import ) {
}
