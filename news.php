<?php
/*
Template Name: Новости
*/
?>

<?php get_header( 'page' ); ?>

	<div class="wrapper vertical">
		<!--<div class="choose">
			<div class="item active">2019</div>
			<div class="item">2018</div>
			<div class="item">2017</div>
		</div>-->
		<div class="news-post">
			<?php
				$posts = get_posts( array(
					'post_type'   => 'post_news',
                    'numberposts'      => 999,
				) );

				foreach( $posts as $post ){ //setup_postdata($post); ?>
			<div class="item">
				<p class="mark"><mark><?php the_title(); ?></mark></p>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="read-more">Читать подробнее</a>
			</div>
				    <?php
				}
			?>
		</div>
		<!--<button class="load-more">загрузить еще...</button>-->
	</div>

<?php get_footer(); ?>