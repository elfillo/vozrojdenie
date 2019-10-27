<!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri() ?>/assets/css/swiper.min.css">
<link rel="stylesheet" href="<?php //echo get_template_directory_uri() ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php //echo get_template_directory_uri() ?>/assets/css/libs.min.css"> -->
<div class="content no_rules">
    <?php
    // $grams = get_posts( array(
    //     'post_type'   => 'post_grams',
    //     'numberposts'      => 99,
    // ) );
    ?>
    <!-- <div class="swiper-container my_swiper">
        <div class="swiper-wrapper">
            <?php //foreach ($grams as $gram):?>
                <div class="swiper-slide">
                    <a class="gallery__item lazyload" data-expand="-110" href="<?php //(the_field('gram-img', $gram->ID));?>" data-fancybox="gallery">
                        <img data-lazy class="lazyload" src="<?php //(the_field('gram-img', $gram->ID));?>" alt="#">
                    </a>
                </div>
            <?php //endforeach;?>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <?php echo do_shortcode('[meta_gallery_carousel id="542" slide_to_show="4" autoplay="false" show_title="false" show_caption="false" dots="false"]');?>
</div>
<style type="text/css">
    .msacwl-carousel-slide a{
        height: auto !important;
    }
</style>