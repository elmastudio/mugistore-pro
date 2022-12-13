<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mugistore
 * @since 1.0.0
 */
 
/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mugistore_support() {

		// Enqueue editor styles.
		add_editor_style( 'assets/build/css/style-editor.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'mugistore_support' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mugistore_styles() {

	wp_enqueue_style(
		'mugistore-style',
		get_template_directory_uri() . '/assets/build/css/style.css',
		[],
		THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'mugistore_styles' );

/**
 * Register theme block styles.
 */
require get_template_directory() . '/inc/block-styles.php';

/**
 * Registers pattern categories.
 *
 * @since 1.0.0
 */
function mugistore_register_pattern_categories() {

	$block_pattern_categories = array(
		'headers'      => array( 'label' => __( 'Headers' ) ),
		'footers'      => array( 'label' => __( 'Footers' ) ),
		'sidebars'     => array( 'label' => __( 'Sidebars' ) ),
		'pages'        => array( 'label' => __( 'Pages' ) ),
		'accordions'   => array( 'label' => __( 'Accordions' ) ),
		'ctas'         => array( 'label' => __( 'CTAs' ) ),
		'features'     => array( 'label' => __( 'Features' ) ),
		'heroes'       => array( 'label' => __( 'Heroes' ) ),
		'texts'        => array( 'label' => __( 'Texts' ) ),
		'testimonials' => array( 'label' => __( 'Testimonials' ) ),
		'brands'       => array( 'label' => __( 'Brands' ) ),
		'galleries'    => array( 'label' => __( 'Galleries' ) ),
		'queries'      => array( 'label' => __( 'Queries' ) ),
		'products'     => array( 'label' => __( 'Products' ) ),
	);

	$block_pattern_categories = apply_filters( 'mugistore_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}

add_action( 'init', 'mugistore_register_pattern_categories' );

/**
 * Include Woocommerce
 */
if (class_exists('Woocommerce')) {
	require get_template_directory() . '/inc/woocommerce/functions.php';
}

/**
 * TGMPA plugin activation.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'mugistore_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function mugistore_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 */
	$plugins = array(

		array(
			'name'      => 'Aino Blocks - Gutenberg Page Builder Blocks',
			'slug'      => 'aino-blocks',
			'required'  => true,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'mugistore',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}

/**
* Theme Setup Wizard.
*/
require_once get_parent_theme_file_path( '/inc/merlin/vendor/autoload.php' );
require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/inc/merlin/merlin-config.php' );
require_once get_parent_theme_file_path( '/inc/merlin/merlin-filters.php' );

// Theme Admin Page
require_once get_template_directory() . '/inc/theme-demo-import.php';

//Stop WooCommerce redirect on activation MerlinWP
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );