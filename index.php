<?php

	$db_info;

	include_once('resources/php/settings.php');

	try {

		//! Public read-only user
		@ $link = mysqli_connect('localhost', 'SNIP-Template_usr_read', '5P55pg0^j', 'SNIP-Template');
		//! Localhost only with full access (.gitignore)
		// @ $link = mysqli_connect($db_link, $db_user, $db_pass, $db_name);

		$db_info['status'] = 'OK';
		$db_info['message'] = 'Database connection is working.';

		//TODO include functions
		echo 1;

	} catch (mysqli_sql_exception $error) {

		$db_info['status'] = 'FAIL';
		$db_info['message'] = 'Database connection not available, see the errors for more information.';
		$db_info['error_num'] = mysqli_connect_errno();
		$db_info['error_msg'] = mysqli_connect_error();

		//TODO show maintenance page
		echo 2;

	}

	// Run everything else when the database connection is working
	if ($db_info['status'] == 'OK') {

		// ...

	}

?>