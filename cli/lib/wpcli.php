<?php
class Wpcli {

	public function migrate() {
		$cmd = 'mysql --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' < ' . DIR_DUMPS . 'schema.sql';
		return shell_exec( $cmd );
	}

	public function seed( $type ) {
		$cmd;

		switch ( $type = 'all' ) {
			case 'all':
				$cmd = 'mysql --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' < ' . DIR_DUMPS . 'timestamp-all.sql';
				break;

			case 'config':
				$cmd = 'mysql --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' < ' . DIR_DUMPS . 'config.sql';
				break;
			
			case 'ugd':
				$cmd = 'mysql --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' < ' . DIR_DUMPS . 'timestamp-ugd.sql';
				break;

			case 'users':
				$cmd = 'mysql --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' < ' . DIR_DUMPS . 'timestamp-users.sql';
				break;

			default:
				exit;
		}

		return shell_exec( $cmd );
	}

	public function dump( $type = 'all' ) {
		// Build command
		$cmd;

		switch ( $type ) {
			case 'all':
				$cmd = 'mysqldump --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' > ' . DIR_DUMPS . 'all.sql';
				break;

			case 'schema':
				$cmd = 'mysqldump --no-data --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' > ' . DIR_DUMPS . 'schema.sql';
				break;

			case 'config':
				$cmd = 'mysqldump --no-create-info --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME . ' ' . DB_TABLE_PREFIX . 'options > ' . DIR_DUMPS . 'config.sql';
				break;

			case 'ugd':
				$cmd = 'mysqldump --no-create-info --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME
				. ' ' . DB_TABLE_PREFIX .'comments '
				. ' ' . DB_TABLE_PREFIX .'commentmeta '
				. ' ' . DB_TABLE_PREFIX .'links '
				. ' ' . DB_TABLE_PREFIX .'posts '
				. ' ' . DB_TABLE_PREFIX .'postmeta '
				. ' ' . DB_TABLE_PREFIX .'term_relationships '
				. ' ' . DB_TABLE_PREFIX .'term_taxonomy '
				. ' ' . DB_TABLE_PREFIX .'terms	> ' . DIR_DUMPS . 'timestamp-ugd.sql';
				break;

			case 'users':
				$cmd = 'mysqldump --no-create-info --user=' . DB_USER . ' --password=' . DB_PASSWORD . ' -h ' . DB_HOST . ' ' . DB_NAME
				. ' ' . DB_TABLE_PREFIX . 'users '
				. ' ' . DB_TABLE_PREFIX . 'usermeta > ' . DIR_DUMPS . 'timestamp-users.sql';
				break;

			default:
				exit;
		}

		return shell_exec( $cmd );
	}

}