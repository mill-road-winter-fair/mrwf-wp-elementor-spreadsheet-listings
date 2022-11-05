<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://millroadwinterfair.org
 * @since      1.0.0
 *
 * @package    Mrwf_Elementor_Spreadsheet_Listings
 * @subpackage Mrwf_Elementor_Spreadsheet_Listings/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mrwf_Elementor_Spreadsheet_Listings
 * @subpackage Mrwf_Elementor_Spreadsheet_Listings/includes
 * @author     Tom Hanrahan <it@millroadwinterfair.org>
 */
class Mrwf_Elementor_Spreadsheet_Listings_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mrwf-elementor-spreadsheet-listings',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
