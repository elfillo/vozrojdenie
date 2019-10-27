<?php
/*
Template Name: Хроника
Template Post Type: post_chronic
*/
?>

<?php get_header( 'chronic' ); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/mfp/magnific-popup.css">
<?php the_post(); ?>

	<div class="wrapper vertical">
		<img src="<?php the_field('image_chronic'); ?>" alt="" style="height: auto; width: 100%">
		<div style="margin-top: -28px"><mark class="heading"><?php the_title(); ?></mark></div>
	</div>
	<div class="wrapper">
		<section class="content" style="padding-right: 59px">
			<p style="line-height: 32px"><?php the_content(); ?></p>
		<div class="line"></div>
		<a href="/хроника-событий/" class="read-more">Вернуться к хронике событий</a>
		</section>
		<section class="sidebar cpage">
			<div class="popup-gallery">
			<?php if( have_rows('gal') ): ?>

				<?php while( have_rows('gal') ): the_row(); 
					$image = get_sub_field('img');
					$thmb = get_sub_field('thumbnail');
					?>
					<a href="<?php echo $image ?>"><img src="<?php echo $thmb ?>"></a>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</section>
	</div>
	<script src="<?php echo get_template_directory_uri() ?>/assets/slider/docs/assets/vendors/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/assets/mfp/jquery.magnific-popup.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1]
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
			}
		});
	});
	</script>

<?php get_footer(); ?>