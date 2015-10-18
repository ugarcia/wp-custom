<!DOCTYPE html>
<html class="ct-html v-fit-force no-admin-bar">

<head>

	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body class="ct-body no-margin v-fit-force">

	<div class="ct-outer-container h-fit v-fit ct-flex col edged fill">

		<header class="ct-header ct-flex row edged middle wrap shadow-bottom">

			<h1 class="ct-logo no-margin padding ct-flex-item center">
				<img src="<?php print CUSTOM_THEME_IMAGES_PATH; ?>/fc32.png" alt="<?php bloginfo('name'); ?>" />
			</h1>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-nav-menu',
						'container' => 'nav',
						'container_class' => 'ct-nav ct-flex-item center fit',
						'menu_class' => 'ct-nav-list ct-flex row left middle fill wrap no-margin padding-h-1'
					)
				);
			?>

			<div class="ct-flex-item center padding-h-1">
				<?php get_search_form(); ?>
			</div>

		</header>