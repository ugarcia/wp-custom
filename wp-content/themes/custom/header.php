<!DOCTYPE html>
<html>

<head>

	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body>

	<div class="ct-outer-container ct-flex col edged fill">

		<header class="ct-header ct-flex row edged middle">

			<h1 class="ct-logo">
				<img src="<?php print CUSTOM_THEME_IMAGES_PATH; ?>/logo.png" alt="<?php bloginfo('name'); ?>" />
			</h1>

			<?php get_search_form(); ?>

			<?php
				wp_nav_menu(
					array(
						'menu' => 'Main',
						'container' => 'nav'
					)
				);
			?>

		</header>