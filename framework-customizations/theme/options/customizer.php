<?php if (!defined( 'FW' )) die('Forbidden');

    require get_template_directory() . '/framework-customizations/theme/options/pages-meta/main-page-meta.php';

    $options = array(
    'theme_options' => array(
        'title' => __('Настройки контента главной страницы', '{domain}'),
        'options' => $main_page_options
        )
    );


    