<?php

add_action('init', 'art_register_post');

function art_register_post(){
    register_post_type('picture', [
        /*  //ANCHOR Настройки, можно копировать в другие проекты */
        //NOTE имя склоняемое
        'labels' => [
            'name'               => 'Картины', // основное название для типа записи
            'singular_name'      => 'Картина', // название для одной записи этого типа
            'add_new'            => 'Добавить новую картину', // для добавления новой записи
            'add_new_item'       => 'Добавить новую картину', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать картину', // для редактирования типа записи
            'new_item'           => 'Новая картина', // текст новой записи
            'view_item'          => 'Смотреть картину', // для просмотра записи этого типа.
            'search_items'       => 'Искать картины', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Картины', // название меню
        ],
        //NOTE Видна или нет в админке
        'public'              => true,
        //NOTE на какой позиции
        'menu_position'       => 20,
        //NOTE иконка
        'menu_icon'           => 'dashicons-admin-customizer',

        'hierarchical'        => false,
        //NOTE специальные ярлыки, что можно редактировать в этой записи
        'supports'            => ['title', 'editor','thumbnail','excerpt'],
        //NOTE Старница на которой будт выведены все типы записей, Fasle-не регестрирует тип записи/ true - регестрируем
        //ANCHOR по этому URL можно получить все записи этого типа
        'has_archive' => true
    ]);

    register_post_type('slider', [
        /*  //ANCHOR Настройки, можно копировать в другие проекты */
        //NOTE имя склоняемое
        'labels' => [
            'name'               => 'Слайдер', // основное название для типа записи
            'singular_name'      => 'Слайдер', // название для одной записи этого типа
            'add_new'            => 'Добавить новый слайд', // для добавления новой записи
            'add_new_item'       => 'Добавить новый слайд', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать слайд', // для редактирования типа записи
            'new_item'           => 'Новый слайд', // текст новой записи
            'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
            'search_items'       => 'Искать слайд', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Главный Слайдер', // название меню
        ],
        //NOTE Видна или нет в админке
        'public'              => true,
        //NOTE на какой позиции
        'menu_position'       => 20,
        //NOTE иконка
        'menu_icon'           => 'dashicons-format-gallery',

        'hierarchical'        => false,
        //NOTE специальные ярлыки, что можно редактировать в этой записи
        'supports'            => ['title', 'editor','thumbnail','excerpt'],
        //NOTE Старница на которой будт выведены все типы записей, Fasle-не регестрирует тип записи/ true - регестрируем
        //ANCHOR по этому URL можно получить все записи этого типа
        'has_archive' => false
    ]);
}
