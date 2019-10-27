<?php

	add_action( 'wp_enqueue_scripts', 'styles_theme' );
	//add_action( 'wp_footer', 'scripts_theme' );
	add_action( 'wp_enqueue_scripts', 'scripts_theme' );
	add_action( 'after_setup_theme', 'main_menu' );
	add_action( 'after_setup_theme', 'mobile_menu' );
	add_action( 'after_setup_theme', 'theme_support' );
	add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

	function true_loadmore_scripts() {
	}


	function styles_theme() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
		wp_enqueue_style( 'roller', get_template_directory_uri() . '/assets/fonts/roller/stylessheet.css' );
	}

	function scripts_theme() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() .'/assets/js/jquery-3.2.1.min.js', null, true);
        wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', array('jquery'), null, true);
        wp_enqueue_script('top_arrow', get_template_directory_uri() .'/assets/js/top_arrow.js', array('jquery'), null, true);
        wp_enqueue_script('swiper-c', get_template_directory_uri() .'/assets/js/libs.min.js', array('jquery'), null, true);
        wp_enqueue_script('swiper-c-main', get_template_directory_uri() .'/assets/js/swiper-main.js', array('swiper-c'), null, true);
	}

	function main_menu() {
		register_nav_menu( 'main', 'Main menu' );
	}

	function mobile_menu() {
		register_nav_menu( 'mobile', 'Mobile menu' );
	}

	function theme_support() {
		add_theme_support( 'title_tag' );
		add_theme_support( 'post' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-thumbnails', array( 'post_chronic' ) );
		add_image_size( 'chronic-thumb', 391, 312, true );
		add_image_size( 'chronic-galery-thumb', 389, 303, true );
		add_image_size( 'gram-thumb', 215, 324, true );
	}

	function dd($var){
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
    }

    function wpdocs_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

	require_once ('admin/custom_post_types.php');
    require_once ('admin/calendar.php');

?>