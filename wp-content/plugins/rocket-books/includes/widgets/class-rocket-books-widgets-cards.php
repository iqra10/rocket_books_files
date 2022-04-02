<?php

require_once ROCKET_BOOKS_BASE_DIR . "vendor/boo-widget-helper/class-boo-widget-helper.php";

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
/**
 * Register Widget : Featured Book
 *
 * @package    Rocket_Books
 * @subpackage Rocket_Books/includes
 * @author     Iqra <iqra.azam.dev@gmail.com>
 */


if ( ! class_exists( 'Rocket_Books_CPT_Advance_Settings_Widgets' ) ) {
class Rocket_Books_CPT_Advance_Settings_Widgets extends Boo_Widget_Helper {

	public function __construct() {

		$config_array = array(
			'id'   => 'rbr_advance_settings',
			'name' => __( 'CPT Advance Settings', 'rocket-books' ),
			'desc' => __( 'CPT Advance Settings', 'rocket-books' ),
		);

		$this->set_fields( $this->get_fields_args() );

		parent::__construct( $config_array );
	}

/**
		 * fields arguments array
		 */
		/**
		 * fields arguments array
		 */
		public function get_fields_args() {

			$fields_args = array(
				array(
					'id'    => 'title',
					'label' => __( 'Title', 'rocket-books' ),
				),
				array(
					'id'    => 'limit',
					'type'  => 'number',
					'label' => __( 'Limit', 'rocket-books' ),
				),
				array(
					'id'    => 'bgcolor',
					'type'  => 'color',
					'label' => __( 'Background Color', 'rocket-books' ),
				),
				array(
					'id'      => 'books',
					'type'    => 'post',
					'label'   => __( 'Select Your Favorite Book', 'rocket-books' ),
					'options' => array(
						'post_type' => 'book'
					)
				),
				array(
					'id'      => 'style',
					'type'    => 'radio',
					'label'   => __( 'Style Options', 'plugin-name' ),
					'options' => array(
						'simple' => __( 'Simple Style', 'plugin-name' ),
						'compact' => __( 'Compact Style', 'plugin-name' )
						)
					),
				array(
					'id'     => 'read_more',
					'type'   =>  'text',
					'label'  => __( 'Set Read More Button', 'rocket-books' ), 
				)
	
	
				);
	


			return $fields_args;
		}

		/**
		 * Display widget after the title
		 */
		public function widget_display( $args, $instance ) {

			echo "<pre>";
			var_export( $instance );
			echo "</pre>";

			// text color
			$text_color = isset( $instance['text_color'] ) ? $instance['text_color'] : '';
			// bg color
			$bgcolor = isset( $instance['bgcolor'] ) ? $instance['bgcolor'] : '';
			// post id to be shown
			$books = isset( $instance['books'] ) ? $instance['books'] : '';

			$limit = isset( $instance['limit'] ) ? $instance['limit'] : '';

			$style = isset( $instance['style'] ) ? $instance['style'] : '';

			$read_more = isset( $instance['read_more'] ) ? $instance['read_more'] : '';

			echo do_shortcode( "[book_list 
										limit={$limit}
										color={$text_color}
										bgcolor={$bgcolor}
										book={$books}
										style={$style}
										read_more={$read_more}
										 ]" );
		 }


	}
}