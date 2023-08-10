<?php
function wp_load_script()
{
    //************************* CSS FIELS *************************\\ 

    wp_register_style('woo-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('woo-style');

}
add_action('wp_enqueue_scripts', 'wp_load_script');
