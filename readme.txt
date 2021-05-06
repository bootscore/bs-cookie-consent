=== bS5 Cookie Consent ===

Contributors: craftwerk

Requires at least: 4.5
Tested up to: 5.7.1
Requires PHP: 5.6
Stable tag: 5.0.0.4
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Cookie Consent by Klaus Hartl, MIT License https://github.com/js-cookie/js-cookie Plugin for WordPress, Copyright 2021 Bastian Kreiter.

== License & Credits ==

Cookie Consent Script by Klaus Hartl, MIT License https://github.com/js-cookie/js-cookie

== Documentation ==

https://bootscore.me/documentation/bs-cookie-consent/


== Installation ==

1. In your admin panel, go to Plugins > and click the Add New button.
2. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
3. Click Activate to use your new Plugin right away.


== Usage ==

Read documentation https://bootscore.me/documentation/bs-cookie-consent/

The "More Information" links to the default WordPress privacy policy. Set privacy policy from draft to published.
Translate text and link target with Loco Translate direct in bootScore theme. 
Override plugin template by creating a folder your-theme/bs5-cookie-consent and paste a copy of cookie-consent.php in plugin folder templates.



== Changelog ==

    = 5.0.0.4 - May 06 2021 =
    
        * [BUGFIX] Changed class zi-1040 to zi-1050 to overlap offcanvas in Bootstrap 5.0.0

    = 5.0.0.3 - March 08 2021 =
    
        * [IMPROVEMENT] Uses zi-1040 class of parent theme instead of own CSS (needs at least bootScore 5.0.0.5)

    = 5.0.0.2 - March 05 2021 =
    
        * [IMPROVEMENT] Removed unused CSS
        * [IMPROVEMENT] Using Bootstrap positioning classes instead of own CSS

    = 5.0.0.1 - February 16 2021 =
    
        * [SEO] Load JS in footer
        * [SEO] Merged cookie.js and cookie-init.js to one file to reduce HTTP requests
        * [NEW] Override template in child-theme 

    = 5.0.0.0 - December 30 2020 =
    
        * Initial release