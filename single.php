<?php
    $post = $wp_query->post;

    if (is_singular('post_anons')) {
        include(TEMPLATEPATH.'/anons-page.php');
    }
    if (is_singular()){
        include(TEMPLATEPATH.'/anons-page.php');
    }
?>