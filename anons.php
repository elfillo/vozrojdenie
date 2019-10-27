<?php
/*
Template Name: Анонсы
*/
?>
<?php get_header('page')?>
    <div class="wrapper vertical">
        <div class="wrapper vertical">
            <div class="news-post">
                <?php
                $posts = get_posts( array(
                    'post_type'   => 'post_anons',
                    'numberposts'      => 999,
                ) );

                foreach( $posts as $post ){ ?>
                    <div class="item">
                        <p class="mark"><mark><?php the_title(); ?></mark></p>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Читать подробнее</a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php get_footer()?>
