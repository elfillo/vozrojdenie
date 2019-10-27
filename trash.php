<?php get_header( 'page' ); ?>

    <div class="wrapper vertical">
        <?php

        $post = $wp_query->post;

        if (is_singular('deals')) {
            include(TEMPLATEPATH.'/archibe.php');
            dd('!!!!!!!!HUI!!!!!!!!!!');
        }

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
    <div class="image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/contacts-img.jpg" alt=""></div>
    <div class="heading">Контакты</div>
    <div class="breadcrumbs">
        <img src="img/breadcrumb.png" alt=""><a href="">На главную</a>
    </div>
    </header>
    <div class="wrapper co">
        <div class="list">
            <div class="contacts">
                <h2>Контакты</h2>
                <p>Юридический адрес: 109382, г. Москва, ул. Мариупольская, д. 6, оф.30 <br><br>Фактический адрес: 109382, г. Москва, ул. Мариупольская, д. 6, оф.30</p>
                <span class="phone">8 906 651-99-53</span>
                <span class="mail">Vozrozhdenie-poisk@mail.ru</span>
                <div class="human">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-3.jpg" alt="">
                    <p><span>Веселов Дмитрий Владимирович</span><br><br>Командир ПО «Возрождение»</p>
                </div>
            </div>
            <div class="map"><img src="<?php echo get_template_directory_uri() ?>/assets/img/img-2.jpg" alt=""></div>
            <div class="item">
                <h2>Реквизиты</h2>
                <p>Патриотическая региональная общественная организация «Поисковый отряд «Возрождение»<br><br>
                    Сокращенное наименование организации: Поисковый отряд «Возрождение»<br><br>
                    ИНН/КПП 7723470032/772301001<br><br>
                    ОГРН 1167700063630<br><br>
                    ОКПО<br><br>
                    Полное наименование банка: Публичное акционерное общество «ВТБ 24»<br><br>
                    Сокращенное наименование банка: ВТБ 24 (ПАО)<br><br>
                    Расч. счет: 40703810300000000796<br><br>
                    К/с: 30101810100000000716<br><br>
                    В ГУ БАНКА РОССИИ ПО ЦФО<br><br>
                    БИК: 044525716<br><br>
                    ИНН: 7710353606<br><br>
                    101000, г. Москва, Мясницкая ул., д.35</p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>