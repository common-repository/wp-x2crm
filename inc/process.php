<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function process_wp2x2crm_x2crm_options()
{
   if ( !current_user_can( 'manage_options' ) )
   {
      wp_die( 'You are not allowed to be on this page.' );
   }
  
   check_admin_referer( 'wp2x2crm_op_verify' );

   $options = get_option( 'wp2x2crm_op_array' );

   if ( isset( $_POST['x2crm_username'] ) )
   {
      $options['wp2x2crm_op_x2crm_username'] = sanitize_text_field( $_POST['x2crm_username'] );
   }
   
    if ( isset( $_POST['x2crm_apikey'] ) )
   {
      $options['wp2x2crm_op_x2crm_apikey'] = sanitize_text_field( $_POST['x2crm_apikey'] );
   }
   
   if ( isset( $_POST['x2crm_url'] ) )
   {
      $options['wp2x2crm_op_x2crm_url'] = esc_url( $_POST['x2crm_url'] );
   }
   
   
   update_option( 'wp2x2crm_op_array', $options );

  wp_redirect(  admin_url( 'options-general.php?page=wp2x2crm_options&m=1')  );;
   exit;
}
?>