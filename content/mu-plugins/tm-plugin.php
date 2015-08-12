<?php 
/**
 * Plugin Name: TM plugin
 * Plugin URI: http://tmdesign.ca
 * Description: Un plugin exceptionnel!
 * Version: 1.0.0
 * Author: TM design
 * Author URI: http://tmdesign.ca
 * Text Domain: tm_plugin
 * License: GPL2
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo plugin_dir_url( __FILE__ ) ?>img/tm-login.png);
			padding-bottom: 20px;
			width: 120px;
			height: 65px;
			background-size: 120px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return 'http://tmdesign.ca';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'TM design - Agence de design';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

add_action('admin_menu', 'my_admin_add_page');
function my_admin_add_page() {
    add_action('load-plugins.php', 'my_admin_add_help_tab');
}

function my_admin_add_help_tab () {
    $screen = get_current_screen();

    // Add my_help_tab if current screen is My Admin Page
    $screen->add_help_tab( array(
        'id'	=> 'liste_plugins',
        'title'	=> __('Liste des plugins'),
        'content'	=> '<p><ul>
        <li>Yoast SEO</li>
        <li>Google Analytics by Yoast</li>
        <li>Velvet Blues Update URLs</li>
        <li>W3 Total Cache</li>
        <li>iTheme Security</li>
        <li>Polylang</li>
        <li>BackWPup</li>
        <li>Contact Form 7</li>
        <li>Regenerate Thumbnails</li>
        </ul></p>',
    ) );
}
?>