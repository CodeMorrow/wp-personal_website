<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Droid+Sans|Monda:700" rel="stylesheet">

		<title><?php bloginfo('name'); ?></title>

		<?php wp_head(); ?>
	</head>
<body class="body" <?php body_class(); ?>>

<!-- site-header -->
	<header class="header">
		<h1 class="header__title"><?php bloginfo('name'); ?></h1>
	</header>
	<nav class="nav">
			<?php wp_list_pages('&title_li='); ?>
		</nav>

<div id=flexbox1>