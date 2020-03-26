<?php
/**
 * The Fly Shop functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Fly_Shop
 */

include_once 'library/gravity-forms-custom.php';
include_once 'library/duplicate-pages.php';
include_once 'library/duplicate-posts.php';
include_once 'inc/nav/pagination.php'; // Adds custom pagination for pages/posts/CPT
include_once 'inc/gutenberg.php';
include_once 'inc/author.php';
include_once 'inc/author-img/custom-author-image.php';
include_once 'inc/blog/blog-template-css.php';


if ( ! function_exists( 'the_fly_shop_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function the_fly_shop_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on The Fly Shop, use a find and replace
         * to change 'the-fly-shop' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'the-fly-shop', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails', array('post', 'page', 'travel_posts' ));

        add_image_size( 'Row-Image', 550, 364 ); // Unlimited Height Mode
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'the-fly-shop' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'the_fly_shop_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'the_fly_shop_setup' );


function mytheme_customize_register( WP_Customize_Manager $wp_customize ) {
    $wp_customize->selective_refresh->add_partial( 'the-fly-shop', array(
        'selector' => '.site-title a',
        'render_callback' => function() {
            bloginfo( 'name' );
        },
    ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_fly_shop_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'the_fly_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_fly_shop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_fly_shop_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'the-fly-shop' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'the_fly_shop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
    wp_enqueue_style( 'dashicons' );
}

function the_fly_shop_scripts() {

    //wp_enqueue_style( 'the-fly-shop-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(),
    //    '20161116', 'all' );

    wp_enqueue_style( 'the-fly-shop-btstrp-template', get_template_directory_uri() . '/assets/css/_bootstrap.css', array(), '3.3.7', 'all' );

    wp_register_style( 'dashicons-tfs', get_template_directory_uri(). '/assets/css/dashicons.min.css');
    wp_enqueue_style( 'dashicons-tfs' );
    // Must register .min styles.
    wp_register_style( 'the-fly-shop-fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.4.0', 'all' );
    wp_enqueue_style( 'the-fly-shop-fontawesome' );

    wp_register_style( 'the-fly-shop-btstrp-menu', get_template_directory_uri() . '/assets/css/bootstrap-submenu.min.css', array(), '2.0.4', 'all' );
    wp_enqueue_style( 'the-fly-shop-btstrp-menu' );

    // Stylesheets are loaded here.

    // Instafeed CSS
    wp_enqueue_style( 'the-fly-shop-instafeed-style', get_template_directory_uri() . '/assets/css/instafeed.css', array(), '20161116', 'all' );

    wp_enqueue_style( 'the-fly-shop-ie9', get_template_directory_uri() . '/assets/css/ie9.css', array(), '20161116', 'all' );

    wp_enqueue_style( 'the-fly-shop-ie8', get_template_directory_uri() . '/assets/css/ie8.css', array(), '20161116', 'all' );

    wp_enqueue_style( 'the-fly-shop-main-style', get_template_directory_uri() . '/assets/css/main.css', array(),  '20161116', 'all' );

    //wp_enqueue_style( 'the-fly-shop-btstrp-template', get_template_directory_uri() . '/assets/css/_bootstrap.css',
      //  array(), '3.3.7', 'all' );

    wp_enqueue_style( 'the-fly-shop-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '20161116', 'all' );


    wp_add_inline_style( 'the-fly-shop-custom-style', load_private_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_private_waters_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_guideservice_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_guide_service_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_schools_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_schools_hero_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_fish_camp_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_fish_camp_hero_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_staff_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_front_page_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_signature_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_signature_events_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_basic_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_travel_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_travel_destination_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_streamreport_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_default_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_archive_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_holiday_template_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', load_tfs_custom_fields_css());
    wp_add_inline_style( 'the-fly-shop-custom-style', blog_css());

    //wp_enqueue_style( 'the-fly-shop-main-style', get_template_directory_uri() . '/assets/css/main.css', array(),
    // '20161116', 'all' );

    wp_enqueue_style( 'the-fly-shop-style', get_stylesheet_uri() );

    wp_enqueue_script( 'the-fly-shop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script('cycle-plugin', get_template_directory_uri() . '/js/cycle-content.js', array(), '20190720', true );

    wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/skrollr.min.js', array(), '1.0', true);

    // Javascript - JQuery is loaded here. min.js scripts are registered before loading.
    wp_register_script( 'new-font-awesome', 'https://use.fontawesome.com/releases/v5.0.9/js/all.js', array(), '2018', true );
    wp_enqueue_script( 'new-font-awesome');

    wp_register_script( 'the-fly-shop-btstrpjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20161116', true );
    wp_enqueue_script( 'the-fly-shop-btstrpjs' );

    wp_register_script( 'the-fly-shop-scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array(), '20161116', true );
    wp_enqueue_script( 'the-fly-shop-scrollex' );

    wp_register_script( 'the-fly-shop-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'the-fly-shop-scrolly' );

    wp_register_script( 'the-fly-shop-skel', get_template_directory_uri() . '/assets/js/skel.min.js', array(), '3.0.0', true );
    wp_enqueue_script( 'the-fly-shop-skel' );

    wp_register_script( 'the-fly-shop-parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), '4.2', true );
    wp_enqueue_script( 'the-fly-shop-parallax' );

    wp_enqueue_script( 'the-fly-shop-util', get_template_directory_uri() . '/assets/js/util.js', array(), '20161116', true );

    wp_enqueue_script( 'the-fly-shop-mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '20161116', true );

    wp_enqueue_script( 'the-fly-shop-columns', get_template_directory_uri() . '/assets/js/jquery.columnizer.js', array(), '20161116', true );

    wp_enqueue_script( 'the-fly-shop-btstrp-submenu', get_template_directory_uri() . '/assets/js/bootstrap-submenu.js', array(), '20161116', true );

    // Instafeed JS
    wp_enqueue_script( 'the-fly-shop-instafeedjs', get_template_directory_uri() . '/assets/js/instafeed.js', array(), '20161116', true );

    // Instafeed JS
    wp_enqueue_script( 'the-fly-shop-instafeed-setup', get_template_directory_uri() . '/assets/js/instafeed-setup.js', array(), '20161116', true );

    wp_enqueue_script( 'the-fly-shop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '', true);

    if ( is_page_template() == 'signature-events-template.php' ) {
        wp_enqueue_script( 'modal-next-prvious', get_template_directory_uri() . '/js/modal-next-prvious.js', array(), '20180615', true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", false, null);
        wp_enqueue_script('jquery');
    }

}
add_action( 'wp_enqueue_scripts', 'the_fly_shop_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*
*	DO NOT ADD OR EDIT ABOVE THIS LINE === Custom edits go below this line
*/


/**
 * Hide the main editor on page using front-page-template.php
 * @global string $pagenow
 * @return void
 */
define('EDITOR_HIDE_PAGE_TEMPLATES', json_encode(array('page-templates/front-page-template.php')));

function hide_editor() {

    global $pagenow;
    if(!('post.php' == $pagenow)){
        return;
    }

    // Get the Post ID.
    $post_id = filter_input(INPUT_GET, 'post') ? filter_input(INPUT_GET, 'post') : filter_input(INPUT_POST, 'post_ID');
    if(!isset($post_id)) {
        return;
    }

    $template_filename = get_post_meta($post_id, '_wp_page_template', true);

    if(in_array($template_filename, json_decode(EDITOR_HIDE_PAGE_TEMPLATES))) {
        remove_post_type_support('page', 'editor');
    }

}
add_action( 'admin_init', 'hide_editor' );

function rudr_url_redirects() {
    /* in this array: old URLs=>new URLs  */
    $redirect_rules = array(
        array('old'=>'/brazil/','new'=>'/brazil.html'), // category
        array('old'=>'/contacts/','new'=>'/Contacts/'), // page
        array('old'=>'/hello-world/','new'=>'/hello-planet/'), // post
        array('old'=>'/tag/wordpress/','new'=>'/tag/WordPress/') // post tag
    );
    foreach( $redirect_rules as $rule ) :
        // if URL of request matches with the one from the array, then redirect
        if( urldecode($_SERVER['REQUEST_URI']) == $rule['old'] ) :
            wp_redirect( site_url( $rule['new'] ), 301 );
            exit();
        endif;
    endforeach;
}

add_action('template_redirect', 'rudr_url_redirects');

function rudr_rewrite_request($query){

    $request_uri = urldecode($_SERVER['REQUEST_URI']);

    /* for categories */
    if( $request_uri == '/brazil.html' )
        $query['tax_query'] = 'brazil';

    /* for pages */
    if( $request_uri == '/Contacts/' ){
        $query['pagename'] = urlencode('contacts');
        unset($query['name']);
    }

    /* for posts */
    if( $request_uri == '/hello-planet/' )
        $query['name'] = 'hello-world';

    /* for tags */
    if( $request_uri == '/tag/WordPress/' )
        $query['tag'] = 'wordpress';

    return $query;
}

add_filter( 'request', 'rudr_rewrite_request', 9999, 1 );

// Removes custom_fields option for page, paost editor
function remove_post_custom_fields() {
    $customfields = array('post', 'page', 'travel_cpt', 'guide_service', 'schools_cpt', 'adventures', 'fishcamp_cpt' );
    foreach($customfields as $customfield) {
        remove_meta_box( 'postcustom' , $customfield , 'normal' );
    }
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

// Change login logo
function tfs_login_logo_one() {
    ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(/wp-content/uploads/img/tfs-admin.png);
            padding: 0 3em 30px 3em;
            background-size: 100%;
            max-width: 100%;
        }
        #login form {
            background-color: #2b343d;

        }
        #login p label {
            color: #f5f5f5;
        }
        #loginform .user-pass-wrap label {
          color: #f5f5f5 !important;
        }
        body.login.login-action-login.wp-core-ui.locale-en-us {
            background-color: #ccc;
        }
    </style>
    <?php
} add_action( 'login_enqueue_scripts', 'tfs_login_logo_one' );

// Adds custom post types to RSS
function myfeed_request( $qv ) {
    if ( isset( $qv['feed'] ) ) {
        $qv['post_type'] = get_post_types();
    }
    return $qv;
}
add_filter( 'request', 'myfeed_request' );

// Do Short Code In Widgets
add_filter( 'widget_text', 'do_shortcode' );
