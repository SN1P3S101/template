<?php

	$sql = '
		SELECT
			*
		FROM
			settings
	';

	$res = mysqli_query ($link,$sql);

	if ($res && mysqli_num_rows($res) == 1) {

		$row = mysqli_fetch_assoc($res);

		foreach ($row as $k => $v) {

			$$k = $v;

		}

		unset ($row);

	}

	$setting_url = 'https://' . $_SERVER['SERVER_NAME'] . '/';
	$setting_url_short = $_SERVER['SERVER_NAME'];

?>