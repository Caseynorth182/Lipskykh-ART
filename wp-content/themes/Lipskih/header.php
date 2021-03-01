<!DOCTYPE html>
<html lang="en">
<head>
	<title>Slider Fade</title>
	<meta charset="utf-8">
	<meta name="description" content="Creative Portfolio HTML Template">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&display=swap" rel="stylesheet">

	<?php wp_head();?>
</head>
<body data-theme="dark">
<header class="main-header js-main-header auto-hide-header full-slider">
	<div class="main-header__layout">
		<div class="main-header__logo main-header__logo--text">
			<?php /*the_custom_logo();*/?>
			<a href=""></a>
			Lipskhyh ART
		</div>
		<button class="btn btn--subtle main-header__nav-trigger js-main-header__nav-trigger" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-header-nav"><i class="main-header__nav-trigger-icon" aria-hidden="true"></i><span>Меню</span></button>
		<nav class="main-header__nav js-main-header__nav" id="main-header-nav" aria-labelledby="primary-menu">
			<?php
            wp_nav_menu( [
                'theme_location'  => 'menu_header',
                'menu_class'      => 'dropdown__wrapper dropdown__trigger',
                'menu_id'         => 'primary-menu',
                'echo'            => true,
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] );
			?>

		</nav>
	</div>
</header>