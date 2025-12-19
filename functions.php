<?php
/**
 * Kibaran Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package kibaran
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* Theme version */
if ( ! defined( 'KIBARAN_VERSION' ) ) {
    define( 'KIBARAN_VERSION', '2.7.8' );
}

/* Core files */
require get_template_directory() . '/inc/index.php';
require_once get_template_directory() . '/inc/core.php';

/* Theme supports */
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );
add_theme_support( 'post-formats', array( 'video' ) );
add_theme_support( 'automatic-feed-links' );

/* Hide admin bar for non-admins */
if ( ! current_user_can( 'administrator' ) ) {
    show_admin_bar( false );
}

/* Image sizes */
add_image_size( 'foto-sedang', 500, 280, true );
add_image_size( 'foto-samping', 350, 204, true );
add_image_size( 'foto-headline-mobile', 272, 153, true );
add_image_size( 'foto-samping-kecil', 85, 85, true );
add_image_size( 'foto-besar', 750, 420, true );
add_image_size( 'single-foto', 664, 9999, false );
add_image_size( 'page-foto', 990, 9999, false );
add_image_size( 'foto-related-post', 205, 160, true );
add_image_size( 'foto-slide-besar', 650, 360, true );
add_image_size( 'foto-slide-medium', 321, 240, true );
add_image_size( 'foto-slide-mobile', 480, 480, true );
add_image_size( 'foto-slide-mobile-ok', 410, 410, true );
add_image_size( 'foto-headline-category', 320, 450, true );
add_image_size( 'foto-headline-category-kecil', 12, 17, true );
add_image_size( 'foto-headline-indozone', 370, 280, true );
add_image_size( 'foto-headline-indozone-thumb', 55, 55, true );
add_image_size( 'foto-custom-homepage-mobile', 105, 105, true );
add_image_size( 'foto-fb-share', 600, 315, true );

/* TGM Plugin Activation */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'kibaran_register_required_plugins' );
function kibaran_register_required_plugins() {

    $plugins = array(
        array(
            'name'     => 'Classic Editor',
            'slug'     => 'classic-editor',
            'required' => true,
        ),
        array(
            'name'     => 'Classic Widgets',
            'slug'     => 'classic-widgets',
            'required' => true,
        ),
        array(
            'name'     => 'Lightbox with PhotoSwipe',
            'slug'     => 'lightbox-photoswipe',
            'required' => true,
        ),
        array(
            'name'     => 'OTF Regenerate Thumbnails',
            'slug'     => 'otf-regenerate-thumbnails',
            'required' => true,
        ),
        array(
            'name'     => 'Social comments by WpDevArt',
            'slug'     => 'comments-from-facebook',
            'required' => true,
        ),
        array(
            'name'     => 'One Click Demo Import',
            'slug'     => 'one-click-demo-import',
            'required' => true,
        ),
        array(
            'name'     => 'Video Thumbnails',
            'slug'     => 'video-thumbnails',
            'source'   => get_template_directory_uri() . '/plugins/video-thumbnails.zip',
            'required' => true,
        ),
        array(
            'name'     => 'Open Graph Image Overlay',
            'slug'     => 'open-graph-image-overlay',
            'source'   => get_template_directory_uri() . '/plugins/open-graph-image-overlay.zip',
            'required' => true,
        ),
        array(
            'name'     => 'WordPress Popular Posts',
            'slug'     => 'wordpress-popular-posts',
            'source'   => get_template_directory_uri() . '/plugins/wordpress-popular-posts.zip',
            'required' => true,
        ),
        array(
            'name'     => 'Yoast SEO',
            'slug'     => 'wordpress-seo',
            'required' => true,
        ),
    );

    $config = array(
        'id'           => 'kibaran',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );

    tgmpa( $plugins, $config );
}

/* Redirect after theme activation (PHP 8.2 safe) */
add_action( 'admin_init', function () {
    global $pagenow;
    if ( is_admin() && isset( $_GET['activated'] ) && $pagenow === 'themes.php' ) {
        wp_redirect( admin_url( 'admin.php?page=kibaran_license' ) );
        exit;
    }
});

/* Demo importer */
if ( class_exists( 'OCDI_Plugin' ) ) {
    require get_template_directory() . '/inc/importer.php';
}

/* Language */
load_theme_textdomain( 'kibaran', get_template_directory() . '/languages' );

/* Theme update checker */
if ( is_admin() ) {
    require get_template_directory() . '/inc/class-theme-update-checker.php';
}

/* Font Awesome */
function kibaran_enqueue_font_awesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
        array(),
        '6.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'kibaran_enqueue_font_awesome' );
