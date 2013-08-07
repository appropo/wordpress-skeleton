<?php
// Get configuration
require_once("cli/config/config.php");

// Load libs
require_once("cli/lib/wpcli.php");
require_once("cli/lib/io.php");

// Initialize wpcli
$io = new Io();

$config = array(
	'db_name' => DB_NAME,
	'db_user' => DB_USER,
	'db_password' => DB_PASSWORD,
	'db_host' => DB_HOST
);
$wpcli = new Wpcli( $config );

// Read arguments
if ( isset( $argv[1] ) ) {

	switch ( $argv[1] ) {
		case 'migrate':
			$wpcli->migrate();
			break;

		case 'seed':
			// Check arguments
			if ( !isset($argv[2]) || !in_array($argv[2], array('config', 'ugd', 'users')) ) {
				$io->print_usage();
				exit;
			}

			// Seed
			$wpcli->seed( $argv[2] );
			break;

		case 'dump':
			// Check arguments
			if ( isset($argv[2]) && !in_array($argv[2], array('schema', 'config', 'ugd', 'users', 'all')) ) {
				$io->print_usage();
				exit;
			}

			// Dump 
			$wpcli->dump( $argv[2] );
			break;

		default:
			$io->print_usage();
			exit;
	}

} else {

	$io->print_usage();
	exit;

}