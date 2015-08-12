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
?>