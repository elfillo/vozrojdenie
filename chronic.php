<?php
/*
Template Name: Хроника событий
*/
?>

<?php get_header( 'page' ); ?>
<?php
$link = $_SERVER['REQUEST_URI'];
$activeTag = explode('/', $link)[2];
$tags = get_tags(['order' => 'DESC']);
$first_tag = array_shift($tags);
?>
    <div class="wrapper vertical">
        <div class="choose">
            <a href="<?php echo get_tag_link($first_tag->term_id)?>" class="item active"><?php echo $first_tag->name?></a>
            <?php foreach ($tags as $tag):?>
                <a href="<?php echo get_tag_link($tag->term_id)?>" class="item"><?php echo $tag->name?></a>
            <?php endforeach;?>
        </div>

        <div class="chronic-post">
            <?php
            $posts = get_posts( array(
                'numberposts' => -1,
                'post_type'   => 'post_chronic',
                'tag'         => $first_tag->slug,
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

<?php get_footer(); ?>