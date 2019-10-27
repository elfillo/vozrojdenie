<?php
/*
Template Name: Библиотека
*/
?>

<?php get_header( 'page' ); ?>
	
	<div class="wrapper">
		<div class="library">
			<?php
				$posts = get_posts( array(
					'post_type'   => 'post_lib',
                    'numberposts'      => 999,
				) );



				foreach( $posts as $post ){ //setup_postdata($post); ?>
			<div class="item">
				<img class="img-bg" src="<?php echo get_template_directory_uri() ?>/assets/img/img-9.png" alt="">
                <div class="book_cover">
                    <?php the_post_thumbnail(); ?>
                </div>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
                <div class="read-more"><?php echo get_post($post->ID)->post_content?></div>
			</div>
				    <?php
				}
			?>
		</div>
	</div>
	<!--<div class="wrapper">
		<button class="load-more">загрузить еще...</button>
	</div>-->

<?php get_footer(); ?>