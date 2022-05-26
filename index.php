<?php

	$db_info;
	$link;
	$data;

	include_once('resources/php/settings.php');

	try {

		//! Public read-only user
		@ $link = mysqli_connect('localhost', 'SNIP-Template_usr_read', '5P55pg0^j', 'SNIP-Template');
		//! Localhost only with full access (.gitignore)
		// @ $link = mysqli_connect($db_link, $db_user, $db_pass, $db_name);

		$db_info['status'] = 'OK';
		$db_info['message'] = 'Database connection is working.';

		//TODO include functions

	} catch (mysqli_sql_exception $error) {

		$db_info['status'] = 'FAIL';
		$db_info['message'] = 'Database connection not available, see the errors for more information.';
		$db_info['error_num'] = mysqli_connect_errno();
		$db_info['error_msg'] = mysqli_connect_error();

		//TODO show maintenance page

	}

	// Run everything else when the database connection is working
	if ($db_info['status'] == 'OK') {
	
		if (!isset($_GET['data']) || empty($_GET['data'])) {

			$_GET['data'] = 'empty';
			$data[0] = 'empty';

		} else {

			$data = explode('/', $_GET['data']);

			if (empty($data[1])) {

				unset($data[1]);

			}

		}

		if ($data[0] == 'empty') {

			include_once ('pages/includes/_header.php');
			include_once ('pages/main.php');
			include_once ('pages/includes/_footer.php');

		} else if ($data[0] == 'admin') {

			include_once ('pages/admin/admin.php');

		} else {

			if (file_exists('pages/' . $data[0] . '.php')) {

				include_once ('pages/includes/_header.php');
				include_once ('pages/' . $data[0] . '.php');
				include_once ('pages/includes/_footer.php');

			} else {

				$data[0] = '404';

				include_once ('pages/includes/_header.php');
				include_once ('pages/404.php');
				include_once ('pages/includes/_footer.php');

			}

		}

	}

?>