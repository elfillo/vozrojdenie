<?php
/*
Template Name: Слово командира
*/
?>

<?php get_header( 'page' ); ?>
<?php the_post(); ?>

	<div class="wrapper">
		<section class="sidebar">
			<img src="<?php the_field('commando'); ?>" alt="">
		</section>
		<section class="content word1">
			<?php the_content(); ?>
			</section>
	</div>
	<div class="wrapper">
		<section class="sidebar">
			<img src="<?php the_field('img2'); ?>" alt="" class="big">
		</section>
		<section class="content word2">
			<p><?php the_field('content'); ?></p>
			<div class="human ff">
				<p><span><?php the_field('name'); ?></span><br><br><?php the_field('desc'); ?></p>
			</div>

		</section>
	</div>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/mfp/magnific-popup.css">
	<div class="wrapper vertical" style="margin-bottom: 100px">
        <?php include('assets/grams-gallery.php')?>
		<!--<div class="grams">
			<?php
/*				$posts = get_posts( array(
					'post_type'   => 'post_grams',
				) );

				foreach( $posts as $post ){ setup_postdata($post); */?>
						<a href="<?php /*the_field('gram-img'); */?>"><?php /*the_post_thumbnail( 'gram-thumb' ); */?></a>
					<?php
/*				}
				*/?>
		</div>-->
	<!--<script src="<?php /*echo get_template_directory_uri() */?>/assets/slider/docs/assets/vendors/jquery.min.js"></script>
	<script src="<?php /*echo get_template_directory_uri() */?>/assets/mfp/jquery.magnific-popup.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.grams').magnificPopup({
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
	</script>-->
	</div>

<?php get_footer(); ?>