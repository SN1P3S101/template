<!DOCTYPE html>
<html lang="<?php echo $setting_language; ?>">
	<head>
		<title><?php if ($data[0] == 'empty') { echo 'Home' . $setting_title; } else { echo ucfirst($data[0]) . $setting_title; } ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php

			if ($setting_bootstrap == true) {

				//TODO: Install Bootstrap and add link

			}

			if ($setting_css == true) {

				if ($setting_css_minified == false) {

					echo '<link rel="stylesheet" href="resources/css/style.css">';

				} else {

					echo '<link rel="stylesheet" href="resources/css/style.min.css">';

				}

			}

			if ($setting_robots == true) {

				echo '<meta name="robots" content="index,follow">';

			}

			if ($setting_favicon == true) {

				echo '<link rel="icon" href="resources/media/favicon.png">';

			}

			if ($setting_themecolor == true) {

				echo '<meta name="theme-color" content="' . $setting_themecolor . '">';

			}



			// Primary Meta Tags
			if ($setting_meta == true) {

				echo '<meta name="title" content="' . $setting_meta_title . '">';
				echo '<meta name="description" content="' . $setting_meta_description . '">';
				
				if ($setting_facebook == true) {

					echo '<meta property="og:type" content="website">';
					echo '<meta property="og:url" content="' . $_SERVER['SERVER_NAME'] . '">';
					echo '<meta property="og:title" content="' . $setting_meta_title . '">';
					echo '<meta property="og:description" content="' . $setting_meta_description . '">';

					if ($setting_meta_image == true) {

						echo 'meta property="og:image" content="resources/media/metaimage.png">';

					}

				}
				
				if ($setting_twitter == true) {

					echo '<meta property="twitter:card" content="summary_large_image">';
					echo '<meta property="twitter:url" content="' . $_SERVER['SERVER_NAME'] . '">';
					echo '<meta property="twitter:title" content="' . $setting_meta_title . '">';
					echo '<meta property="twitter:description" content="' . $setting_meta_description . '">';

					if ($setting_meta_image == true) {

						echo '<meta property="twitter:image" content="resources/media/metaimage.png">';

					}

				}

			}
		?>
	</head>
	<body>