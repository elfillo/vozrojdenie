<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( null ) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
    <div class="to_top" id="upstairs"></div>
	<header>
		<div class="top-bar">
			<a href="<?php bloginfo('url') ?>">
				<div class="top-bar-logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-bg.png" alt="" class="logo-bg">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="" class="top-bar-logo-logo">
				</div>
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
				<a id="burger" class=""><span></span></a>
			</div>

		</div>

		<div class="fullscreen-menu">
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
			<div class="ssocial">
                <?php include_once ('assets/social_icons.php')?>
			</div>
		</div>
		<div class="image"><img src="<?php the_field('bg-img', 30 ); ?>" alt=""></div>
			<div class="heading"><?php wp_title( null ) ?></div>
			<div class="breadcrumbs">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb.png" alt=""><a href="<?php echo get_home_url(); ?>">На главную</a>
			</div>
	</header>