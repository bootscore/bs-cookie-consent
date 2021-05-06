<?php
/*Plugin Name: bS5 Cookie Consent
Plugin URI: https://bootscore.me/plugins/bs-cookie-consent/
Description: This plugin adds a cookie bar to bootScore 5
Version: 5.0.0.4
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/


// Register Styles and Scripts
function bs_cookie_consent_scripts() {

    //wp_enqueue_script( 'cookie-js', plugins_url( '/js/cookie.js', __FILE__ ));
    
    wp_enqueue_script( 'cookie-js', plugins_url( '/js/cookie.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
    
    wp_register_style( 'cookie-consent-css', plugins_url('/css/cookie-consent.css', __FILE__) );
        wp_enqueue_style( 'cookie-consent-css' );
        
        }
    
add_action('wp_enqueue_scripts','bs_cookie_consent_scripts');





/**
 * Locate template.
 *
 * Locate the called template.
 * Search Order:
 * 1. /themes/theme/bs5-cookie-consent/$template_name
 * 2. /themes/theme/$template_name
 * 3. /plugins/bs5-cookie-consent/templates/$template_name.
 *
 * @since 1.0.0
 *
 * @param 	string 	$template_name			Template to load.
 * @param 	string 	$string $template_path	Path to templates.
 * @param 	string	$default_path			Default path to template files.
 * @return 	string 							Path to the template file.
 */
function bs_cookie_consent_locate_template( $template_name, $template_path = '', $default_path = '' ) {

	// Set variable to search in bs5-cookie-consent folder of theme.
	if ( ! $template_path ) :
		$template_path = 'bs5-cookie-consent/';
	endif;

	// Set default plugin templates path.
	if ( ! $default_path ) :
		$default_path = plugin_dir_path( __FILE__ ) . 'templates/'; // Path to the template folder
	endif;

	// Search template file in theme folder.
	$template = locate_template( array(
		$template_path . $template_name,
		$template_name
	) );

	// Get plugins template file.
	if ( ! $template ) :
		$template = $default_path . $template_name;
	endif;

	return apply_filters( 'bs_cookie_consent_locate_template', $template, $template_name, $template_path, $default_path );

}



/**
 * Get template.
 *
 * Search for the template and include the file.
 *
 * @since 1.0.0
 *
 * @see bs_cookie_consent_locate_template()
 *
 * @param string 	$template_name			Template to load.
 * @param array 	$args					Args passed for the template file.
 * @param string 	$string $template_path	Path to templates.
 * @param string	$default_path			Default path to template files.
 */
function bs_cookie_consent_get_template( $template_name, $args = array(), $tempate_path = '', $default_path = '' ) {

	if ( is_array( $args ) && isset( $args ) ) :
		extract( $args );
	endif;

	$template_file = bs_cookie_consent_locate_template( $template_name, $tempate_path, $default_path );

	if ( ! file_exists( $template_file ) ) :
		_doing_it_wrong( __FUNCTION__, sprintf( '<code>%s</code> does not exist.', $template_file ), '1.0.0' );
		return;
	endif;

	include $template_file;

}



/**
 * Cookie Consent.
 *
 * The cookie consent will output the template
 * file from the /templates.
 *
 * @since 1.0.0
 */

function bs_footer_gdpr_box() {

	return bs_cookie_consent_get_template( 'cookie-consent.php' );

}
add_action('wp_footer', 'bs_footer_gdpr_box');