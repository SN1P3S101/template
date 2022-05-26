<?php

	$data;

	include_once ('resources/php/settings.php');

	include_once ('resources/php/database.php');

	include_once ('resources/php/variables.php');

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