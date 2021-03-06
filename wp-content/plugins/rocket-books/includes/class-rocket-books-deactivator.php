<?php
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
/**
 * Fired during plugin deactivation
 *
 * @link       https://boilerplate.test
 * @since      1.0.0
 *
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 * @author     Iqra <iqra.azam.dev@gmail.com>
 */
class Rocket_Books_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

		public static function deactivate() {

			// Un-register CPT
			unregister_post_type( 'book' );

			// Un-Register Taxonomy
			unregister_taxonomy( 'genre' );

			// Flush Rewrite Rules
			flush_rewrite_rules();

		}

	}


