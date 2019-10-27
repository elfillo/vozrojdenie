<?php
/*
Template Name: Контакты
*/
?>

<?php get_header( 'page' ); ?>

	<div class="wrapper co">
		<div class="list">
			<div class="contacts">
				<h2>Контакты</h2>
				<p><?php the_field('addres'); ?></p>
				<span class="phone"><?php the_field('phone'); ?></span>
				<span class="mail"><?php the_field('mail'); ?></span>
				<div class="human">
					<img src="<?php the_field('human-img'); ?>" alt="">
					<p><span><?php the_field('human-name'); ?></span><br><br><?php the_field('human-desc'); ?></p>
				</div>
			</div>
			<div class="map"><img src="<?php echo get_template_directory_uri() ?>/assets/img/img-2.jpg" alt=""></div>
			<div class="item">
				<h2>Реквизиты</h2>
				<p><?php the_field('requisite'); ?></p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>