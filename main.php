<?php
/*Plugin Name: bS5 Cookie Consent
Plugin URI: https://bootscore.me/plugins/bs-cookie-consent/
Description: This plugin adds a cookie bar to bootScore 5
Version: 5.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/


// Register Styles and Scripts
function bs_cookie_consent_scripts() {

    wp_enqueue_script( 'cookie-js', plugins_url( '/js/cookie.js', __FILE__ ));
    
    wp_enqueue_script( 'cookie-init', plugins_url( '/js/cookie-init.js', __FILE__ ));
    
    wp_register_style( 'cookie-consent-css', plugins_url('/css/cookie-consent.css', __FILE__) );
        wp_enqueue_style( 'cookie-consent-css' );
        
        }
    
add_action('wp_enqueue_scripts','bs_cookie_consent_scripts');



function bs_footer_gdpr_box() {

    ?>

<div id="gdpr-box" class="cookies-accept bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-10 text-center text-md-start">
                <div class="d-flex align-items-center h-100">
                    <p class="mb-md-0"><?php esc_html_e('Cookies help us deliver our services. By using our services, you agree to our use of cookies.', 'bootscore'); ?>&nbsp;<a href="<?php echo get_home_url(); ?><?php esc_html_e('/privacy-policy', 'bootscore'); ?>" class="privacylink"><?php esc_html_e('More Information', 'bootscore'); ?></a></p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-flex align-items-center justify-content-center justify-content-md-end h-100">
                    <button class="gdpr-button-accept btn btn-primary"><?php esc_html_e('Accept', 'bootscore'); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

}

add_action('wp_footer', 'bs_footer_gdpr_box');
