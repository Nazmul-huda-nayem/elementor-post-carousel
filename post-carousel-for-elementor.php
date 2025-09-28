<?php
/**
 * Plugin Name: Post Carousel for Elementor
 * Description: Post Carousel plugin for Elementor with 40+ responsive and modern Blog Post designs.
 * Plugin URI:  https://bwdelementoraddons.com/post-carousel/
 * Version:     1.0.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: post-carousel-for-elementor
 * Requires Plugins: elementor
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Elementor tested up to: 3.20.4
 * Elementor Pro tested up to: 3.20.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/require-check.php';

final class PCFERoot{

	const VERSION = '1.0.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// pcfe_init Plugin
		add_action( 'plugins_loaded', array( $this, 'pcfe_init' ) );
	}

	public function pcfe_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'pcfe_addon_failed_load');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'pcfe_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'pcfe_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'functions.php' );
	}

	public function pcfe_admin_notice_minimum_php_version() {
		if (isset($_GET['activate']) && isset($_GET['_wpnonce'])) {
			$nonce = sanitize_text_field(wp_unslash($_GET['_wpnonce']));
			if (wp_verify_nonce($nonce, 'plugin_activation_nonce')) {
				unset($_GET['activate']);
			}
		}
	
		/* translators: %1$s: Plugin Name, %2$s: PHP, %3$s: Required PHP Version */
		$message = sprintf(
			esc_html__('%1$s requires %2$s version %3$s or greater.', 'post-carousel-for-elementor'),
			'<strong>' . esc_html__('Post Carousel for Elementor', 'post-carousel-for-elementor') . '</strong>',
			'<strong>' . esc_html__('PHP', 'post-carousel-for-elementor') . '</strong>',
			self::MINIMUM_PHP_VERSION
		);
	
		printf(
			'<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>',
			esc_html($message)
		);
	}
}

// Instantiate post-carousel-for-elementor.
new PCFERoot();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );