<?php
/*
Template Name: Новость
Template Post Type: post_news
*/
?>

<?php get_header( 'new' ); ?>
	<div class="wrapper-big">
		<section class="sidebar">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/img-1.jpg" alt="">
		</section>
		<section class="content-form" style="padding-bottom: 95px">
			<?php while ( have_posts() ) : the_post(); ?>
			  <div class="entry-content">
			    <?php the_content(); ?>
			  </div>
			<?php endwhile; // End of the loop. ?>
		</section>
	</div>

<?php get_footer(); ?>