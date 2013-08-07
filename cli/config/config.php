<?php
// Establish database connection
// Get configuration from ../wp-config.php
$path_info = pathinfo( __FILE__ );

// Change working directory to this file's parent
chdir( $path_info['dirname'] );

// Get projects root
$root_path = realpath( './../../' ) . '/';

// Set path of this file's parent
$path_to_dump = $root_path . 'db/';

// Load wp config
$wp_config = file( $root_path . 'wp-config.php' );

// Get configuration
$db_name_tmp = explode("'", $wp_config[33]);
$db_name = $db_name_tmp[3];

$db_user_tmp = explode("'", $wp_config[34]);
$db_user = $db_user_tmp[3];

$db_password_tmp = explode("'", $wp_config[35]);
$db_password = $db_password_tmp[3];

$db_host_tmp = explode("'", $wp_config[36]);
$db_host = $db_host_tmp[3];

$db_table_prefix_tmp = explode("'", $wp_config[21]);
$db_table_prefix = $db_table_prefix_tmp[1];

// Define constants
define('DB_NAME', $db_name);
define('DB_USER', $db_user);
define('DB_PASSWORD', $db_password);
define('DB_HOST', $db_host);
define('DB_TABLE_PREFIX', $db_table_prefix);
define('DIR_DUMPS', $path_to_dump);
