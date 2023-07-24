<?php

function wp_load_script()
{
    //////////////////////////////// CSS FIELS //////////////////////////////// 
    wp_register_style('practial4-slick.css', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('practial4-slick.css');

    wp_register_style('practial4-slick-theme.css', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('practial4-slick-theme.css');

    wp_register_style('practial4-all.min.css', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('practial4-all.min.css');

    wp_register_style('practial4-alll.min.css', get_template_directory_uri() . '/assets/css/alll.min.css');
    wp_enqueue_style('practial4-alll.min.css');

    wp_register_style('practial4-fancybox.css', get_template_directory_uri() . '/assets/css/fancybox.css');
    wp_enqueue_style('practial4-fancybox.css');

    wp_register_style('practial4-animate.min.css', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('practial4-animate.min.css');

    wp_register_style('practial4-animate.css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('practial4-animate.css');

    wp_register_style('practial4-style.css', get_template_directory_uri() . '/style.css', array(), time());
    wp_enqueue_style('practial4-style.css');

    wp_register_style('practial4-class.css', get_template_directory_uri() . '/assets/css/class.css');
    wp_enqueue_style('practial4-class.css');

    //////////////////////////////// JS FIELS //////////////////////////////// 

    wp_enqueue_script('practical-4-jquery-js');
    wp_register_script('practical-4-jquery-js', get_template_directory_uri() . '/assets/js/jquery-1.11.0.min.js', array(), '', true);

    wp_register_script('practical-4-jquery-min.js', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', array(), '', true);
    wp_enqueue_script('practical-4-jquery-min.js');

    wp_register_script('practical-4-slick-min-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '', true);
    wp_enqueue_script('practical-4-slick-min-js');

    wp_register_script('practical-4-slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), '', true);
    wp_enqueue_script('practical-4-slick-js');

    wp_register_script('practical-4-fancybox-umd-js', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array(), '', true);
    wp_enqueue_script('practical-4-fancybox-umd-js');

    wp_register_script('practical-4-wow-min-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '', true);
    wp_enqueue_script('practical-4-wow-min-js');

    // wp_register_script('practical-4-barba-umd-js', get_template_directory_uri() . '/assets/js/barba.umd.js');
    // wp_enqueue_script('practical-4-barba-umd-js');

    wp_register_script('practical-4-gsap-min-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), '', true);
    wp_enqueue_script('practical-4-gsap-min-js');

    wp_register_script('practical-4-script-js', get_template_directory_uri() . '/script.js', array(), '', true);
    wp_enqueue_script('practical-4-script-js');

    wp_register_script('practical-4-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '', true);
    wp_enqueue_script('practical-4-custom-js');

    wp_enqueue_style('font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'wp_load_script');


function nav_menu()
{
    register_nav_menus(
        array(
            'primary-menu' => __('menu', 'practical4-Meditative'),
        )
    );
}

add_action('after_setup_theme', 'nav_menu');


function widgets()
{
    register_sidebar(array(
        'name'          => __('Meditative', 'practical4-Meditative'),
        'id'            => 'meditative',

    ));

    register_sidebar(array(
        'name'          => __('Popular Links', 'practical4-Meditative'),
        'id'            => 'popular_links',
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Quick Links', 'practical4-Meditative'),
        'id'            => 'quick_links',
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => __('Have a Question?', 'practical4-Meditative'),
        'id'            => 'have_a_question',
    ));
}

add_action('widgets_init', 'widgets');
