jQuery(document).ready(function ($) {

    // Cookie consent
    jQuery('.gdpr-button-accept').click(function () {
        jQuery('#gdpr-box').fadeOut('slow');
        if (!jQuery('.cookies-accept').is()) {
            jQuery.cookie('cookiebar', 1, {
                // Add the cookie. It will remain for 12 days, change your time here
                expires: 12,
                path: '/'
            })
        }
        return !1
    });
    if (!jQuery.cookie('cookiebar') == 1) {
        jQuery('.cookies-accept').css({
            'display': 'block'
        })
    }

}); // jQuery End


