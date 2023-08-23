<?php
require get_template_directory() . '/inc/kama-post-meta-box.php';

class_exists( 'Kama_Post_Meta_Box' ) && new Kama_Post_Meta_Box( [
	'id'        => '_exec_hero',
	'title'     => 'Верхний блок',
	'theme'     => 'grid',
	'post_type' => [ 'page' ],
    'disable_func' => 'disable_box',
	'fields'    => [
		'title' => [
			'title' => 'Заголовок блока',
            'type'  => 'textarea',
		],
		'subtitle' => [
			'title' => 'Подзаголовок блока',
            'type'  => 'textarea',
		],
		'btn_text' => [
			'title' => 'Текст кнопки',
		],
        'btn_link' => [
			'title' => 'Ссылка кнопки',
		],
	],
] );

class_exists( 'Kama_Post_Meta_Box' ) && new Kama_Post_Meta_Box( [
	'id'        => '_exec_info',
	'title'     => 'Инфо блок',
	'theme'     => 'grid',
	'post_type' => [ 'page' ],
    'disable_func' => 'disable_box',
	'fields'    => [
		'info1' => [
			'title' => 'Текст элемента'
		],
		'info2' => [
			'title' => 'Текст элемента'
		],
		'info3' => [
			'title' => 'Текст элемента'
		],
	],
] );

class_exists( 'Kama_Post_Meta_Box' ) && new Kama_Post_Meta_Box( [
	'id'        => '_exec_services',
	'title'     => 'Сервисы',
	'theme'     => 'grid',
	'post_type' => [ 'page' ],
    'disable_func' => 'disable_box',
	'fields'    => [
        'services_title' => [
			'title' => 'Заголовок блока'
		],
		'services_subtitle' => [
			'title' => 'Подзаголовок блока',
            'type'  => 'textarea',
		],

        'services_title_item1' => [
			'title' => 'Название Сервиса 1'
		],
		'services_subtitle_item1' => [
			'title' => 'Подзаголовок Сервиса 1',
            'type'  => 'textarea',
		],
        'services_description_item1' => [
			'title' => 'Описание Сервиса 1',
            'type'  => 'textarea',
		],

        'services_title_item2' => [
			'title' => 'Название Сервиса 2'
		],
		'services_subtitle_item2' => [
			'title' => 'Подзаголовок Сервиса 2',
            'type'  => 'textarea',
		],
        'services_description_item2' => [
			'title' => 'Описание Сервиса 2',
            'type'  => 'textarea',
		],

        'services_title_item3' => [
			'title' => 'Название Сервиса 3'
		],
		'services_subtitle_item3' => [
			'title' => 'Подзаголовок Сервиса 3',
            'type'  => 'textarea',
		],
        'services_description_item3' => [
			'title' => 'Описание Сервиса 3',
            'type'  => 'textarea',
		],
	],
] );

class_exists( 'Kama_Post_Meta_Box' ) && new Kama_Post_Meta_Box( [
	'id'        => '_exec_industries',
	'title'     => 'Индустрии',
	'theme'     => 'grid',
	'post_type' => [ 'page' ],
    'disable_func' => 'disable_box',
	'fields'    => [
        'industries_title' => [
			'title' => 'Заголовок блока'
		],
		'industries1' => [
			'title' => 'Текст элемента'
		],
		'industries2' => [
			'title' => 'Текст элемента'
		],
		'industries3' => [
			'title' => 'Текст элемента'
		],
        'industries4' => [
			'title' => 'Текст элемента'
		],
        'industries5' => [
			'title' => 'Текст элемента'
		],
		'industries6' => [
			'title' => 'Текст элемента'
		],
		'industries7' => [
			'title' => 'Текст элемента'
		],
        'industries8' => [
			'title' => 'Текст элемента'
		],
        'industries9' => [
			'title' => 'Текст элемента'
		],
		'industries10' => [
			'title' => 'Текст элемента'
		],
		'industries11' => [
			'title' => 'Текст элемента'
		],
        'industries12' => [
			'title' => 'Текст элемента'
		],
	],
] );

class_exists( 'Kama_Post_Meta_Box' ) && new Kama_Post_Meta_Box( [
	'id'        => '_exec_management',
	'title'     => 'Менеджмент',
	'theme'     => 'grid',
	'post_type' => [ 'page' ],
    'disable_func' => 'disable_box',
	'fields'    => [
        'management_title' => [
			'title' => 'Заголовок блока'
		],

        'management_item_name1' => [
			'title' => 'Имя менеджера'
		],
		'management_item_job1' => [
			'title' => 'Должность менеджера'
		],
        'management_item_experience1' => [
			'title' => 'Опыт менеджера',
            'type'  => 'textarea',
		],
        'management_item_education1' => [
			'title' => 'Образование менеджера',
            'type'  => 'textarea',
		],
        'management_item_langs1' => [
			'title' => 'Языки менеджера'
		],
        'management_item_email1' => [
			'title' => 'E-mail менеджера'
		],

        'management_item_name2' => [
			'title' => 'Имя менеджера'
		],
		'management_item_job2' => [
			'title' => 'Должность менеджера'
		],
        'management_item_experience2' => [
			'title' => 'Опыт менеджера',
            'type'  => 'textarea',
		],
        'management_item_education2' => [
			'title' => 'Образование менеджера',
            'type'  => 'textarea',
		],
        'management_item_langs2' => [
			'title' => 'Языки менеджера'
		],
        'management_item_email2' => [
			'title' => 'E-mail менеджера'
		],
	],
] );

class_exists( 'Kama_Post_Meta_Box' ) && new Kama_Post_Meta_Box( [
	'id'        => '_exec_platform',
	'title'     => 'Платформа EXEC 4.0',
	'theme'     => 'grid',
	'post_type' => [ 'page' ],
    'disable_func' => 'disable_box',
	'fields'    => [
        'platform_title' => [
			'title' => 'Заголовок блока'
		],
		'platform_subtitle' => [
			'title' => 'Подзаголовок блока'
		],
        'platform_description' => [
			'title' => 'Описание блока'
		],
        'platform_btn_text' => [
			'title' => 'Текст кнопки',
		],
        'platform_btn_link' => [
			'title' => 'Ссылка кнопки',
		],
	],
] );

function disable_box($post) {
    if ( $post->ID != 5 && $post->ID != 10 ) {
        return 'отключить';
    }
}
