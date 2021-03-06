<?php
// Environment specific configuration
// Changed manually after cloning or automatically by a deployment toolkit or similar
define('WP_CONTENT_DIR', realpath($_SERVER['DOCUMENT_ROOT'] . '/content'));
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content');

$table_prefix  = 'wt_'; // Table prefix, change to project-key (initals of 'working title' e.g. 'wt')

define('WP_ENVIRONMENT', '%WP_ENVIRONMENT'); // Should be one of "development", "integration", "stage" or "production"
define('DB_NAME', '%DB_NAME');
define('DB_USER', '%DB_USER');
define('DB_PASSWORD', '%DB_PASSWORD');
define('DB_HOST', '%DB_HOST');

define('WP_SITEURL','%WP_SITEURL'); // Where the wordpress system files live in
define('WP_HOME','%WP_HOMEURL'); // Where your homepage is at

// Disable the post revision feature
define('WP_POST_REVISIONS', false);

// Empty trash every 7 days
define('EMPTY_TRASH_DAYS', 7);

// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// You almost certainly do not want to change these
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Language, eave blank for American English
define( 'WPLANG', '' );

// Load a Memcached config if we have one
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// Enable environment specific features like debugging or authentication
switch (WP_ENVIRONMENT) {
	case 'development':
		define('WP_DEBUG', true);
		ini_set('display_errors', E_ALL);
		define('WP_DEBUG_DISPLAY', false);
		break;
	
	case 'integration':
		define('WP_DEBUG', true);
		ini_set('display_errors', E_ALL);
		define('WP_DEBUG_DISPLAY', false);
		break;

	case 'stage':
		// enable http basic authentication
		break;

	case 'production':
		break;
}

// Bootstrap WordPress
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
