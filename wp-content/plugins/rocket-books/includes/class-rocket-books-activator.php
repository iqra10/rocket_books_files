<?php
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
/**
 * Fired during plugin activation
 *
 * @link       https://boilerplate.test
 * @since      1.0.0
 *
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 * @author     Iqra <iqra.azam.dev@gmail.com>
 */
class Rocket_Books_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		include ('class-rocket-books-post-types.php');
		
		// Register CPT

		$plugin_post_type = new Rocket_Books_Post_Types( ROCKET_BOOKS_NAME, ROCKET_BOOKS_VERSION );

		$plugin_post_type->init();


		// Flush permalinks
		flush_rewrite_rules();


	}

	}


