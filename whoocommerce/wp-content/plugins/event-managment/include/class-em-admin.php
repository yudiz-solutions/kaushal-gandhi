<?php

class Em_Admin
{


    public function __construct()
    {
        add_action('init', array($this, 'em_register_event_post_type'));
        add_action('admin_menu', array($this, 'em_register_event_menu'));
        add_action('admin_init', array($this, 'em_register_delete_bulk'));
        add_action('admin_init', array($this, 'em_register_delete'));
        add_action('admin_init', array($this, 'em_register_edit'));

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

    public function wpesm_admin_bulk_delete()
    {

        global $wpdb;

        $table_name = $wpdb->prefix . 'wpems_email_log';

        if (
            isset($_GET['action']) && $_GET['action'] == 'delete'   &&
            isset($_GET['page'])      && $_GET['page'] == 'easy-smtp-email-log'
        ) { //check action and page

            // Get redirect url
            $redirect_url = add_query_arg(array('page' => 'easy-smtp-email-log'), admin_url('admin.php'));

            //get bulk product array from $_GET
            $log_ids = isset($_GET['log_id']) ? $_GET['log_id'] : array();

            if (count($log_ids) > 0) { //check there is some checkboxes are checked or not 

                //if there is multiple checkboxes are checked then call delete in loop
                foreach ($log_ids as $log_id) {
                    $wpdb->delete($table_name, array('id' => $log_id));
                }

                $redirect_url = add_query_arg(array('message' => '3'), $redirect_url);

                //if bulk delete is performed successfully then redirect 
                wp_redirect($redirect_url);
                die();
            } else {
                wp_redirect($redirect_url);
                die();
            }
        }
    }

    public function em_register_delete_bulk()
    {

        if (isset($_REQUEST['delete'])) {
            $click = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

            if ($click == 'delete') {
                // echo '<pre>';
                // print_r($_REQUEST);
                // echo '</pre>';
                // die;
                foreach ($_REQUEST['delete'] as $key) {
                    wp_delete_post($key);
                }
            }
        }
    }
    public function em_register_delete()
    {
        if (isset($_REQUEST['element'])) {
            $click = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

            if ($click == 'delete') {
                // echo '<pre>';
                // print_r($_REQUEST);
                // echo '</pre>';
                // die;
                foreach ($_REQUEST['element'] as $key2) {
                    wp_delete_post($key2);
                }
            }
        }
    }
    public function em_register_edit()
    {
        $pages = isset($_REQUEST['pages']) ? $_REQUEST['pages'] : '';
        $element_e = isset($_REQUEST['element']) ? $_REQUEST['element'] : '';
        $url = 'post.php?post=' . $element_e . '&action=edit';

        // echo '<pre>';
        // print_r($url);
        // echo '</pre>';
        // die;


        if ($pages == 'event') {
            wp_redirect(admin_url($url));
            exit;
        }
    }
}
