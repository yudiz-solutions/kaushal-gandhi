<?php


function wp_load_script()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');


    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('responsive');

    wp_register_style('loading', get_template_directory_uri() . ' /images/loading.gif');
    wp_enqueue_style('loading');

    wp_register_style('jquery-min', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_style('jquery-min');

    wp_register_style('bootstrap-bundle-min', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_style('bootstrap-bundle-min');

    wp_register_style('jquery', get_template_directory_uri() . '/js/jquery-3.0.0.min.js');
    wp_enqueue_style('jquery');

    wp_register_style('custom', get_template_directory_uri() . '/js/custom.js');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'wp_load_script');

function theme_setup_one_setup()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Top Menu', 'textdomain')
        )
    );
}
add_action('after_setup_theme', 'theme_setup_one_setup');

function wpdocs_theme_slug_widgets_init()
{

    register_sidebar(array(
        'name'          => __('Sbscribe-Now', 'textdomain'),
        'id'            => 'Sbscribe-Now',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Useful-Link', 'textdomain'),
        'id'            => 'Useful-Link',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('News', 'textdomain'),
        'id'            => 'News',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('company', 'textdomain'),
        'id'            => 'company',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('contact-Us', 'textdomain'),
        'id'            => 'contact-Us',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('News', 'Post Type General Name', 'coustom-theam'),
        'singular_name'       => _x('News', 'Post Type Singular Name', 'coustom-theam'),
        'menu_name'           => __('News', 'coustom-theam'),
        'parent_item_colon'   => __('Parent News', 'coustom-theam'),
        'all_items'           => __('All News', 'coustom-theam'),
        'view_item'           => __('View News', 'coustom-theam'),
        'add_new_item'        => __('Add New News', 'coustom-theam'),
        'add_new'             => __('Add New', 'coustom-theam'),
        'edit_item'           => __('Edit News', 'coustom-theam'),
        'update_item'         => __('Update News', 'coustom-theam'),
        'search_items'        => __('Search News', 'coustom-theam'),
        'not_found'           => __('Not Found', 'coustom-theam'),
        'not_found_in_trash'  => __('Not found in Trash', 'coustom-theam'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('News', 'coustom-theam'),
        'description'         => __('News news and reviews', 'coustom-theam'),
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
