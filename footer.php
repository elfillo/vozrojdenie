	<footer style="background: #fff">
		<div class="bottom-bar">
			<div class="bottom-bar-copyright">© 2019 Поисковый отряд Возрождение </div>
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
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<div class="bottom-bar-menu pc-bottom-menu">%3$s</div>',
					'depth'           => 0,
					'walker'          => '',
				] ); ?>
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
					'items_wrap'      => '<div class="bottom-bar-menu mobile-bottom-menu">%3$s</div>',
					'depth'           => 0,
					'walker'          => '',
				] ); ?>
			<div class="bottom-bar-social">
                <?php include ('assets/social_icons.php')?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
