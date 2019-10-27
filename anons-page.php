<?php
/*
Template Name: Анонс
Template Post Type: post_anons
*/
?>

<?php get_header('chronic')?>
    <div class="wrapper vertical">
        <?php if(have_posts()) : while(have_posts()) : the_post();
            echo '<div class="entry-content">';
            the_content();
            echo '</div>';
            echo '<br/>';
            echo '<br/>';
        endwhile; endif;?>
    </div>
<?php get_footer()?>
