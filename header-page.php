<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( null ) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favikon.png">
	<?php wp_head(); ?>
</head>
<body>
    <div class="to_top" id="upstairs"></div>
	<header>
		<div class="top-bar__wrappper">
			<div class="top-bar">
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
        <?php
            $link = $_SERVER['REQUEST_URI'];
            $uri = explode('/', $link)[1];
            $host_name = explode('/', get_template_directory_uri())[0];
        ?>
        <?php if($uri === 'tag'):?>
            <div class="image"><img src="<?php echo $_1?>/wp-content/uploads/2019/09/chronic-img.jpg" alt=""></div>
        <?php endif;?>
		<div class="image pages_head" style="background:url(<?php the_field('bg-img'); ?>);">
			<!-- <img src="<?php //the_field('bg-img'); ?>" alt=""> -->
			<div class="heading"><?php wp_title( null ) ?></div>
			<div class="breadcrumbs">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb.png" alt=""><a href="<?php echo get_home_url(); ?>">На главную</a>
			</div>
		</div>
	</header>