<?php

	/** ---------------------------------------------------------------------------
	 *
	 *	Leya
	 *	MySQL / PHP API
	 * 	https://github.com/kevgk/leya
	 *
	 * ---------------------------------------------------------------------------*/

	/**
	 * Basic configuration
	 * - SERVER: 	Your mysql-server, in many cases this is localhost
	 * - USER: 		Your database user
	 * - PASSWORD: Your database password
	 * - DATABASE: The mysql database you want to use
	 *
	 * - FIELD_LENGTH: The length of a field, when you create a new column
	 * - MAIL_SENDER:  The email-address you want to display, when you send emails via the api
	 * - SHOW_AUTH_ERROR: Show unauthorized users an error or nothing (404)
	 * - ALLOW_UNAUTHENTICATED: Allow access without a key, while using keys.
	 */

	define("SERVER", "localhost");
	define("USER", "root");
	define("PASSWORD", "");
	define("DATABASE", "test");
	define("FIELD_LENGTH", 64);
	define("MAIL_SENDER", "example@yourserver.de");
	define("SHOW_AUTH_ERROR", true);
	define("ALLOW_UNAUTHENTICATED", false);

	/**
	 * Test Mode is only meant for contributors while developing the api and should always be disabled (set to false),
	 * since it disables all privilege checks.
	 */

	define("TEST_MODE", false);

	/**
	 * Api keys
	 * You can add multiple keys, for example for different users.
	 * This helps to protect the api from unauthorized access.
	 * If you don't want to use keys, just leave the variable empty.
	 * For now, keys should only contain letters and numbers.
	 *
	 * Example for one user:
	 * $keys = [
	 * 	'your-key-in-here'
	 * ];
	 *
	 * Example for multiple users:
	 * $keys = [
	 * 	'your-first-key-in-here',
	 * 	'your-second-key-here
	 * ];
	 *
	 * You can also assign individual permissions to keys, for example to give only one user,
	 * the permission to write to the database.
	 *
	 * $keys = [
	 *	'329472386945f324' => [
	 *		'write' => true,
	 *		'delete_row' => true
	 *	]
	 * ];
	 *
	 * By default, when you use a key, all access without a key gets blocked.
	 * You can disable this by settings ALLOW_UNAUTHENTICATED to true.
	 * Now every user gets the overall permissions, but you can still overwrite some for specific keys.
	 */

	$keys = [

	];



	/**
	 * Permissions
	 */

	$rights = array(
		// Database
		"get" => true,
		"getWhere" => true,
		"set" => true,
		"create_row" => true,
		"delete_row" => false,
		"create_table" => false,
		"delete_table" => false,
		"list_columns" => true,
		"list_rows" => true,
		"table_exist" => true,
		"delete_column" => false,
		"add_column" => true,
		"rename_column" => false,
		"row_exist" => true,
		"exec" => false,
		"compare" => true,
		"count_rows" => true,
		"check_table" => true,
		// File
		"file_write" => false,
		"file_read" => true,
		"file_delete" => false,
		"file_rename" => false,
		"file_copy" => false,
		"file_size" => true,
		"file_exists" => true,
		// Misc
		"mail" => false,
		"hash" => true,
		"generate_key" => false
	);
?>
