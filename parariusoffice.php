<?php

/*
Plugin Name: Pararius Office
Plugin URI: http://www.parariusoffice.nl/
Description: Plugin om je website te koppelen met Pararius Office
Version: 1.0.13
Author: Anno MMX
Author URI: http://www.annommx.com/
License: GPL2 
Tags: 1.0.13
*/

require_once 'lib/debug.options.php';

defined('PARARIUSOFFICE_INDEX_FILE') || define('PARARIUSOFFICE_INDEX_FILE', __FILE__);
defined('PARARIUSOFFICE_PLUGIN_PATH') || define('PARARIUSOFFICE_PLUGIN_PATH', dirname(__FILE__));
defined('PARARIUSOFFICE_PLUGIN_URL') || define('PARARIUSOFFICE_PLUGIN_URL', rtrim(plugin_dir_url(__FILE__), '/'));

// load external libs
require_once PARARIUSOFFICE_PLUGIN_PATH . '/vendor/load.php';

if (is_admin())
{
	require_once PARARIUSOFFICE_PLUGIN_PATH . '/admin/lib/Admin.php';
	ParariusOffice_Base_Admin::run();
}
else
{
	require_once PARARIUSOFFICE_PLUGIN_PATH . '/front/lib/Front.php';
	ParariusOffice_Base_Front::run();
}
