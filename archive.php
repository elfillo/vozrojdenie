<?php get_header( 'page' ); ?>


    <?php
        $link = $_SERVER['REQUEST_URI'];
        $activeTag = explode('/', $link)[2];
        $tags = get_tags(['order' => 'DESC']);
    ?>
    <div class="wrapper vertical">
    <?php
    if(have_posts()) : while(have_posts()) : the_post();
        echo '<h1>';
        the_title();
        echo '</h1>';
        echo '<br/>';
        echo '<div class="entry-content">';
        the_content();
        echo '</div>';
        echo '<br/>';
        echo '<br/>';
    endwhile; endif;
    ?>
    </div>
    <?php
        if(explode('/', $link)[1] === 'tag'):
    ?>
	<div class="wrapper vertical">
		<div class="choose">
            <?php foreach ($tags as $tag):?>
			<a href="<?php echo get_tag_link($tag->term_id)?>" class="item <?php echo $activeTag == $tag->name ? 'active' : ''?>"><?php echo $tag->name?></a>
            <?php endforeach;?>
		</div>

        <div class="chronic-post">
            <?php
            $posts = get_posts( array(
                'numberposts' => -1,
                'post_type'   => 'post_chronic',
                'tag'         => $activeTag,
            ) );

            foreach( $posts as $post ){ setup_postdata($post); ?>
                <div class="item">
                    <?php the_post_thumbnail( 'chronic-thumb' ); ?>
                    <div><mark class="heading"><?php the_title(); ?></mark></div>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-more">Читать подробнее</a>
                </div>
                <?php
            }
            ?>
        </div>
	</div>
    <?php endif;?>

<?php get_footer(); ?>