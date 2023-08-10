<?php
/*
* Plugin Name: Event Managment
* Description: trying to make custom plugin
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Kaushal Gandhi
* Text Domain: event-managment
* Domain Path: /languages
*/
if (!defined('WPEMS_DIR')) {
    define('WPEMS_DIR', dirname(__FILE__));      // Plugin dir
}

if (!defined('WPEMS_URL')) {
    define('WPEMS_URL', plugin_dir_url(__FILE__));   // Plugin url
}


require_once WPEMS_DIR .'/include/class-em-shortcodes.php';
$Em_Shortcode = new Em_Shortcode();

require_once WPEMS_DIR .'/include/class-em-scripts.php';
$Em_Scripts = new Em_Scripts();

require_once WPEMS_DIR .'/include/class-em-admin.php';
$Em_Admin = new Em_Admin();

require_once WPEMS_DIR .'/include/class-em-public.php';
$Em_Public = new Em_Public();

