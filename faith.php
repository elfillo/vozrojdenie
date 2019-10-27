<?php
/*
Template Name: Судьба солдата
*/
?>

<?php get_header( 'page' ); ?>

	<div class="wrapper-big">
		<section class="sidebar">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/img-1.jpg" alt="">
			<div class="faith-btns">
				<a href="/форма/" class="read-more">Заполнить анкету</a>
                <a href="/wp-content/uploads/2019/10/%D0%B0%D0%BD%D0%BA%D0%B5%D1%82%D0%B0_%D1%81%D1%83%D0%B4%D1%8C%D0%B1%D0%B0_%D1%81%D0%BE%D0%BB%D0%B4%D0%B0%D1%82%D0%B0.pdf" class="read-more" download>скачать анкету</a>
			</div>
		</section>
		<section class="content">
			<?php the_post(); ?>
			<?php the_content(); ?>
		</section>
	</div>

<?php get_footer(); ?>