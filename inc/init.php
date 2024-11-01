<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if (!defined('WPx2CRM_VERSION_KEY'))
    define('WPx2CRM_VERSION_KEY', 'wp-x2crm_version');

if (!defined('WPx2CRM_VERSION_NUM'))
    define('WPx2CRM_VERSION_NUM', '1.0.0');

add_option(WPx2CRM_VERSION_KEY, WPx2CRM_VERSION_NUM);


add_filter( 'plugin_action_links', 'wp2x2crm_add_action_plugin', 10, 5 );
function wp2x2crm_add_action_plugin( $actions ) 
{
	static $plugin;

	if (!isset($plugin))
		
	
			$settings = array('settings' => '<a href="options-general.php?page=wp2x2crm_options">' . __('Settings', 'General') . '</a>');
			//$site_link = array('support' => '<a href="https://www.eliio.com" target="_blank">More Info</a>');
		
    			$actions = array_merge($settings, $actions);
				//$actions = array_merge($site_link, $actions);
			
		
		
		return $actions;
}
?>