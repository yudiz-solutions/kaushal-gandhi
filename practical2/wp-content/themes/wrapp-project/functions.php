<?php


function wp_load_script()
{


    wp_register_style('practical2-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('practical2-bootstrap');

    wp_register_style('practical2-slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('practical2-slick');

    wp_register_style('practical2-slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('practical2-slick-theme');

    wp_register_style('practical2-style', get_template_directory_uri() . '/css/style.css', array(), time());
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
        'primary-menu' =>  __('Top Menu', 'textdomain')
    ));
}
add_action('after_setup_theme', 'nav_menu');

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function wpdocs_theme_slug_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Categories', 'textdomain'),
        'id'            => 'Categories',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Product', 'textdomain'),
        'id'            => 'Product',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Solutions', 'textdomain'),
        'id'            => 'Solutions',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));


    register_sidebar(array(
        'name'          => __('Resources', 'textdomain'),
        'id'            => 'Resources',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Support', 'textdomain'),
        'id'            => 'Support',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Company', 'textdomain'),
        'id'            => 'Company',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

// coustom post type

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('stories', 'Post Type General Name', 'coustom-theam'),
        'singular_name'       => _x('stories', 'Post Type Singular Name', 'coustom-theam'),
        'menu_name'           => __('stories', 'coustom-theam'),
        'parent_item_colon'   => __('Parent stories', 'coustom-theam'),
        'all_items'           => __('All stories', 'coustom-theam'),
        'view_item'           => __('View stories', 'coustom-theam'),
        'add_new_item'        => __('Add New stories', 'coustom-theam'),
        'add_new'             => __('Add New', 'coustom-theam'),
        'edit_item'           => __('Edit stories', 'coustom-theam'),
        'update_item'         => __('Update stories', 'coustom-theam'),
        'search_items'        => __('Search stories', 'coustom-theam'),
        'not_found'           => __('Not Found', 'coustom-theam'),
        'not_found_in_trash'  => __('Not found in Trash', 'coustom-theam'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('stories', 'coustom-theam'),
        'description'         => __('stories stories and reviews', 'coustom-theam'),
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
    register_post_type('stories', $args);


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
        'rewrite'               => array('slug' => 'stories-category'),
    );

    register_taxonomy('stories-category', 'stories', $args);


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
        'rewrite'               => array('slug' => 'stories-type'),
    );

    register_taxonomy('stories-type', 'stories', $args);
}
add_theme_support('post-thumbnails');
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'custom_post_type', 0);
