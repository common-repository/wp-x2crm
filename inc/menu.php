<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_action('admin_menu', 'wp2x2crm_add_admin');

function wp2x2crm_add_admin() {

add_submenu_page( 'options-general.php' , 'x2CRM Options', 'x2CRM Options' , 'manage_options' , 'wp2x2crm_options' , 'wp2x2crm_display_contents');
}
?>
