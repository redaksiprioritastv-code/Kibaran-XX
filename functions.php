<?php
/**
 * Wpberita functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kibaran
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! defined( 'KIBARAN_VERSION' ) ) {
  // Replace the version number of the theme on each release.
  define( 'KIBARAN_VERSION', '2.7.8' );
}

require 'inc/index.php';
require_once 'inc/core.php';
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );
add_theme_support( 'post-formats', array( 'video' ));
add_theme_support('automatic-feed-links');

/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(true);

// register image size
add_image_size('foto-sedang', 500, 280, true);
add_image_size('foto-samping', 350, 204, true);
add_image_size('foto-headline-mobile', 272, 153, true);
add_image_size('foto-samping-kecil', 85, 85, true);
add_image_size('foto-besar', 750, 420, true);
add_image_size('single-foto', 664, 9999, false );
add_image_size('page-foto', 990, 9999, false );
add_image_size('foto-related-post', 205, 160, true);
add_image_size('foto-slide-besar', 650, 360, true);
add_image_size('foto-slide-medium', 321.4, 240, true);
add_image_size('foto-slide-mobile', 480, 480, true);
add_image_size('foto-slide-mobile-ok', 410, 410, true);
add_image_size('foto-headline-category', 320, 450, true);
add_image_size('foto-headline-category-kecil', 12, 17, true);
add_image_size('foto-headline-indozone', 370, 280, true);
add_image_size('foto-headline-indozone-thumb', 55, 55, true);
add_image_size('foto-custom-homepage-mobile', 105, 105, true);
add_image_size('foto-fb-share', 600, 315, true);


  /**
   * Include the TGM_Plugin_Activation class.
   *
   * Depending on your implementation, you may want to change the include call:
   *
   * Parent Theme:
   * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
   *
   * Child Theme:
   * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
   *
   * Plugin:
   * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
   *
   * @since v.1.0.0
   */
  require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

  add_action( 'tgmpa_register', 'kibaran_register_required_plugins' );
  /**
   * Register the required plugins for this theme.
   *
   * In this example, we register five plugins:
   * - one included with the TGMPA library
   * - two from an external source, one from an arbitrary source, one from a GitHub repository
   * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
   *
   * The variables passed to the `tgmpa()` function should be:
   * - an array of plugin arrays;
   * - optionally a configuration array.
   * If you are not changing anything in the configuration array, you can remove the array and remove the
   * variable from the function call: `tgmpa( $plugins );`.
   * In that case, the TGMPA default settings will be used.
   *
   * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
   */
  function kibaran_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
      // Include One Click Demo Import from the WordPress Plugin Repository.
      array(
        'name'     => 'Classic Editor', // Name of the plugin.
        'slug'     => 'classic-editor', // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true, 
      ),
      // Include One Click Demo Import from the WordPress Plugin Repository.
      array(
        'name'     => 'Classic Widgets', // Name of the plugin.
        'slug'     => 'classic-widgets', // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true,
      ),
      // Include One Click Demo Import from the WordPress Plugin Repository.
      array(
        'name'     => 'Lightbox with PhotoSwipe', // Name of the plugin.
        'slug'     => 'lightbox-photoswipe', // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true,
      ),
      // Include One Click Demo Import from the WordPress Plugin Repository.
      array(
        'name'     => 'OTF Regenerate Thumbnails', // Name of the plugin.
        'slug'     => 'otf-regenerate-thumbnails', // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true,
      ),
      // Include One Click Demo Import from the WordPress Plugin Repository.
      array(
      'name'     => 'Social comments by WpDevArt', // Name of the plugin.
      'slug'     => 'comments-from-facebook', // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true,
      ),
      // Include One Click Demo Import from the WordPress Plugin Repository.
      array(
        'name'     => 'One Click Demo Import',
        'slug'     => 'one-click-demo-import',
        'required' => true,
      ),
      /*  A locally theme bundled plugin. */
      array(
        'name'     => 'Video Thumbnails', // Name of the plugin.
        'slug'     => 'video-thumbnails', // Plugin slug - the same as on WordPress.org plugin repository.
        'source'   => get_template_directory_uri() . '/plugins/video-thumbnails.zip',
        'required' => true,
      ),
      /*  A locally theme bundled plugin. */
      array(
        'name'     => 'Open Graph Image Overlay',
        'slug'     => 'open-graph-image-overlay',         // The slug has to match the extracted folder from the zip.
        'source'   => get_template_directory_uri() . '/plugins/open-graph-image-overlay.zip',
        'required' => true,
      ),
      // This is an include a plugin bundled with a theme.
      array(
        'name'     => 'WordPress Popular Posts', // Name of the plugin.
        'slug'     => 'wordpress-popular-posts', // Plugin slug - the same as on WordPress.org plugin repository.
        'source'   => get_template_directory_uri() . '/plugins/wordpress-popular-posts.zip',
        'required' => true,  
      ),
      // This is an include a plugin bundled with a theme.
      array(
        'name'     => 'Yoast SEO', // Name of the plugin.
        'slug'     => 'wordpress-seo', // Plugin slug - the same as on WordPress.org plugin repository.
        'required' => true, 
      ),
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
      'id'           => 'kibaran',              // Unique ID for hashing notices for multiple instances of TGMPA.
      'default_path' => '',                      // Default absolute path to bundled plugins.
      'menu'         => 'tgmpa-install-plugins', // Menu slug.
      'parent_slug'  => 'themes.php',            // Parent menu slug.
      'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
      'has_notices'  => true,                    // Show admin notices or not.
      'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
      'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
      'is_automatic' => true,                   // Automatically activate plugins after installation or not.
      'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
  }

/* Wellcome text */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" )
    wp_redirect( 'admin.php?page=kibaran_license');

if ( class_exists( 'OCDI_Plugin' ) ) {
    /**
     * Load One Click Demo Import
     *
     * @since v.1.0.0
     */
    require get_template_directory() . '/inc/importer.php';
}


load_theme_textdomain( 'kibaran', get_template_directory() . '/languages' );

if ( is_admin() ) {
  /**
   * Load Theme Update Checker.
   *
   * @since v.1.0.1
   */
  require get_template_directory() . '/inc/class-theme-update-checker.php';
}

function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );