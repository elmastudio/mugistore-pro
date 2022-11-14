<?php
/**
 * Available filters for extending Merlin WP.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 */


/**
 * Define the demo import files (remote files).
 *
 * To define imports, you just have to add the following code structure,
 * with your own values to your theme (using the 'merlin_import_files' filter).
 */

/* Function located in /inc/theme-demo-import.php */
add_filter( 'merlin_import_files', 'mugistore_import_files' );


/**
 * Execute custom code after the whole import has finished.
 */
/* Function located in /inc/theme-demo-import.php */
add_action( 'merlin_after_all_import', 'mugistore_after_import' );
