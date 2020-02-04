<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favikon.png">
	<?php wp_head(); ?>
</head>

<body>
    <div class="to_top" id="upstairs"></div>
	<header class="header-big">
		<div class="top-bar__wrappper">
			<div class="top-bar">
				<?php //bloginfo('url') ?>

					<a href="/" class="top-bar-logo">
						<!-- <img src="<?php //echo get_template_directory_uri() ?>/assets/img/logo-bg.png" alt="" class="logo-bg"> -->
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="" class="top-bar-logo-logo">
					</a>
					<a href="/" class="top-bar-logo_mob">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_min.png" alt="">
					</a>
					<?php wp_nav_menu( [
						'theme_location'  => 'main',
						'menu'            => '', 
						'container'       => '', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						'items_wrap'      => '<div class="top-bar-menu top-bar-menu-active">%3$s</div>',
						'depth'           => 0,
						'walker'          => '',
					] ); ?>
				<div class="top-bar-social">
					<?php include_once ('assets/social_icons.php')?>
					<!-- <a id="burger" class=""><span></span></a> -->
					<input type="checkbox" id="checkbox3" class="checkbox3 visuallyHidden">
					<label for="checkbox3">
						<div class="hamburger hamburger3">
							<span class="bar bar1"></span>
							<span class="bar bar2"></span>
							<span class="bar bar3"></span>
							<span class="bar bar4"></span>
						</div>
					</label>
				</div>
			</div>
		</div>
					</div>
		<div class="fullscreen-menu">
			<div class="fullscreen-menu-inner">
				<?php wp_nav_menu( [
						'theme_location'  => 'mobile',
						'menu'            => '', 
						'container'       => '', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'walker'          => '',
					] ); ?>
			</div>
			<div class="ssocial">
				<a href="mailto:Vozrozhdenie-poisk@mail.ru">
					<svg class="inline-svg-icon">
						<use xlink:href="#icon--mail"></use>
					</svg>
				</a>
				<a href="https://vk.com/vozrozhdeniepoisk">
					<svg class="inline-svg-icon">
						<use xlink:href="#icon--vk"></use>
					</svg>
				</a>
				<a href="https://www.facebook.com/vozrozhdeniepoisk">
					<svg class="inline-svg-icon">
						<use xlink:href="#icon--fb"></use>
					</svg>
				</a>
				<a href="https://www.instagram.com/vozrozhdeniepoisk">
					<svg class="inline-svg-icon">
						<use xlink:href="#icon--inst"></use>
					</svg>
				</a>
			</div>
	
		</div>