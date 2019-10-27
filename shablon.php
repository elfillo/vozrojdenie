<?php 
/*
Template Name: Шаблон страницы
*/
?>
<?php get_header(); ?>
<div class="page">
    <div class="container">

        <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
        </div>
    </div>
</div> 
<style type="text/css">
    .msacwl-carousel-slide a{
        height: auto !important;
    }
</style>
<?php get_footer(); ?>