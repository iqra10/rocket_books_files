<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

add_filter( 'rbr/admin/settings/advance/fields', 'adding_color_field_to_advance_section' );

function adding_color_field_to_advance_section( $fields_array ) {

    // Modifying this field array
    $fields_array[] = array(
       'id' => 'advance_color_field',
       'label' => 'Advance_Color_Field',
       'type' => 'color'

    );
 
   return $fields_array;
}
 

?>