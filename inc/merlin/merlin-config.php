<?php
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */
	
	$config = array(
		'directory'            => 'inc/merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'merlin', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
		'dev_mode'             => false, // Enable development mode for testing.
		'ready_big_button_url' => home_url( '/' ), // Link for the big button on the ready step.
	);
	 
	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Setup', 'mugistore' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'mugistore' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'mugistore' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'mugistore' ),

		'btn-skip'                 => esc_html__( 'Skip', 'mugistore' ),
		'btn-next'                 => esc_html__( 'Next', 'mugistore' ),
		'btn-start'                => esc_html__( 'Start', 'mugistore' ),
		'btn-try-again'            => esc_html__( 'Try Again', 'mugistore' ),
		'btn-no'                   => esc_html__( 'Cancel', 'mugistore' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'mugistore' ),
		'btn-plugins-activate'     => esc_html__( 'Activating...', 'mugistore' ),
		'btn-child-install'        => esc_html__( 'Install', 'mugistore' ),
		'btn-child-installing'     => esc_html__( 'Installing...', 'mugistore' ),
		'btn-content-install'      => esc_html__( 'Install', 'mugistore' ),
		'btn-import'               => esc_html__( 'Import', 'mugistore' ),
		'btn-content-importing'    => esc_html__( 'Importing...', 'mugistore' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'mugistore' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'mugistore' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It should take only a few minutes.', 'mugistore' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'mugistore' ),

		'plugins-header'           => esc_html__( 'Install WooCommerce', 'mugistore' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'mugistore' ),
		'plugins'                  => esc_html__( 'Let\'s install & activate the WooCommerce plugin to enable all the eCommerce features you need.', 'mugistore' ),
		'plugins-success%s'        => esc_html__( 'WooCommerce plugin has been installed and is now activated.', 'mugistore' ),
		'plugins-install-error%s'  => esc_html__( 'Installation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'mugistore' ),
		'plugins-activate-error%s' => esc_html__( 'Activation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'mugistore' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'mugistore' ),

		'import-header'            => esc_html__( 'Import Content', 'mugistore' ),
		'import'                   => esc_html__( 'Let\'s import content to your website. This could take some minutes. Please wait.', 'mugistore' ),
		'import-demo-link'         => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://themes.ainoblocks.io/mugistore/', esc_html__( 'Import Demo', 'mugistore' ) ),
		'import-action-link'       => esc_html__( 'Advanced', 'mugistore' ),

		'ready-header'             => esc_html__( 'All done. Have fun!', 'mugistore' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up.', 'mugistore' ),
		'ready-action-link'        => esc_html__( 'Extras', 'mugistore' ),
		'ready-big-button'         => esc_html__( 'View your website', 'mugistore' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://docs.ainoblocks.io/', esc_html__( 'Documentation', 'mugistore' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://docs.ainoblocks.io/', esc_html__( 'Get Theme Support', 'mugistore' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'site-editor.php' ), esc_html__( 'Start Customizing', 'mugistore' ) ),
);

$wizard = new Merlin( $config, $strings );

