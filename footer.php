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
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55539100, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55539100" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
