<?php

class Em_Admin
{


    public function __construct()
    {
        add_action('init', array($this, 'em_register_event_post_type'));
        add_action('admin_menu', array($this, 'em_register_event_menu'));
        // add_action('init', array($this, 'em_register_event_redirect', 99));
    }

    public function em_register_event_post_type()
    {
        //************************* Custom Post Type for event *************************\\
        $labels = array(
            'name'                => __('event', 'event-managment'),
            'singular_name'       => __('event', 'event-managment'),
            'menu_name'           => __('event', 'event-managment'),
            'parent_item_colon'   => __('Parent event', 'event-managment'),
            'all_items'           => __('All event', 'event-managment'),
            'view_item'           => __('View event', 'event-managment'),
            'add_new_item'        => __('Add New event', 'event-managment'),
            'add_new'             => __('Add New', 'event-managment'),
            'edit_item'           => __('Edit event', 'event-managment'),
            'update_item'         => __('Update event', 'event-managment'),
            'search_items'        => __('Search event', 'event-managment'),
            'not_found'           => __('Not Found', 'event-managment'),
            'not_found_in_trash'  => __('Not found in Trash', 'event-managment'),
        );

        // Set other options for Custom Post Type

        $args = array(
            'label'               => __('event', 'event-managment'),
            'description'         => __('event event and reviews', 'event-managment'),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array('title', 'editor', 'excerpt',  'author', 'thumbnail', 'custom-fields',),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array('event-managment'),
            /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,

        );

        // Registering your Custom Post Type
        register_post_type('event', $args);
    }

    public function em_register_event_menu()
    {


        add_menu_page(
            __('Title', 'twentytwentyonechild'),
            'Events',
            'manage_options',
            'render-form',
            array($this, 'render_listing_page') //Callback function - Define it also
        );
    }

    public function render_listing_page()
    {
        require_once WPEMS_DIR . '/include/admin/class-em-event-list.php';
    }

    //     public function em_register_event_redirect()
    //     {

    //         wp_redirect(home_url('/thank-you/'));
    //     }
}
