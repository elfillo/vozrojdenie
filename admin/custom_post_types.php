<?php
add_action( 'init', 'register_post_news' );
add_action( 'init', 'register_post_chronic' );
add_action( 'init', 'register_post_anons' );
add_action( 'init', 'register_post_lib' );
add_action( 'init', 'register_post_cite' );
add_action( 'init', 'register_post_grams' );

function register_post_news(){
    register_post_type('post_news', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Новости', // основное название для типа записи
            'singular_name'      => 'Новость', // название для одной записи этого типа
            'add_new'            => 'Добавить новость', // для добавления новой записи
            'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование новости', // для редактирования типа записи
            'new_item'           => 'Свежая новость', // текст новой записи
            'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
            'search_items'       => 'Искать новость', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Новости', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-networking',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array('post_tag'),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

function register_post_chronic(){
    register_post_type('post_chronic', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Хроники', // основное название для типа записи
            'singular_name'      => 'Запись', // название для одной записи этого типа
            'add_new'            => 'Добавить запись', // для добавления новой записи
            'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование записи', // для редактирования типа записи
            'new_item'           => 'Новая запись', // текст новой записи
            'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items'       => 'Искать запись', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Хроники', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'hierarchical'        => true,
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array('post_tag'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

function register_post_calendar(){
    register_post_type('post_calendar', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Календарь', // основное название для типа записи
            'singular_name'      => 'Календарь', // название для одной записи этого типа
            'add_new'            => 'Добавить дату', // для добавления новой записи
            'add_new_item'       => 'Добавление даты', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование даты', // для редактирования типа записи
            'new_item'           => 'Новая дата', // текст новой записи
            'view_item'          => 'Смотреть дату', // для просмотра записи этого типа.
            'search_items'       => 'Искать дату', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Календарь', // название меню
        ),
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-calendar-alt',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

function register_post_lib(){
    register_post_type('post_lib', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Библиотека', // основное название для типа записи
            'singular_name'      => 'Библиотека', // название для одной записи этого типа
            'add_new'            => 'Добавить книгу', // для добавления новой записи
            'add_new_item'       => 'Добавление книги', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование книги', // для редактирования типа записи
            'new_item'           => 'Новая книга', // текст новой записи
            'view_item'          => 'Смотреть книгу', // для просмотра записи этого типа.
            'search_items'       => 'Искать книгу', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Библиотека', // название меню
        ),
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-format-aside',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

function register_post_cite(){
    register_post_type('post_cite', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Цитаты', // основное название для типа записи
            'singular_name'      => 'Цитата', // название для одной записи этого типа
            'add_new'            => 'Добавить цитату', // для добавления новой записи
            'add_new_item'       => 'Добавление цитаты', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование цитаты', // для редактирования типа записи
            'new_item'           => 'Новая цитата', // текст новой записи
            'view_item'          => 'Смотреть цитату', // для просмотра записи этого типа.
            'search_items'       => 'Искать цитату', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Цитаты', // название меню
        ),
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-format-aside',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

function register_post_grams(){
    register_post_type('post_grams', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Грамоты', // основное название для типа записи
            'singular_name'      => 'Грамота', // название для одной записи этого типа
            'add_new'            => 'Добавить грамоту', // для добавления новой записи
            'add_new_item'       => 'Добавление грамоты', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование грамоты', // для редактирования типа записи
            'new_item'           => 'Новая грамота', // текст новой записи
            'view_item'          => 'Смотреть грамоту', // для просмотра записи этого типа.
            'search_items'       => 'Искать грамоту', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Грамоты', // название меню
        ),
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-format-aside',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'thumbnail', 'post-formats', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}
?>