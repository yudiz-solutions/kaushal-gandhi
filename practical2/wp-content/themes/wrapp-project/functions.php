<?php


function wp_load_script()
{


    wp_register_style('practical2-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('practical2-bootstrap');

    wp_register_style('practical2-slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('practical2-slick');

    wp_register_style('practical2-slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('practical2-slick-theme');

    wp_register_style('practical2-style', get_template_directory_uri() . '/style.css', array(), time());
    wp_enqueue_style('practical2-style');


    wp_register_style('practical2-fancybox', get_template_directory_uri() . '/css/fancybox.css');
    wp_enqueue_style('practical2-fancybox');

    wp_register_style('practical2-fancybox-min', get_template_directory_uri() . '/css/fancybox.min.css');
    wp_enqueue_style('practical2-fancybox-min');

    wp_register_style('practical2-animate-min', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('practical2-animate-min');

    wp_register_style('practical2-animate-compat', get_template_directory_uri() . '/css/animate.compat.css');
    wp_enqueue_style('practical2-animate-compat');

    wp_register_script('practical2-jquery-3.6.4.-min', get_template_directory_uri() . '/js/jquery-3.6.4.min.js');
    wp_enqueue_script('practical2-jquery-3.6.4.-min');


    wp_register_script('practical2-slick-min', get_template_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script('practical2-slick-min');

    wp_register_script('practical2-fancybox-min', get_template_directory_uri() . '/js/fancybox.min.js');
    wp_enqueue_script('practical2-fancybox-min');

    wp_register_script('practical2-popper-min', get_template_directory_uri() . '/js/popper.min.js');
    wp_enqueue_script('practical2-popper-min');

    wp_register_script('practical2-bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('practical2-bootstrap-min');

    wp_register_script('practical2-script.js', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('practical2-script.js');
}

add_action('wp_enqueue_scripts', 'wp_load_script');


function nav_menu()
{
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

    register_nav_menus(array(
        'primary-menu' =>  __('Top Menu', 'wrapp-project'),
        'menu' => 'Menu 1'

    ));
    /* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
}
add_action('after_setup_theme', 'nav_menu');

function theme_support()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support');

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');








function wpdocs_theme_slug_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Categories', 'wrapp-project'),
        'id'            => 'Categories',
        'description'   => __(''),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="nav-link active">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Product', 'wrapp-project'),
        'id'            => 'Product',
        'description'   => __(''),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Solutions', 'wrapp-project'),
        'id'            => 'Solutions',
        'description'   => __(''),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));


    register_sidebar(array(
        'name'          => __('Resources', 'wrapp-project'),
        'id'            => 'Resources',
        'description'   => __(''),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Support', 'wrapp-project'),
        'id'            => 'Support',
        'description'   => __(''),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Company', 'wrapp-project'),
        'id'            => 'Company',
        'description'   => __(''),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

// coustom post type

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('stories', 'Post Type General Name', 'wrapp-project'),
        'singular_name'       => _x('stories', 'Post Type Singular Name', 'wrapp-project'),
        'menu_name'           => __('stories', 'wrapp-project'),
        'parent_item_colon'   => __('Parent stories', 'wrapp-project'),
        'all_items'           => __('All stories', 'wrapp-project'),
        'view_item'           => __('View stories', 'wrapp-project'),
        'add_new_item'        => __('Add New stories', 'wrapp-project'),
        'add_new'             => __('Add New', 'wrapp-project'),
        'edit_item'           => __('Edit stories', 'wrapp-project'),
        'update_item'         => __('Update stories', 'wrapp-project'),
        'search_items'        => __('Search stories', 'wrapp-project'),
        'not_found'           => __('Not Found', 'wrapp-project'),
        'not_found_in_trash'  => __('Not found in Trash', 'wrapp-project'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('stories', 'wrapp-project'),
        'description'         => __('stories stories and reviews', 'wrapp-project'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt',  'author', 'thumbnail',   'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('wrapp-project'),
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
    register_post_type('stories', $args);


    $labels = array(
        'name'                       => __('Category', 'wrapp-project'),
        'singular_name'              => __('Category', 'wrapp-project'),
        'search_items'               => __('Search Category', 'wrapp-project'),
        'popular_items'              => __('Popular Category', 'wrapp-project'),
        'all_items'                  => __('All Category', 'wrapp-project'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Writer', 'wrapp-project'),
        'update_item'                => __('Update Writer', 'wrapp-project'),
        'add_new_item'               => __('Add New Writer', 'wrapp-project'),
        'new_item_name'              => __('New Writer Name', 'wrapp-project'),
        'separate_items_with_commas' => __('Separate Category with commas', 'wrapp-project'),
        'add_or_remove_items'        => __('Add or remove Category', 'wrapp-project'),
        'choose_from_most_used'      => __('Choose from the most used Category', 'wrapp-project'),
        'not_found'                  => __('No Category found.', 'wrapp-project'),
        'menu_name'                  => __('Category', 'wrapp-project'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array('slug' => 'stories-category'),
    );

    register_taxonomy('stories-category', 'stories', $args);
}


add_action('init', 'custom_post_type', 0);
