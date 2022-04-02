<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://boilerplate.test
 * @since      1.0.0
 *
 * @package    Rocket_Books
 * @subpackage Rocket_Books/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="wrap">
    <h1>Rocket Books Settings</h1>
<?php settings_errors(); ?>
    <form method="post" action="options.php">
    
    <?php

   // Secuirty
    settings_fields( 'rbr-settings-page-options-group' );

   // Display Section 
    do_settings_sections( 'rbr-settings-page' );

?>


		<?php submit_button(); ?>
    </form>
</div>