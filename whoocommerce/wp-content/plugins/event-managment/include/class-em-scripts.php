<?php

class Em_Scripts
{


    public function __construct()
    {

        //  wp_enqueue_scripts - for frontend
        //  admin_enqueue_scripts - for backend
        add_action('wp_enqueue_scripts', array($this, 'em_register_public_scripts'));
        add_action('admin_enqueue_scripts', array($this, 'em_register_admin_scripts'));
    }

    // Regiter scriopts for frontend
    public function em_register_public_scripts()
    {
        wp_enqueue_script('jquery');
        wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array('jquery'), '1.0', true);

        // Pass AJAX URL to script
        wp_localize_script('custom-scripts', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
    }

    // Regiter scriopts for admin
    public function em_register_admin_scripts()
    {
    }
}
