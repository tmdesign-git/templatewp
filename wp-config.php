<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
if (!defined('WP_CONTENT_URL')) define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '-Smodhn=-/l~{S$`eFXVac7Gb&L ,*&$v%m0vkBP6vv=HaXKk*BBEEI[;x3-c-&k');
define('SECURE_AUTH_KEY',  '6d3O><yIL@,wc-QkiO4$M~cqm@2X?F(prPj7-J6kZ|xK8ww;xhe8Y_b~Y&c1+b+y');
define('LOGGED_IN_KEY',    '[QZ.<LSut2m3*Q<2-8i2+$;[rI-K87Pq^D>`TE*eP0!P6a}gMlJrp(&cQ2Ewi*zR');
define('NONCE_KEY',        '6(}.-X-x3lixQ]R%Z;d.*z`^@hcb[40|P*O4Ha:@Gw *[EqM|2Qd+0+lwL4rO3/9');
define('AUTH_SALT',        ' Eh5fG!Kl*62X_]:SB8dW;K+qmS!54lP2 /2s)~)vm_~E#}4;lPZ]+2Po}grTkn;');
define('SECURE_AUTH_SALT', '|{yc%b-a=k&ZWei(Jc)gcf|5>,2nUzS8}Yev %UpUkr=|4!PC]~/r;`v~}->Lasm');
define('LOGGED_IN_SALT',   'jgwRU-mzn-w3wU]IQ?E}t+V0U2NWS_hI|xb7ycONVoXn(B_;*+#?Zv4;<GAR:B?Q');
define('NONCE_SALT',       '~]=-fKOo884yH#)3CE]GLW_3iPbd6j.iK*{_~_-cv22(x4qGmj_rH0*b4j2Tei$p');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', 'fr_FR' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
