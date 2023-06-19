<?php
function kaushal_css()
{
    wp_register_style('kaushal_css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('kaushal_css');

    wp_enqueue_style("parent-style", get_parent_theme_file_uri('/style.css'));
}
add_action('wp_enqueue_scripts', 'kaushal_css');

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('News', 'Post Type General Name', 'new-twenty-child'),
        'singular_name'       => _x('News', 'Post Type Singular Name', 'new-twenty-child'),
        'menu_name'           => __('News', 'new-twenty-child'),
        'parent_item_colon'   => __('Parent News', 'new-twenty-child'),
        'all_items'           => __('All News', 'new-twenty-child'),
        'view_item'           => __('View News', 'new-twenty-child'),
        'add_new_item'        => __('Add New News', 'new-twenty-child'),
        'add_new'             => __('Add New', 'new-twenty-child'),
        'edit_item'           => __('Edit News', 'new-twenty-child'),
        'update_item'         => __('Update News', 'new-twenty-child'),
        'search_items'        => __('Search News', 'new-twenty-child'),
        'not_found'           => __('Not Found', 'new-twenty-child'),
        'not_found_in_trash'  => __('Not found in Trash', 'new-twenty-child'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('News', 'new-twenty-child'),
        'description'         => __('News news and reviews', 'new-twenty-child'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor',  'author', 'thumbnail',   'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => false,
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
    register_post_type('news', $args);


    $labels = array(
        'name'                       => _x('Category', 'taxonomy general name', 'textdomain'),
        'singular_name'              => _x('Category', 'taxonomy singular name', 'textdomain'),
        'search_items'               => __('Search Category', 'textdomain'),
        'popular_items'              => __('Popular Category', 'textdomain'),
        'all_items'                  => __('All Category', 'textdomain'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Writer', 'textdomain'),
        'update_item'                => __('Update Writer', 'textdomain'),
        'add_new_item'               => __('Add New Writer', 'textdomain'),
        'new_item_name'              => __('New Writer Name', 'textdomain'),
        'separate_items_with_commas' => __('Separate Category with commas', 'textdomain'),
        'add_or_remove_items'        => __('Add or remove Category', 'textdomain'),
        'choose_from_most_used'      => __('Choose from the most used Category', 'textdomain'),
        'not_found'                  => __('No Category found.', 'textdomain'),
        'menu_name'                  => __('Category', 'textdomain'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array('slug' => 'news-category'),
    );

    register_taxonomy('news-category', 'news', $args);


    $labels = array(
        'name'                       => _x('Type', 'taxonomy general name', 'textdomain'),
        'singular_name'              => _x('Type', 'taxonomy singular name', 'textdomain'),
        'search_items'               => __('Search Type', 'textdomain'),
        'popular_items'              => __('Popular Type', 'textdomain'),
        'all_items'                  => __('All Type', 'textdomain'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Writer', 'textdomain'),
        'update_item'                => __('Update Writer', 'textdomain'),
        'add_new_item'               => __('Add New Writer', 'textdomain'),
        'new_item_name'              => __('New Writer Name', 'textdomain'),
        'separate_items_with_commas' => __('Separate Type with commas', 'textdomain'),
        'add_or_remove_items'        => __('Add or remove Type', 'textdomain'),
        'choose_from_most_used'      => __('Choose from the most used Type', 'textdomain'),
        'not_found'                  => __('No Type found.', 'textdomain'),
        'menu_name'                  => __('Type', 'textdomain'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array('slug' => 'news-type'),
    );

    register_taxonomy('news-type', 'news', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'custom_post_type', 0);
