<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function wp_load_script()
{
    //************************* CSS FIELS *************************\\ 

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

    //*************************\\ js FIELS //*************************\\ 

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
    //************************* Logo *************************\\ 
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
    //************************* Navbar *************************\\ 
    register_nav_menus(array(
        'primary-menu' =>  __('Top Menu', 'practical6-html'),
    ));


    //************************* Feature Image *************************\\ 

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'nav_menu');

//************************* Image Support *************************\\
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



//************************* widget *************************\\ 

function widgets()
{
    //************************* widget for header logo-2 *************************\\
    register_sidebar(array(
        'name'          => __('sticky_logo', 'practical6-html'),
        'id'            => 'sticky_logo'

    ));
    //************************* widgets for footer *************************\\
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

    register_sidebar(array(
        'name'          => __('icon', 'practical6-html'),
        'id'            => 'icon',
        'before_widget' => '<ul  class="social-share-menu">',
        'after_widget'  => '</ul>',

    ));
}
add_action('widgets_init', 'widgets');



//************************* Theam setting Acf *************************\\ 


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

//************************* Shortcode for Assessment Section *************************\\ 

function assessment_callback()
{

    $assessment_section = get_field('assessment_section', 'option');
?>

    <?php if (!empty($assessment_section)) { ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?php
                    if (isset($assessment_section['heading']) && !empty($assessment_section['heading'])) {
                    ?>
                        <h2><?php echo $assessment_section['heading']; ?></h2>
                    <?php } ?>
                </div>
                <div class="col-sm-6 text-right">
                    <?php
                    if (isset($assessment_section['button']) && !empty($assessment_section['button'])) {
                    ?>
                        <a href="<?php echo $assessment_section['button']['url']; ?>" class="theme-btn white-btn"><?php echo $assessment_section['button']['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
<?php

}
add_shortcode('assessment_data', 'assessment_callback');


//************************* Shortcode for news Section *************************\\ 

function news_callback()
{
    $news = get_field('news', 'option');
?>
    <div class="banner" style="background: #5C5C5C url('<?php if (isset($news['image']) && !empty($news['image'])) { ?><?php echo $news['image']['url']; ?><?php } ?>') no-repeat center center / cover;">
        <div class="container">]
            <?php if (isset($news['heading']) && !empty($news['heading'])) { ?>
                <h1><?php echo $news['heading']; ?></h1>
            <?php } ?>
        </div>
    </div>
<?php

}
add_shortcode('news_data', 'news_callback');

//************************* Custom Post Type *************************\\ 

function custom_post_type()
{

    //************************* Custom Post Type for News *************************\\
    $labels = array(
        'name'                => __('news', 'practical6-html'),
        'singular_name'       => __('news', 'practical6-html'),
        'menu_name'           => __('news', 'practical6-html'),
        'parent_item_colon'   => __('Parent news', 'practical6-html'),
        'all_items'           => __('All news', 'practical6-html'),
        'view_item'           => __('View news', 'practical6-html'),
        'add_new_item'        => __('Add New news', 'practical6-html'),
        'add_new'             => __('Add New', 'practical6-html'),
        'edit_item'           => __('Edit news', 'practical6-html'),
        'update_item'         => __('Update news', 'practical6-html'),
        'search_items'        => __('Search news', 'practical6-html'),
        'not_found'           => __('Not Found', 'practical6-html'),
        'not_found_in_trash'  => __('Not found in Trash', 'practical6-html'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('news', 'practical6-html'),
        'description'         => __('news news and reviews', 'practical6-html'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt',  'author', 'thumbnail', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('practical6-html'),
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
    register_post_type('news', $args);

    //*************************  register taxonomy Category for News *************************\\

    $labels = array(
        'name'                       => __('Category', 'practical6-html'),
        'singular_name'              => __('Category', 'practical6-html'),
        'search_items'               => __('Search Category', 'practical6-html'),
        'popular_items'              => __('Popular Category', 'practical6-html'),
        'all_items'                  => __('All Category', 'practical6-html'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Writer', 'practical6-html'),
        'update_item'                => __('Update Writer', 'practical6-html'),
        'add_new_item'               => __('Add New Writer', 'practical6-html'),
        'new_item_name'              => __('New Writer Name', 'practical6-html'),
        'separate_items_with_commas' => __('Separate Category with commas', 'practical6-html'),
        'add_or_remove_items'        => __('Add or remove Category', 'practical6-html'),
        'choose_from_most_used'      => __('Choose from the most used Category', 'practical6-html'),
        'not_found'                  => __('No Category found.', 'practical6-html'),
        'menu_name'                  => __('Category', 'practical6-html'),
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

    //************************* Custom Post Type for services  *************************\\
    $labels = array(
        'name'                => __('services', 'practical6-html'),
        'singular_name'       => __('services', 'practical6-html'),
        'menu_name'           => __('services', 'practical6-html'),
        'parent_item_colon'   => __('Parent services', 'practical6-html'),
        'all_items'           => __('All services', 'practical6-html'),
        'view_item'           => __('View services', 'practical6-html'),
        'add_new_item'        => __('Add New services', 'practical6-html'),
        'add_new'             => __('Add New', 'practical6-html'),
        'edit_item'           => __('Edit services', 'practical6-html'),
        'update_item'         => __('Update services', 'practical6-html'),
        'search_items'        => __('Search services', 'practical6-html'),
        'not_found'           => __('Not Found', 'practical6-html'),
        'not_found_in_trash'  => __('Not found in Trash', 'practical6-html'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('services', 'practical6-html'),
        'description'         => __('services services and reviews', 'practical6-html'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt',  'author', 'thumbnail', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('practical6-html'),
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
    register_post_type('services', $args);

    //*************************  register taxonomy Category for services *************************\\

    $labels = array(
        'name'                       => __('Category', 'practical6-html'),
        'singular_name'              => __('Category', 'practical6-html'),
        'search_items'               => __('Search Category', 'practical6-html'),
        'popular_items'              => __('Popular Category', 'practical6-html'),
        'all_items'                  => __('All Category', 'practical6-html'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Writer', 'practical6-html'),
        'update_item'                => __('Update Writer', 'practical6-html'),
        'add_new_item'               => __('Add New Writer', 'practical6-html'),
        'new_item_name'              => __('New Writer Name', 'practical6-html'),
        'separate_items_with_commas' => __('Separate Category with commas', 'practical6-html'),
        'add_or_remove_items'        => __('Add or remove Category', 'practical6-html'),
        'choose_from_most_used'      => __('Choose from the most used Category', 'practical6-html'),
        'not_found'                  => __('No Category found.', 'practical6-html'),
        'menu_name'                  => __('Category', 'practical6-html'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array('slug' => 'services-category'),
    );

    register_taxonomy('services-category', 'services', $args);
}


add_action('init', 'custom_post_type', 0);


//************************* localize for loadmore-jquery *************************\\ 


function localize()
{
    // global $wp_query;
    $featured_posts_id = get_field('featured_posts');
    wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/js/ajax.js', array(), '', true);
    wp_localize_script('ajax', 'kaushal', array('ajaxurl' => admin_url('admin-ajax.php'), 'featured_posts_id' => $featured_posts_id));
}

add_action('wp_enqueue_scripts', 'localize');

//************************* function for loadmore *************************\\ 

function post_loadmore_ajax()
{
    $page = isset($_POST['page']) ? $_POST['page'] : 1;
    $featured_posts_id = isset($_POST['featured_posts_id']) ? $_POST['featured_posts_id'] : '';
?>
    <?php
    $args = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'paged' => $page,
        'post__not_in' => array($featured_posts_id)
    );
    $news_list = new WP_Query($args);
    ?>
    <div class="row">
        <?php
        $count = 0;
        if ($news_list->have_posts()) {
            while ($news_list->have_posts()) {
                $news_list->the_post();
                $count++;
        ?>
                <div class="col-md-6 col-sm-12 news-side">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="<?php the_permalink() ?>" class="news-image"><?php the_post_thumbnail() ?>
                        </div>
                        <div class="col-sm-8 paddingl-none">
                            <h6><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h6>
                            <p class="meta"><span class="category"><?php echo (get_the_terms(get_the_ID(), 'news-category'))['0']->name;  ?></span> Jul 31, 2018</p>
                            <p><?php the_excerpt(); ?><a href="<?php the_permalink() ?>" class="read-more">Read More</a></p>
                        </div>
                    </div>
                </div>
        <?php
            }
            wp_reset_postdata();
        }
        ?>

    <?php
    die;
}
add_action('wp_ajax_post_loadmore_ajax', 'post_loadmore_ajax');
add_action('wp_ajax_nopriv_post_loadmore_ajax', 'post_loadmore_ajax');
//************************* POPULAR  *************************\\ 
function count_post_visits()
{
    if (is_single()) {
        global $post;
        $views = get_post_meta($post->ID, 'my_post_viewed', true);
        if ($views == '') {
            update_post_meta($post->ID, 'my_post_viewed', '1');
        } else {
            $views_no = intval($views);
            update_post_meta($post->ID, 'my_post_viewed', ++$views_no);
        }
    }
}
add_action('wp_head', 'count_post_visits');
