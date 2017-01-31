<?php
/**
 * @package Wordpress Blog Page
 * @version 1.6
 */
/*
Plugin Name: Wordpress Blog Page
Plugin URI: http://nowbotica.com/wordpress-blog-page/
Description: Provides a customised blog area.
Author: Andrew MacKay
Version: 1.6
Author URI: http://nowbotica.com/
*/

/**
 * Locate template.
 *
 * Locate the called template.
 * Search Order:
 * 1. /themes/theme/ot-templates/$template_name
 * 2. /themes/theme/$template_name
 * 3. /plugins/ot-template/templates/$template_name.
 *
 * @since 1.0.0
 *
 * @param 	string 	$template_name			Template to load.
 * @param 	string 	$string $template_path	Path to templates.
 * @param 	string	$default_path			Default path to template files.
 * @return 	string 							Path to the template file.
 */
// function wcpt_locate_template( $template_name, $template_path = '', $default_path = '' ) {
// 	// Set variable to search in woocommerce-plugin-templates folder of theme.
// 	if ( ! $template_path ) :
// 		$template_path = 'ot-blog/';
// 	endif;
// 	// Set default plugin templates path.
// 	if ( ! $default_path ) :
// 		$default_path = plugin_dir_path( __FILE__ ) . 'templates/'; // Path to the template folder
// 	endif;
// 	// Search template file in theme folder.
// 	$template = locate_template( array(
// 		$template_path . $template_name,
// 		$template_name
// 	) );
// 	// Get plugins template file.
// 	if ( ! $template ) :
// 		$template = $default_path . $template_name;
// 	endif;
// 	return apply_filters( 'wcpt_locate_template', $template, $template_name, $template_path, $default_path );
// }
/**
 * Get template.
 *
 * Search for the template and include the file.
 *
 * @since 1.0.0
 *
 * @see wcpt_locate_template()
 *
 * @param string 	$template_name			Template to load.
 * @param array 	$args					Args passed for the template file.
 * @param string 	$string $template_path	Path to templates.
 * @param string	$default_path			Default path to template files.
 */
// function wcpt_get_template( $template_name, $args = array(), $tempate_path = '', $default_path = '' ) {
// 	if ( is_array( $args ) && isset( $args ) ) :
// 		extract( $args );
// 	endif;
// 	$template_file = wcpt_locate_template( $template_name, $tempate_path, $default_path );
// 	if ( ! file_exists( $template_file ) ) :
// 		_doing_it_wrong( __FUNCTION__, sprintf( '<code>%s</code> does not exist.', $template_file ), '1.0.0' );
// 		return;
// 	endif;
// 	include $template_file;
// }
/**
 * Redeem Gift Card.
 *
 * The redeem gift card shortcode will output the template
 * file from the templates/folder.
 *
 * @since 1.0.0
 */
// function wcpt_gift_card_shortcode() {
// 	return wcpt_get_template( 'redeem-gift-card.php' );
// }
// add_shortcode( 'redeem_gift_card', 'wcpt_gift_card_shortcode' );

/**
 * Template loader.
 *
 * The template loader will check if WP is loading a template
 * for a specific Post Type and will try to load the template
 * from out 'templates' directory.
 *
 * @since 1.0.0
 *
 * @param	string	$template	Template file that is being loaded.
 * @return	string				Template file that should be loaded.
 */
// function wcpt_template_loader( $template ) {
// 	$find = array();
// 	$file = '';
// 	if ( is_singular( 'post' ) ) :
// 		$file = 'post-override.php';
// 	elseif ( is_singular( 'page' ) ) :
// 		$file = 'page-override.php';
// 	endif;
// 	if ( file_exists( wcpt_locate_template( $file ) ) ) :
// 		$template = wcpt_locate_template( $file );
// 	endif;
// 	return $template;
// }
// add_filter( 'template_include', 'wcpt_template_loader' );


include_once('includes/settings-page.php');
/* ----
Get template from current plugin dir 
-----*/
add_filter( 'template_include', 'wpa3396_page_template' );
function wpa3396_page_template( $page_template )
{
    // if ( is_page( 'my-custom-page-slug' ) ) {}
    if(is_home() && !is_front_page()) { // blog
        $opts = get_option( 'snwb_settings' );
        if( $opts['snwb_show_blog_landing_page_checkbox'] ){
            $page_template = dirname( __FILE__ ) . '/templates/blog-homepage.php';
        }
        else {
            $page_template = dirname( __FILE__ ) . '/templates/archive.php';
        }
    }
    elseif ( is_archive() ) {
        $page_template = dirname( __FILE__ ) . '/templates/archive.php';
    }
    elseif ( is_author() ) {
        $page_template = dirname( __FILE__ ) . '/templates/archive.php';
    } 
    elseif ( is_category() ){
        $page_template = dirname( __FILE__ ) . '/templates/archive.php';
    }
    elseif ( is_single() ) {
        $page_template = dirname( __FILE__ ) . '/templates/single.php';
    }
    elseif ( 'post' == get_post_type() ) {
    	$page_template = dirname( __FILE__ ) . '/templates/single.php';
    } 
    return $page_template;
}

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style('ot-blog-styles', plugin_dir_url( __FILE__ ) . 'ot-blog.css' );
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


/**
 * Sets custom template if blog is not homepage
 */
// function ot_blog_page_template( $template ) {
// 	if(is_home() && !is_front_page()): // blog
//         $opts = get_option( 'snwb_settings' );
//         if( $opts['snwb_show_blog_landing_page_checkbox'] ){
// 		  $new_template = dirname( __FILE__ ) . '/templates/blog-homepage.php';
//         }
// 		if ( '' != $new_template ) {
// 			return $new_template ;
// 		}
// 	endif;

// 	return $template;
// }
// add_filter( 'template_include', 'ot_blog_page_template', 99 );


add_image_size('blog-image-12', 945, 531, true);
add_image_size('blog-img-6', 576, 326, true);
add_image_size('blog-img-4', 295, 166, true);



// add_image_size('blog-slide-full', 1170);


// So lets assume you are using a simple custom loop on your site:
/*
<?php $additional_loop = new WP_Query("cat=1,2,3&paged=$paged"); ?>
<?php while ($additional_loop->have_posts()) : $additional_loop->the_post(); ?>
// <!-- Show loop content... -->
<?php endwhile; ?>
*/
//You could then call the pagination function that way:
/*
kriesi_pagination($additional_loop->max_num_pages);
*/


// /**
//  * This example will work at least on WordPress 2.6.3, 
//  * but maybe on older versions too.
//  */
// add_action( 'admin_init', 'wpdocs_plugin_admin_init' );
// add_action( 'admin_menu', 'wpdocs_plugin_admin_menu' );
    
// /**
//  * Register our stylesheet.
//  */
// function wpdocs_plugin_admin_init() {
//     wp_register_style( 'wpdocsPluginStylesheet', plugins_url( 'stylesheet.css', __FILE__ ) );
// }
 
// /**
//  * Register our plugin page and hook stylesheet loading.
//  */
// function wpdocs_plugin_admin_menu() {
//     $page = add_submenu_page( 'edit.php', 
//         __( 'Wpdocs Plugin', 'textdomain' ), 
//         __( 'Wpdocs Plugin', 'textdomain' ),
//         'administrator',
//         __FILE__, 
//         'wpdocs_plugin_manage_menu' );
   
//     add_action( "admin_print_styles-{$page}", 'wpdocs_plugin_admin_styles' );
// }
 
// /**
//  * Enqueue our stylesheet.
//  */
// function wpdocs_plugin_admin_styles() {
//     wp_enqueue_style( 'wpdocsPluginStylesheet' );
// }
 
// /**
//  * Output our admin page.
//  */
// function wpdocs_plugin_manage_menu() {
//      // ...
// }