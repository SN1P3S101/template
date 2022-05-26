<?php

	include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/php/database.php');
	include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/php/variables.php');
	include_once ($_SERVER['DOCUMENT_ROOT'] . '/pages/admin/includes/_header.php');

	if (isset ($data[1])) {

		if ($data[1] == 'dashboard') {

			include_once ($_SERVER['DOCUMENT_ROOT'] . '/pages/admin/dashboard.php');
	
		}
	
		if ($data[1] == 'settings') {

			include_once ($_SERVER['DOCUMENT_ROOT'] . '/pages/admin/settings.php');
	
		}

	} else {

		include_once ($_SERVER['DOCUMENT_ROOT'] . '/pages/admin/overview.php');

	}
	
	include_once ($_SERVER['DOCUMENT_ROOT'] . '/pages/admin/includes/_footer.php');


?>