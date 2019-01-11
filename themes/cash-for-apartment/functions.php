<?php

/**
 * cash for apartment functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cash_for_apartment
 */
if (!function_exists('cash_for_apartment_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function cash_for_apartment_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on cash for apartment, use a find and replace
         * to change 'cash-for-apartment' to the name of your theme in all the template files.
         */
        load_theme_textdomain('cash-for-apartment', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
//        register_nav_menus(array(
//            'menu-1' => esc_html__('Primary', 'cash-for-apartment'),
//        ));
        register_nav_menus(array(
            'primary' => esc_html__('Primary ', 'cash-for-apartment'),
            'secondary' => esc_html__('Secondary ', 'cash-for-apartment'),
            'top-menu' => esc_html__('Top-Menu ', 'cash-for-apartment')
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('cash_for_apartment_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }

endif;
add_action('after_setup_theme', 'cash_for_apartment_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cash_for_apartment_content_width() {
    $GLOBALS['content_width'] = apply_filters('cash_for_apartment_content_width', 640);
}

add_action('after_setup_theme', 'cash_for_apartment_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function cash_for_apartment_scripts() {
    wp_enqueue_style('cash-for-apartment-style', get_stylesheet_uri());

    wp_enqueue_script('cash-for-apartment-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);


    wp_enqueue_script('cash-for-apartment-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome.min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('family', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
    wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,500,600,800,900i');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('style2', get_stylesheet_directory_uri() . '/css/style2.css');
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('responsive2', get_stylesheet_directory_uri() . '/css/responsive2.css');
    wp_enqueue_style('owl.carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('owl.theme', get_stylesheet_directory_uri() . '/css/owl.theme.css');
    wp_enqueue_style('animations', get_stylesheet_directory_uri() . '/css/animations.css');


    /*     * ************ js**************************** */
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array('jquery'));
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_style('carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.js');
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'cash_for_apartment_scripts');

function theme_enqueue_scripts() {

    /**
     * frontend and admin ajax requests.
     */
    wp_localize_script('ajax-script', 'ajax', array('url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
wp_register_script('filter_handle', plugin_dir_url(__FILE__) . '/js/webuyapartment-public.js');
wp_register_script('ajax_handle', admin_url('admin-ajax.php'));


add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl() {
    echo '<script type="text/javascript">
               var ajaxurl = "' . admin_url('admin-ajax.php') . '";
             </script>';
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function cash_for_apartment_widgets_init() {

    register_sidebar(array(
        'name' => 'Home page content',
        'id' => 'homepage-content',
        'description' => 'Appears in the header area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Google Content',
        'id' => 'google-content',
        'description' => 'Appears in the header area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 4',
        'id' => 'footer-sidebar-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 5',
        'id' => 'footer-sidebar-5',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 6',
        'id' => 'footer-sidebar-6',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'cash_for_apartment_widgets_init');

function cash_for_apartment_customize_register_mods($wp_customize) {
    $wp_customize->add_panel('dash', array(
        'title' => __('Dash'),
        'description' => $description, // Include html tags such as <p>.
        'priority' => 160, // Mixed with top-level-section hierarchy.
    ));
    $wp_customize->add_section($section_id, array(
        'title' => $menu->name,
        'panel' => 'dash',
    ));

    $wp_customize->add_section('Header_Titles', array(
        'title' => __('Header Titles', 'cash_for_apartment'),
        'description' => 'Add/Edit Headline  top small heading.'
    ));

    $wp_customize->add_setting('Header_Title1', array(
        'default' => 'Header Title1',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('Header_Title1', array(
        'label' => __('Add/Edit the Title1 in Header section', 'cash_for_apartment'),
        'section' => 'Header_Titles',
        'setting' => 'Header_Title1',
    ));
    $wp_customize->add_setting('Header_Title1_link', array(
        'default' => 'Header Title1 Link',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('Header_Title1_link', array(
        'label' => __('Add/Edit the Title1 link in Header section', 'cash_for_apartment'),
        'section' => 'Header_Titles',
        'setting' => 'Header_Title1_link',
    ));


    $wp_customize->add_section('Contact_Phone_no', array(
        'title' => __('Contact Number ', 'cash_for_apartment'),
        'description' => 'Add/Edit Contact Number.'
    ));

    $wp_customize->add_setting('Number', array(
        'default' => 'Enter Number',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('Number', array(
        'label' => __('Add/Edit Number  in Header section', 'cash_for_apartment'),
        'section' => 'Contact_Phone_no',
        'setting' => 'Name',
    ));
    $wp_customize->add_setting('Contact_Text', array(
        'default' => 'Enter Contact Text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('Contact_Text', array(
        'label' => __('Add/Edit Text  in Header section', 'cash_for_apartment'),
        'section' => 'Contact_Phone_no',
        'setting' => 'Contact_Text',
    ));
    $wp_customize->add_setting('Contact_Email', array(
        'default' => 'Enter Contact Email',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('Contact_Email', array(
        'label' => __('Add/Edit Email  in Header section', 'cash_for_apartment'),
        'section' => 'Contact_Phone_no',
        'setting' => 'Contact_Email',
    ));
    $wp_customize->add_setting('Email_text', array(
        'default' => 'Enter Email_text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('Email_text', array(
        'label' => __('Add/Edit Email text  in Header section', 'cash_for_apartment'),
        'section' => 'Contact_Phone_no',
        'setting' => 'Email_text',
    ));
    /*     * *******************            ***************** */

    $wp_customize->add_section('booking_now_content', array(
        'title' => __('Booking Now Content ', 'cash_for_apartment'),
        'description' => 'Add/Edit Contact Number.'
    ));

    $wp_customize->add_setting('booking_now_text', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('booking_now_text', array(
        'label' => __('Add/Edit booking now text  in Header section', 'cash_for_apartment'),
        'section' => 'booking_now_content',
        'setting' => 'booking_now_text',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('booking_now_button', array(
        'default' => 'Enter button name',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('booking_now_button', array(
        'label' => __('Add/Edit booking now button name  in Header section', 'cash_for_apartment'),
        'section' => 'booking_now_content',
        'setting' => 'booking_now_button',
    ));
    $wp_customize->add_setting('booking_now_button_link', array(
        'default' => 'Enter button link',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('booking_now_button_link', array(
        'label' => __('Add/Edit booking now button link  in Header section', 'cash_for_apartment'),
        'section' => 'booking_now_content',
        'setting' => 'booking_now_button_link',
    ));

    /*     * ********           ***************** */
    $wp_customize->add_section('Our_work_Heading', array(
        'title' => __('Our Work Heading ', 'cash_for_apartment'),
        'description' => 'Add/Edit Our Work Heading.'
    ));

    $wp_customize->add_setting('our_work_heading_text', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('our_work_heading_text', array(
        'label' => __('Add/Edit our work heading text  in Header section', 'cash_for_apartment'),
        'section' => 'Our_work_Heading',
        'setting' => 'our_work_heading_text',
        'type' => 'textarea',
    ));
    /*     * ********           ***************** */
    $wp_customize->add_section('Our_articals_Heading', array(
        'title' => __('Our Articals Heading ', 'cash_for_apartment'),
        'description' => 'Add/Edit Our ARTICALS Heading.'
    ));

    $wp_customize->add_setting('Our_articals_Heading_text', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('Our_articals_Heading_text', array(
        'label' => __('Add/Edit our articals heading text  in Header section', 'cash_for_apartment'),
        'section' => 'Our_articals_Heading',
        'setting' => 'Our_articals_Heading_text',
        'type' => 'textarea',
    ));

    /*     * ********           ***************** */
    $wp_customize->add_section('client_testimonials_Heading', array(
        'title' => __('Client Testimonials Heading ', 'cash_for_apartment'),
        'description' => 'Add/Edit client testimonials Heading.'
    ));

    $wp_customize->add_setting('client_testimonials_Heading_text', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('client_testimonials_Heading_text', array(
        'label' => __('Add/Edit testimonials heading text  in Header section', 'cash_for_apartment'),
        'section' => 'client_testimonials_Heading',
        'setting' => 'client_testimonials_Heading_text',
        'type' => 'textarea',
    ));
    /*     * ********     facebook feeds      ***************** */
    $wp_customize->add_section('facebook_feeds_Heading', array(
        'title' => __('Facebook Feeds Heading ', 'cash_for_apartment'),
        'description' => 'Add/Edit Facebook Feeds Heading.'
    ));

    $wp_customize->add_setting('facebook_feeds_Heading_text', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('facebook_feeds_Heading_text', array(
        'label' => __('Add/Edit facebook feeds heading  in Header section', 'cash_for_apartment'),
        'section' => 'facebook_feeds_Heading',
        'setting' => 'facebook_feeds_Heading_text',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('facebook_feeds_url', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('facebook_feeds_url', array(
        'label' => __('Add/Edit facebook feeds url  in Header section', 'cash_for_apartment'),
        'section' => 'facebook_feeds_Heading',
        'setting' => 'facebook_feeds_url',
    ));

    /*     * ********           ***************** */
    $wp_customize->add_section('Our_Video', array(
        'title' => __('Our Video Section ', 'cash_for_apartment'),
        'description' => 'Add/Edit video Heading.'
    ));

    $wp_customize->add_setting('our_video_heading', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('our_video_heading', array(
        'label' => __('Add/Edit our video heading text  in Header section', 'cash_for_apartment'),
        'section' => 'Our_Video',
        'setting' => 'our_video_heading',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('our_video_link', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('our_video_link', array(
        'label' => __('Add/Edit our video heading link  in Header section', 'cash_for_apartment'),
        'section' => 'Our_Video',
        'setting' => 'our_video_link',
    ));
    $wp_customize->add_setting('our_video_image1', array(
        'default' => get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'our_video_image1', array(
        'settings' => 'our_video_image1',
        'section' => 'Our_Video',
        'label' => __('Our Video image1', 'cash_for_apartment'),
        'description' => __('Select the image to be used for our video image1.', 'cash_for_apartment'),
        'priority' => 30
    )));
    /*     * ************           Landing page content******************************* */
    $wp_customize->add_section('landing_page_content', array(
        'title' => __('Landing Page Content & Images  ', 'cash_for_apartment'),
        'description' => 'Add/Edit video Heading.'
    ));

    $wp_customize->add_setting('top_header_text', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('top_header_text', array(
        'label' => __('Add/Edit top header text text  in Header section', 'cash_for_apartment'),
        'section' => 'landing_page_content',
        'setting' => 'top_header_text',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('first_image1', array(
        'default' => get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'first_image1', array(
        'settings' => 'first_image1',
        'section' => 'landing_page_content',
        'label' => __('Our First image1', 'cash_for_apartment'),
        'description' => __('Select the image to be used for First image11.', 'cash_for_apartment'),
        'priority' => 30
    )));
    $wp_customize->add_setting('first_image1_content', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('first_image1_content', array(
        'label' => __('Add/Edit first image1 content  in Header section', 'cash_for_apartment'),
        'section' => 'landing_page_content',
        'setting' => 'first_image1_content',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('content_first_arrow', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('content_first_arrow', array(
        'label' => __('Add/Edit content first arrow section', 'cash_for_apartment'),
        'section' => 'landing_page_content',
        'setting' => 'content_first_arrow',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('image_section2', array(
        'default' => get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'image_section2', array(
        'settings' => 'image_section2',
        'section' => 'landing_page_content',
        'label' => __('Our image section2', 'cash_for_apartment'),
        'description' => __('Select the image to be used for image section2.', 'cash_for_apartment'),
        'priority' => 30
    )));
    $wp_customize->add_setting('image_section2_content', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('image_section2_content', array(
        'label' => __('Add/Edit image section2 content content  in Header section', 'cash_for_apartment'),
        'section' => 'landing_page_content',
        'setting' => 'image_section2_content',
        'type' => 'textarea',
    ));

    /*     * ************ Lead Generation form **************** */

    $wp_customize->add_section('lead_generation_page', array(
        'title' => __('Lead Generation Page Content  ', 'cash_for_apartment'),
        'description' => 'Add/Edit Lead Generation Page Conten.'
    ));

    $wp_customize->add_setting('lead_generation_page_top_content', array(
        'default' => 'Enter text',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('lead_generation_page_top_content', array(
        'label' => __('Add/Edit lead generation page top content', 'cash_for_apartment'),
        'section' => 'lead_generation_page',
        'setting' => 'lead_generation_page_top_content',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'cash_for_apartment_customize_register_mods');

function cash_for_apartment_post_type_our_work() {

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('our_work', 'plural'),
        'singular_name' => _x('our_work', 'singular'),
        'menu_name' => _x('OUR WORK', 'admin menu'),
        'name_admin_bar' => _x('our_work', 'admin bar'),
        'add_new' => _x('Add New', 'add our work'),
        'add_new_item' => __('Add New our work'),
        'new_item' => __('New our work'),
        'edit_item' => __('Edit our work'),
        'view_item' => __('View our work'),
        'all_items' => __('All our work'),
        'search_items' => __('Search our work'),
        'not_found' => __('No our work found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'our_work'),
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => true,
        'hierarchical' => false,
        'taxonomies' => array('category'),
    );
    register_post_type('our_work', $args);
}

add_action('init', 'cash_for_apartment_post_type_our_work');

function cash_for_apartment_post_type_our_articals() {

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('our_articals', 'plural'),
        'singular_name' => _x('our_artical', 'singular'),
        'menu_name' => _x('OUR ARTICALS', 'admin menu'),
        'name_admin_bar' => _x('our_articals', 'admin bar'),
        'add_new' => _x('Add New', 'add Our Artical'),
        'add_new_item' => __('Add New Our Artical'),
        'new_item' => __('New Our Artical'),
        'edit_item' => __('Edit Our Artical'),
        'view_item' => __('View Our Artical'),
        'all_items' => __('All  Artical'),
        'search_items' => __('Search Our Artical'),
        'not_found' => __('No Our Artical found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'our_articals'),
        'menu_icon' => 'dashicons-art',
        'has_archive' => true,
        'hierarchical' => false,
        'taxonomies' => array('category'),
    );
    register_post_type('our_articals', $args);
}

add_action('init', 'cash_for_apartment_post_type_our_articals');

function cash_for_apartment_post_type_our_testimonials() {

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('our_testimonials', 'plural'),
        'singular_name' => _x('our_testimonial', 'singular'),
        'menu_name' => _x('TESTIMONIALS', 'admin menu'),
        'name_admin_bar' => _x('our_testimonials', 'admin bar'),
        'add_new' => _x('Add New', 'add Our Testimonials'),
        'add_new_item' => __('Add New Our Testimonials'),
        'new_item' => __('New Our Testimonials'),
        'edit_item' => __('Edit Our Testimonials'),
        'view_item' => __('View Our Testimonials'),
        'all_items' => __('All  Testimonials'),
        'search_items' => __('Search Our Testimonials'),
        'not_found' => __('No Our Testimonials found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'our_testimonials'),
        'menu_icon' => 'dashicons-testimonial',
        'has_archive' => true,
        'hierarchical' => false,
        'taxonomies' => array('category'),
    );
    register_post_type('our_testimonials', $args);
}

add_action('init', 'cash_for_apartment_post_type_our_testimonials');

function readcsvfile() {

    $file = fopen(get_template_directory(_FILE_) . '/us_postal_codes.csv', 'r');
    if ($file) {
        @fgetcsv($file, 0, ",");

        while (($row = fgetcsv($file, 0, ",")) !== FALSE) {

            if (trim($row[1]) != '') {
                $term = term_exists($row[1], 'state');
                $state_cat = array();
                if ($term !== 0 && $term !== null) {
                    $cat_id = $term['term_id'];
                } else {

                    //$state_cat = array('cat_name' => $row[1], 'category_description' => '', 'category_nicename' => $row[2], 'taxonomy' => 'category');
                    $cat_id = wp_insert_term(
                            $row[1], // the term 
                            'state', // the taxonomy
                            array('description' => '', 'slug' => $row[2])
                    );
                }
            }

            if (!$post_id = post_exists_by_slug(sanitize_title_with_dashes($row[0]), 'city')) {



                $new_post = array(
                    'post_type' => 'city',
                    'post_title' => $row[0],
                    'post_name' => sanitize_title_with_dashes($row[0]),
                    'post_content' => 'Our We Buy Houses ' . $row[0] . ' office is actively buying homes throughout ' . $row[0] . ' and the rest of ' . $row[0],
                    'post_status' => 'publish',
                    'comment_status' => 'closed', // if you prefer
                    'ping_status' => 'closed', // if you prefer
//                    'post_category' => array($cat_id)
                );



                $post_id = wp_insert_post($new_post);

                $cat_name = get_term($cat_id, 'state');

                $term_taxonomy_ids = wp_set_post_terms($post_id, $cat_name->name, 'state');

                if (is_wp_error($term_taxonomy_ids)) {
                    'There was an error somewhere and the terms couldn\'t be set.';
                } else {
                    ' Success! The post\'s categories were set.';
                }

                $image_name = $row[0];
                $i_state = $row[2];
                $post_featured_image_name = create_image($image_name, $i_state, $post_id);


                //$filename should be the path to a file in the upload directory.
                $admin_php_path = ABSPATH . 'wp-admin/' . $post_featured_image_name;

                attach_postbg($admin_php_path, $post_id);

                update_post_meta($post_id, 'sort_content', 'Locally owned and operated, We Buy Houses ' . $row[1] . ' buys homes, condos, land, and all types of real estate, in any condition, and in any price range.');
                update_post_meta($post_id, 'city_latitude', $row[3]);
                update_post_meta($post_id, 'city_longitude', $row[4]);
                update_post_meta($post_id, 'city_zipcode', $row[5]);
            }
        }
    }

    fclose($file);
}

add_action('admin_init', 'readcsvfile');

function attach_postbg($image_url, $post_id) {

    $file = $image_url;
    $filename = basename($file);
    $upload_file = wp_upload_bits($filename, null, file_get_contents($file));
    if (!$upload_file['error']) {
        $wp_filetype = wp_check_filetype($filename, null);
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_parent' => $post_id,
            'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
            'post_content' => '',
            'post_status' => 'inherit'
        );
        // Genrate Attachment URL //

        $attachment_id = wp_insert_attachment($attachment, $upload_file['file'], $post_id);
        // Set featured image 
        // Update on 15/06/2017
        set_post_thumbnail($post_id, $attachment_id);


        if (!is_wp_error($attachment_id)) {
            require_once(ABSPATH . "wp-admin" . '/includes/image.php');
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
            wp_update_attachment_metadata($attachment_id, $attachment_data);
        }
    }
}

/**
 * post_exists_by_slug.
 *
 * @return mixed boolean false if no post exists; post ID otherwise.
 */
function post_exists_by_slug($post_slug, $post_type = 'post') {
    $args_posts = array(
        'post_type' => $post_type,
        'post_status' => 'any',
        'name' => $post_slug,
        'posts_per_page' => 1,
    );
    $loop_posts = new WP_Query($args_posts);
    if (!$loop_posts->have_posts()) {
        return false;
    } else {
        $loop_posts->the_post();
        return $loop_posts->post->ID;
    }
}

function cash_for_apartment_post_type_cities() {

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('Cities', 'plural'),
        'singular_name' => _x('city', 'singular'),
        'menu_name' => _x('Cities', 'admin menu'),
        'name_admin_bar' => _x('Cities', 'admin bar'),
        'add_new' => _x('Add New', 'add City'),
        'add_new_item' => __('Add New City'),
        'new_item' => __('New City'),
        'edit_item' => __('Edit City'),
        'view_item' => __('View City'),
        'all_items' => __('All Cities'),
        'search_items' => __('Search City'),
        'not_found' => __('No Our cities found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'city'),
        'menu_icon' => 'dashicons-art',
        'has_archive' => true,
        'hierarchical' => false
    );
    register_post_type('city', $args);
    registercitytaxsonomy();
}

function registercitytaxsonomy() {
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name' => _x('States', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('State', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('Search States', 'textdomain'),
        'popular_items' => __('Popular States', 'textdomain'),
        'all_items' => __('All States', 'textdomain'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit States', 'textdomain'),
        'update_item' => __('Update State', 'textdomain'),
        'add_new_item' => __('Add New State', 'textdomain'),
        'new_item_name' => __('New States Name', 'textdomain'),
        'separate_items_with_commas' => __('Separate states with commas', 'textdomain'),
        'add_or_remove_items' => __('Add or remove states', 'textdomain'),
        'choose_from_most_used' => __('Choose from the most used states', 'textdomain'),
        'not_found' => __('No states found.', 'textdomain'),
        'menu_name' => __('States', 'textdomain'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'state'),
    );

    register_taxonomy('state', 'city', $args);
    register_taxonomy_for_object_type('state', 'city');
}

add_action('init', 'cash_for_apartment_post_type_cities');

function create_image($image_name, $i_state, $post_id) {
//    $image_name ="amawasd" ;
//    $i_state ="as" ;
    $imgtext = $image_name . "," . $i_state;
    $imgname = $post_id . ".png";

    //Create a blank image and add some text//
    $im = imagecreatefrompng(get_template_directory_uri() . "/images/We-Buy-Apartments.png");
    $text_color = imagecolorallocate($im, 255, 255, 255);
    $font = ABSPATH . "wp-admin" . '/Raleway-Regular.ttf';
    $font_size = 20;
//    imagettftext($im, $font_size, 160, 160, $text_color, $font, $imgtext);
    imagettftext($im, $font_size, 0, 130, 175, $text_color, $font, $imgtext);
//    imagestring($im, 48, 160, 160, $imgtext, $text_color);
    /////////////////////////////////////////////////////////
    //imagettftext($im, 20, 0, 10, 20, $font);

    if (imagepng($im, $imgname)) {
        return $imgname;
    } else {
        return 'We-Buy-Apartments.png';
    }

    imagedestroy($im);
    wp_die();
}

//add_shortcode('create_image', 'create_image');
function generate_cat_image($imgname) {
       
   
    $imgn = $imgname . ".png";

    //Create a blank image and add some text//
    $im = imagecreatefrompng(get_template_directory_uri() . "/images/We-Buy-Apartments.png");
    $text_color = imagecolorallocate($im, 255, 255, 255);
    $font = ABSPATH . "wp-admin" . '/Raleway-Regular.ttf';
    $font_size = 20;
//    imagettftext($im, $font_size, 160, 160, $text_color, $font, $imgtext);
    imagettftext($im, $font_size, 0, 130, 175, $text_color, $font, $imgn);
//    imagestring($im, 48, 160, 160, $imgtext, $text_color);
    /////////////////////////////////////////////////////////
    //imagettftext($im, 20, 0, 10, 20, $font);

    if (imagepng($im, $imgn)) {
         $imgn;
    } else {
        return 'We-Buy-Apartments.png';
    }

    imagedestroy($im);
    //wp_die();
}

//add_shortcode('create_image','generate_cat_image');