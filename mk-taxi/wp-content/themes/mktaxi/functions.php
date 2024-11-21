 <?php
//  for logo
add_theme_support('custom-header'); 
function mytheme_enqueue_styles() {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/css/all-fontawesome.min.css');
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.min.css');
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('jquery-ui', get_stylesheet_directory_uri() . '/assets/css/jquery-ui.min.css');
    wp_enqueue_style('jquery-timepicker', get_stylesheet_directory_uri() . '/assets/css/jquery.timepicker.min.css');
    wp_enqueue_style('nice-select', get_stylesheet_directory_uri() . '/assets/css/nice-select.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),       
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');
//for owl carosel
function mytheme_enqueue_scripts() {
    // Enqueue JavaScript libraries
    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', get_stylesheet_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('appear', get_stylesheet_directory_uri() . '/assets/js/jquery.appear.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_stylesheet_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('counter-up', get_stylesheet_directory_uri() . '/assets/js/counter-up.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('timepicker', get_stylesheet_directory_uri() . '/assets/js/jquery.timepicker.min.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_stylesheet_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);
    // Enqueue main script file
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-custom', get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');



// Register Custom Post type with unique category//
function slider_custom_post_type() {
    register_post_type('banners', array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banner')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'banners'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
    ));
}
add_action('init', 'slider_custom_post_type');

function theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

// Register About Us Custom Post Type
function about_us_custom_post_type() {
    register_post_type('about_us', array(
        'labels' => array(
            'name' => __('About Us'),
            'singular_name' => __('About Us')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'about_us'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
    ));
}
add_action('init', 'about_us_custom_post_type');

function our_services_custom_post_type() {
    $labels = array(
        'name'                  => __( 'Our Services', 'textdomain' ),
        'singular_name'         => __( 'Service', 'textdomain' ),
        'menu_name'             => __( 'Our Services', 'textdomain' ),
        'name_admin_bar'        => __( 'Service', 'textdomain' ),
        'add_new'               => __( 'Add New Service', 'textdomain' ),
        'add_new_item'          => __( 'Add New Service', 'textdomain' ),
        'new_item'              => __( 'New Service', 'textdomain' ),
        'edit_item'             => __( 'Edit Service', 'textdomain' ),
        'view_item'             => __( 'View Service', 'textdomain' ),
        'all_items'             => __( 'All Services', 'textdomain' ),
        'search_items'          => __( 'Search Services', 'textdomain' ),
        'not_found'             => __( 'No services found', 'textdomain' ),
        'not_found_in_trash'    => __( 'No services found in Trash', 'textdomain' ),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'our-services' ),
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category' ),
        'menu_icon'             => 'dashicons-car', 
    );

    register_post_type( 'our_services', $args );
}
add_action( 'init', 'our_services_custom_post_type' );



function taxi_list_custom_post_type() {
    $labels = array(
        'name'               => __( 'Taxi Lists' ),
        'singular_name'      => __( 'Taxi List' ),
        'menu_name'          => __( 'Taxi Lists' ),
        'name_admin_bar'     => __( 'Taxi List' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Taxi List' ),
        'new_item'           => __( 'New Taxi List' ),
        'edit_item'          => __( 'Edit Taxi List' ),
        'view_item'          => __( 'View Taxi List' ),
        'all_items'          => __( 'All Taxi Lists' ),
        'search_items'       => __( 'Search Taxi Lists' ),
        'parent_item_colon'  => __( 'Parent Taxi Lists:' ),
        'not_found'          => __( 'No taxi lists found.' ),
        'not_found_in_trash' => __( 'No taxi lists found in Trash.' ),
        'featured_image'     => __( 'Taxi List Featured Image' ),
        'set_featured_image' => __( 'Set featured image' ),
        'remove_featured_image' => __( 'Remove featured image' ),
        'use_featured_image' => __( 'Use as featured image' ),
        'archives'           => __( 'Taxi List Archives' ),
        'insert_into_item'   => __( 'Insert into taxi list' ),
        'uploaded_to_this_item' => __( 'Uploaded to this taxi list' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'taxi-list' ),
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array( 'category' ),        
        'menu_icon'          => 'dashicons-car',  
    );

    // Register Custom Post Type
    register_post_type( 'taxi_list', $args );
}
add_action( 'init', 'taxi_list_custom_post_type' );


function review_custom_post_type() {
    register_post_type( 'review', array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'Reviews' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'review'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array('category' ),
        )
    );
 }
add_action( 'init', 'review_custom_post_type' );
function faq_custom_post_type() {
    register_post_type( 'faq', array(
            'labels' => array(
                'name' => __( 'Faqs' ),
                'singular_name' => __( 'Faqs' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Faqs'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array('category' ),
        )
    );
 }
add_action( 'init', 'faq_custom_post_type' );

?>