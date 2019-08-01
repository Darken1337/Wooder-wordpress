<?php
$main_page_options =array(
    'banner' => array(
        'title' => __('Настройки баннера', '{domain}'),
        'options' => array(
            'banner_title' => array(
                'type' => 'text',
                'value' => 'Wooder',
                'label' => __('Главный заголовок', '{domain}'),
            ),
            'banner_button_text' => array(
                'type' => 'text',
                'value' => 'Learn more',
                'label' => __('Текст кнопки', '{domain}'),
            ),
            'banner_subtitle' => array(
                'type' => 'text',
                'value' => 'Furniture &#38; Decor',
                'label' => __('Тип услуг', '{domain}'),
            ),
            'banner_bg' => array(
                'type'  => 'upload',
                'label' => __('Загрузите фон секции', '{domain}'),
                'images_only' => true,
            )

        ),
    ),
    'advantages' => array(
        'title' => __('Секция преимуществ', '{domain}'),
        'options' => array(
            'advantages_title' => array(
                'type' => 'text',
                'value' => 'wooder – is quality',
                'label' => __('Название секции', '{domain}')
            ),
            'advantages_subtitle' => array(
                'type' => 'textarea',
                'value' => 'We create unique design objects made of rare wood, specially under the order. Look at the short video about our work.',
                'label' => __('Подзаголовок секции', '{domain}')
            ),
            'advantage_one' => array(
                'type'  => 'multi',
                'value' => array(
                    'img' => '',
                    'name' => 'High-level Skills',
                ),
                'label' => __('Информация преимущества', '{domain}'),
                'inner-options' => array(
                    'img' => array( 'type' => 'upload' ),
                    'name' => array( 'type' => 'text' ),
                )
            ),
            'advantage_two' => array(
                'type'  => 'multi',
                'value' => array(
                    'img' => '',
                    'name' => 'Quality Products',
                ),
                'label' => __('Информация преимущества', '{domain}'),
                'inner-options' => array(
                    'img' => array( 'type' => 'upload' ),
                    'name' => array( 'type' => 'text' ),
                )
            ),
            'advantage_three' => array(
                'type'  => 'multi',
                'value' => array(
                    'img' => '',
                    'name' => 'Innovative Design',
                ),
                'label' => __('Информация преимущества', '{domain}'),
                'inner-options' => array(
                    'img' => array( 'type' => 'upload' ),
                    'name' => array( 'type' => 'text' ),
                )
            )


        ),
    ),
    'design' => array(
        'title' => __('Секция дизайна', '{domain}'),
        'options' => array(
            'design_title' => array(
                'type' => 'text',
                'value' => 'we Do the design of any complexity',
                'label' => __('Название секции', '{domain}')
            ),
            'design_text' => array(
                'type' => 'textarea',
                'value' => 'This is a team of professionals that make the furniture and wood décor high standard. Creating modern designs. Adhering to the global quality standards. And we are doing work with love.',
                'label' => __('Текст секции', '{domain}'),
            ),
            'design_button_text' => array(
                'type' => 'text',
                'value' => 'watch video',
                'label' => __('Текст кнопки секции', '{domain}')
            ),
            'design_bg' => array(
                'type'  => 'upload',
                'label' => __('Загрузите фон секции', '{domain}'),
                'images_only' => true,
            )
        ),
    ),
    'about' => array(
        'title' => __('Секция о нас', '{domain}'),
        'options' => array(
            'about_title' => array(
                'type' => 'text',
                'value' => 'About us',
                'label' => __('Название секции', '{domain}')
            ),
            'about_text' => array(
                'type' => 'textarea',
                'value' => 'We are a team of professionals in the wood processing and the creation of wooden furniture of the highest class',
                'label' => __('Текст секции', '{domain}'),
            ),
            'about_button_text' => array(
                'type' => 'text',
                'value' => 'Learn more',
                'label' => __('Текст кнопки секции', '{domain}')
            ),
            'about_img' => array(
                'type'  => 'upload',
                'label' => __('Загрузите картинку', '{domain}'),
                'images_only' => true,
            )
        ),
    ),
    'footer' => array(
        'title' => __('Футер', '{domain}'),
        'options' => array(
            'footer_rights' => array(
                'type' => 'text',
                'value' => 'About us',
                'label' => __('Лицензия', '{domain}')
            ),
            'footer_author' => array(
                'type' => 'text',
                'value' => 'Viacheslav Olianishyn',
                'label' => __('Дизайнер', '{domain}')
            ),
        ),
    ),
);