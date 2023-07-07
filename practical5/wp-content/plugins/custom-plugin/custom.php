<?php
/*
* Plugin Name: custom plugin
* Plugin URI: https://example.com/plugins/the-basics/
* Description: trying to make custom plugin
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Kaushal Gandhi
* Text Domain: my-basics-plugin
* Domain Path: /languages
*/

if (!defined('WPEMS_DIR')) {
    define('WPEMS_DIR', dirname(__FILE__));      // Plugin dir
}

if (!defined('WPEMS_URL')) {
    define('WPEMS_URL', plugin_dir_url(__FILE__));   // Plugin url
}

function my_custom_menu()
{
    add_menu_page(
        __('Custom Menu Title', 'textdomain'),
        'custom menu',
        'manage_options',
        'render-form',
        'render_form_callback'
    );
}
add_action('admin_menu', 'my_custom_menu');

function render_form_callback()
{
    require_once WPEMS_DIR . '/Form/form.php';
}

function save_my_data()
{
    global $wpdb;

    if (isset($_POST['submit'])) {

        $t_name = $wpdb->prefix . 'custom_plugin_data';

        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
        $phoneno = isset($_POST['phoneno']) ? $_POST['phoneno'] : '';



        $insert_data = array(
            'firstname' => $firstname,
            'phoneno' => $phoneno,
        );

        $wpdb->insert($t_name, $insert_data);
    }
}
add_action('init', 'save_my_data');
