<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/slider/docs/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/slider/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
<div class="owl-carousel" id="img-carousel">
<?php if( have_rows('slider2') ): ?>

	<?php while( have_rows('slider2') ): the_row(); 
		$image = get_sub_field('img');
		?>
		<div style="background:url(<?php echo $image ?>);background-size: cover;background-position: center;background-repeat: no-repeat;"><img src="<?php echo $image ?>" alt=""></div>
	<?php endwhile; ?>
<?php endif; ?>
</div>
<div class="heading">
	Поисковый отряд
	<p>возрождение</p>
	<span>Мы помним. Мы ищем.</span>
</div>
</header>

<div class="wrapper index">
	<section class="sidebar">
	<h2 class="mobile_main_title">Слово командира</h2>
	<img src="<?php echo get_template_directory_uri() ?>/assets/img/img-12.jpg" alt=""></section>
	<section class="content">
		<h2 class="desc_main_title">Слово командира</h2>
		<p class="slovo_comandira">
            <?php the_field('slovo_comandira');?>
			<img src="<?php the_field('foto_comandira')?>" alt="" class="paint photo_comamd"></p>
			<a href="<?php echo get_page_link(32) ?>" class="read-more">Читать подробнее</a>
		</section>
	</div>
	<div class="wrapper vertical">
    <?php include('assets/grams-gallery.php')?>
	</div>
	<section class="chronic-index">
		<div class="wrapper vertical">
			<h2 style="padding-left: 13px">Хроника событий</h2>
			<div class="chronic-post owl-carousel" id="owl-carousel">
				<?php
				$posts = get_posts( array(
					'post_type'   => 'post_chronic',
                    'tag'      => '2018',
				) );

				foreach( $posts as $post ){ setup_postdata($post); ?>
                    <?php
                        $tag = get_the_tags();
                        $year = $tag[0]->name;
                    ?>
					<div class="item">
						<?php the_post_thumbnail( 'chronic-thumb' ); ?>
						<div><mark class="heading"><?php the_title();?><?php echo $year?></mark></div>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more">Читать подробнее</a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<div class="wrapper-wrap">
		<div class="faith-index">
			<div class="index-faith">
				<h2>Судьба солдата</h2>
				<div class="sb">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/img-1.jpg" alt="">
					<div class="text">
						<h3>Установление судьбы солдата Великой Отечественной войны</h3>
						<p>Мы расскажем вам, а также дадим полный алгоритм действий, как самому установить судьбу пропавшего на войне солдата</p>
                        <a href="/судьба-солдата/" class="read-more">Читать подробнее</a>
                        <a href="/форма/" class="read-more">Заполнить анкету</a>
					</div>
				</div>
			</div>
			<div class="index-lib">
				<h2>Библиотека</h2>
				<div class="library">
					<?php
					$posts = get_posts( array(
						'numberposts' => 1,
						'orderby' => 'rand',
						'post_type'   => 'post_lib',
					) );

					foreach( $posts as $post ){ //setup_postdata($post); ?>
						<div class="item">
							<img class="img-bg" src="<?php echo get_template_directory_uri() ?>/assets/img/img-9.png" alt="">
                            <div class="book_cover">
                                <?php the_post_thumbnail(); ?>
                            </div>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<div class="cc">
                                <div class="read-more"><?php echo get_post($post->ID)->post_content?></div>
                                <div class="read-more">
                                    <a href="<?php echo get_page_link(26) ?>">Все книги</a>
                                </div>
                            </div>
						</div>
						<?php
					}
					?>
					
				</div>
			</div>
		</div>
	</div>
	<section class="cite-index">
		<div class="wrapper vertical" style="position: relative;">
			<h2 style="color: #fff">Цитата дня</h2>
			<?php
			$posts = get_posts( array(
				'numberposts' => 1,
				'orderby' => 'rand',
				'post_type'   => 'post_cite',
			) );

			foreach( $posts as $post ){ setup_postdata($post); ?>
				<div class="fs-c">
					<div class="imgg">
						<?php the_post_thumbnail(); ?>
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/kv.png" alt="" class="kv">
					</div>
					<div class="cite">
						<?php the_content(); ?>
						<p class="author"><?php the_title(); ?></p>
					</div>
				</div>
				<?php
			}
			?>
			
		</section>
		<div class="wrapper vertical">
			<h2 style="padding-left: 13px">Новости</h2>
			<div class="news-post owl-carousel" id="owl-carousel2">
				<?php
				$posts = get_posts( array(
					'post_type'   => 'post_news',
				) );

				foreach( $posts as $post ){ setup_postdata($post); ?>
					<div class="item">
						<p><mark><?php the_title(); ?></mark></p>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more">Читать подробнее</a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
		<section class="calendar-index">
			<div class="wrapper sb">
				<div class="index-calendar">
					<?php get_calendar_custom();?>
                    <?php
                        $dates = get_planned_dates();
                    ?>
                    <?php foreach ($dates as $date):?>
                    <a href="<?php echo $date['link']?>">
                        <p><mark class="calendar"><?php echo $date['date'] ?></mark>  -  <?php echo $date['title']?></p>
                    </a><br/>
                    <?php endforeach;?>
				</div>
				<div class="index-contacts">
					<div class="table">
                        <h2>Контакты</h2>
						<span class="phone"><?php the_field('contacti_telefon', 151);?></span>
						<span class="mail"><?php the_field('contacti_pochta', 151);?></span>
						<div class="human">
							<img src="img/img-3.jpg" alt="">
							<p>
                                <span><?php the_field('contacti_imya', 151);?></span><br><br>
                                <?php the_field('contacti_doljnost', 151);?>
                            </p>
						</div>
						<a href="/wp-content/uploads/2019/10/реквизиты.pdf" class="read-more" target="_blank" download>Скачать полные реквизиты</a>
					</div>
                    <div class="feed-back">
                        <h2>Обратная связь</h2>
                        <p>Отправьте свое сообщение через форму обратной связи
                            и мы обязательно свяжемся с вами.</p>
                        <a href="/письмо/" class="read-more">Отправить сообщение</a>
                    </div>
				</div>
			</div>
		</section>
		<script src="<?php echo get_template_directory_uri() ?>/assets/slider/docs/assets/owlcarousel/owl.carousel.js"></script>
		<script>
			$('#owl-carousel').owlCarousel({
				loop:true,
				nav: true,
				navText : ['<div class="prev"></div>', '<div class="next"></div>'],
				responsive:{
					0:{
						items: 1
					},
					800:{
						items: 2
					},
					1100:{
						items: 3
					}
				}
			});
			$('#owl-carousel2').owlCarousel({
				loop:true,
				nav: true,
				navText : ['<div class="prev"></div>', '<div class="next"></div>'],
				responsive:{
					0:{
						items: 1
					},
					800:{
						items: 2
					},
					1100:{
						items: 3
					}
				}
			});
			$('#img-carousel').owlCarousel({
				loop:true,
				nav:true,
				mouseDrag:false,
				autoWidth:true,
				items:1,
				navText : ['<div class="prev"></div>', '<div class="next"></div>']
			})
		</script>
		<?php get_footer(); ?>