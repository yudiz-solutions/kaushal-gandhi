<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function wp_load_script()
{
    //////////////////////////////// CSS FIELS //////////////////////////////// 
    wp_register_style('practial6-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('practial6-fontawesome');

    wp_register_style('practial6-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('practial6-bootstrap');

    wp_register_style('practial6-slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('practial6-slick');

    wp_register_style('practial6-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('practial6-slick-theme');

    wp_register_style('practial6-style', get_template_directory_uri() . '/style.css', array(), time());
    wp_enqueue_style('practial6-style');

    wp_register_style('practial6-style', get_template_directory_uri() . '/assets/css/jcf.css');
    wp_enqueue_style('practial6-style');

    //////////////////////////////// js FIELS //////////////////////////////// 

    wp_register_script('practical6-jquery', get_template_directory_uri() . '/assets/js/lib/jquery.js', array(), '', true);
    wp_enqueue_script('practical6-jquery');

    wp_register_script('practical6-slick', get_template_directory_uri() . '/assets/js/slick.js', array(), '', true);
    wp_enqueue_script('practical6-slick');

    wp_register_script('practical6-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '', true);
    wp_enqueue_script('practical6-bootstrap');

    wp_register_script('practical6-modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '', true);
    wp_enqueue_script('practical6-modernizr');

    wp_register_script('practical6-sticky-kit', get_template_directory_uri() . '/assets/js/sticky-kit.js', array(), '', true);
    wp_enqueue_script('practical6-sticky-kit');

    wp_register_script('practical6-custom-file-input', get_template_directory_uri() . '/assets/js/custom-file-input.js', array(), '', true);
    wp_enqueue_script('practical6-custom-file-input');

    wp_register_script('practical6-html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.min', array(), '', true);
    wp_enqueue_script('practical6-html5shiv');

    wp_register_script('practical6-jcf.file', get_template_directory_uri() . '/assets/js/jcf.file.js', array(), '', true);
    wp_enqueue_script('practical6-jcf.file');

    wp_register_script('practical6-jcf', get_template_directory_uri() . '/assets/js/jcf.js', array(), '', true);
    wp_enqueue_script('practical6-jcf');

    wp_register_script('practical6-jcf.radio', get_template_directory_uri() . '/assets/js/jcf.radio.js', array(), '', true);
    wp_enqueue_script('practical6-jcf.radio');

    wp_register_script('practical6-jcf.select', get_template_directory_uri() . '/assets/js/jcf.select.js', array(), '', true);
    wp_enqueue_script('practical6-jcf.select');

    wp_register_script('practical6-respond.min', get_template_directory_uri() . '/assets/js/respond.min.js', array(), '', true);
    wp_enqueue_script('practical6-respond.min');

    wp_register_script('practical6-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '', true);
    wp_enqueue_script('practical6-custom');
}
add_action('wp_enqueue_scripts', 'wp_load_script');

function nav_menu()
{
    ///////////////////////////////// Logo  ////////////////////////////////
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
    /////////////////////////////////  Navbar ////////////////////////////////
    register_nav_menus(array(
        'primary-menu' =>  __('Top Menu', 'practical6-html'),
    ));


    ////////////////////////////// feature image ////////////////////////
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'nav_menu');

/////////////////////////////////  image support ////////////////////////////////

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function widgets()
{
    //////////////////////////// widget for header logo-2//////////////////////////////
    register_sidebar(array(
        'name'          => __('sticky_logo', 'practical6-html'),
        'id'            => 'sticky_logo'

    ));
    /////////////////////////// widgets for footer /////////////////////////////////
    register_sidebar(array(
        'name'          => __('footer logo', 'practical6-html'),
        'id'            => 'footer_logo'

    ));

    register_sidebar(array(
        'name'          => __('footer Menu', 'practical6-html'),
        'id'            => 'footer_menu',
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
        'before_title'  => '<li>',
        'after_title'   => '</li>',
    ));
}
add_action('widgets_init', 'widgets');



///////////////////////////////// Theam setting Acf //////////////////////////////
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

add_action('acf/init', 'my_acf_op_init');
