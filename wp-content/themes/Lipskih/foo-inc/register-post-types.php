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
            'name'               => 'Главный Слайдер', // основное название для типа записи
            'singular_name'      => 'Главный Слайдер', // название для одной записи этого типа
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
        'supports'            => ['title','thumbnail'],
        //NOTE Старница на которой будт выведены все типы записей, Fasle-не регестрирует тип записи/ true - регестрируем
        //ANCHOR по этому URL можно получить все записи этого типа
        'has_archive' => false
    ]);
    register_post_type('album', [
        /*  //ANCHOR Настройки, можно копировать в другие проекты */
        //NOTE имя склоняемое
        'labels' => [
            'name'               => 'Фотоальбом', // основное название для типа записи
            'singular_name'      => 'Фото', // название для одной записи этого типа
            'add_new'            => 'Добавить новое фото', // для добавления новой записи
            'add_new_item'       => 'Добавить новое фото', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать фото', // для редактирования типа записи
            'new_item'           => 'Новое фото', // текст новой записи
            'view_item'          => 'Смотреть фото', // для просмотра записи этого типа.
            'search_items'       => 'Искать фото', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Фотоальбом', // название меню
        ],
        //NOTE Видна или нет в админке
        'public'              => true,
        //NOTE на какой позиции
        'menu_position'       => 20,
        //NOTE иконка
        'menu_icon'           => 'dashicons-smiley',

        'hierarchical'        => false,
        //NOTE специальные ярлыки, что можно редактировать в этой записи
        'supports'            => ['title','thumbnail','excerpt'],
        //NOTE Старница на которой будт выведены все типы записей, Fasle-не регестрирует тип записи/ true - регестрируем
        //ANCHOR по этому URL можно получить все записи этого типа
        'has_archive' => false
    ]);

    register_post_type('education', [
        /*  //ANCHOR Настройки, можно копировать в другие проекты */
        //NOTE имя склоняемое
        'labels' => [
            'name'               => 'Образование и Достижения', // основное название для типа записи
            'singular_name'      => 'Образование и Достижения', // название для одной записи этого типа
            'add_new'            => 'Добавить новое образование и достижения', // для добавления новой записи
            'add_new_item'       => 'Добавить новое образование и достижения', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать образование и достижения', // для редактирования типа записи
            'new_item'           => 'Новое образование и достижения', // текст новой записи
            'view_item'          => 'Смотреть образование и достижения', // для просмотра записи этого типа.
            'search_items'       => 'Искать образование и достижения', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Образование и Достижения', // название меню
        ],
        //NOTE Видна или нет в админке
        'public'              => true,
        //NOTE на какой позиции
        'menu_position'       => 20,
        //NOTE иконка
        'menu_icon'           => 'dashicons-bank',

        'hierarchical'        => false,
        //NOTE специальные ярлыки, что можно редактировать в этой записи
        'supports'            => ['title', 'editor','thumbnail','excerpt'],
        //NOTE Старница на которой будт выведены все типы записей, Fasle-не регестрирует тип записи/ true - регестрируем
        //ANCHOR по этому URL можно получить все записи этого типа
        'has_archive' => false
    ]);

    register_taxonomy('educations_part', ['education'], [
        'labels'                => [
            'name'              => 'Категория',
            'singular_name'     => 'Категория',
            'search_items'      => 'Найти категорию',
            'all_items'         => 'Все категории',
            'view_item '        => 'Посмотреть категории',
            'edit_item'         => 'Редактировать категории',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить категории',
            'new_item_name'     => 'Добавить категории',
            'menu_name'         => 'Категории',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
    ]);

    //типы записей для ФОРМЫ
    register_post_type('mail', [
        /*  //ANCHOR Настройки, можно копировать в другие проекты */
        //NOTE имя склоняемое
        'labels' => [
            'name'               => 'Письма', // основное название для типа записи
            'singular_name'      => 'Письмо', // название для одной записи этого типа
            'add_new'            => 'Добавить новое Письмо', // для добавления новой записи
            'add_new_item'       => 'Добавить новое Письмо', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать Письмо', // для редактирования типа записи
            'new_item'           => 'Новое Письмо', // текст новой записи
            'view_item'          => 'Смотреть Письмо', // для просмотра записи этого типа.
            'search_items'       => 'Искать Письмо', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Письма', // название меню
        ],

        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => false,
        "query_var" => true,
        "menu_position" => 7,
        "menu_icon" => "dashicons-email-alt",
        "supports" => array( "title", "editor" ),
    ]);
}

