<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://millroadwinterfair.org
 * @since             1.0.0
 * @package           Mrwf_Elementor_Spreadsheet_Listings
 *
 * @wordpress-plugin
 * Plugin Name:       MRWF Elementor <> Spreadsheet Listings
 * Plugin URI:        https://millroadwinterfair.org
 * Description:       Shows a grid or listing of entries using data from a spreadsheet hosted elsewhere, works with Elementor
 * Version:           1.0.0
 * Author:            Tom Hanrahan
 * Author URI:        https://millroadwinterfair.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mrwf-elementor-spreadsheet-listings
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MRWF_ELEMENTOR_SPREADSHEET_LISTINGS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mrwf-elementor-spreadsheet-listings-activator.php
 */
function activate_mrwf_elementor_spreadsheet_listings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mrwf-elementor-spreadsheet-listings-activator.php';
	Mrwf_Elementor_Spreadsheet_Listings_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mrwf-elementor-spreadsheet-listings-deactivator.php
 */
function deactivate_mrwf_elementor_spreadsheet_listings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mrwf-elementor-spreadsheet-listings-deactivator.php';
	Mrwf_Elementor_Spreadsheet_Listings_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mrwf_elementor_spreadsheet_listings' );
register_deactivation_hook( __FILE__, 'deactivate_mrwf_elementor_spreadsheet_listings' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mrwf-elementor-spreadsheet-listings.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mrwf_elementor_spreadsheet_listings() {

	$plugin = new Mrwf_Elementor_Spreadsheet_Listings();
	$plugin->run();

}
run_mrwf_elementor_spreadsheet_listings();
