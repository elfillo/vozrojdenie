<?php
/*
Template Name: Письмо
*/
?>

<?php get_header( 'page' ); ?>

    <div class="wrapper-big">
        <section class="sidebar">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-1.jpg" alt="">
        </section>
        <section class="content-form" style="padding-bottom: 95px">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="entry-content">
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="524" title="Письмо"]')?>
                    </div>
                </div>
            <?php endwhile; // End of the loop. ?>
        </section>
    </div>

<?php get_footer(); ?>