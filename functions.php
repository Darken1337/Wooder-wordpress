<?php

if( ! defined('ABSPATH') ) {
	die();
}

/**
 * Отключить админ павнель
 */

 if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
}

/**
 * Отфильтровать аттрибуты меню
 */

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);

    function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
    {
        if($args->theme_location === 'header_menu'){
            $atts['class'] = 'header-menu__link';
        }elseif($args->theme_location === 'adaptive_menu'){
			$atts['class'] = 'header-menu-adaptive__link';
		}
        return $atts;
	}
	
add_filter('nav_menu_item_id', 'filter_nav_menu_item_id', 10, 4);

function filter_nav_menu_item_id($menu_id, $item, $args, $depth)
{
	return $args->theme_location === 'header_menu' || $args->theme_location === 'adaptive_menu' || $args->theme_location === 'socials_menu' ? '' : $menu_id;
}

add_filter('nav_menu_css_class', 'filter_nav_menu_css_class', 10, 4);

function filter_nav_menu_css_class($classes, $item, $args, $depth)
{
    if($args->theme_location === 'socials_menu'){
        $classes = [
            'socials-icon'
        ];
    }
    return $classes;
}

if ( ! function_exists( 'wooder_setup' ) ) :

	function wooder_setup() {

		load_theme_textdomain( 'wooder', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'menus' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) ); 

		add_image_size('product-picture', 595, 383, true);

	}
endif;
add_action( 'after_setup_theme', 'wooder_setup' );

function theme_register_nav_menus(){
	register_nav_menus([
		'header_menu' => 'Меню в шапке',
		'adaptive_menu' => 'Адаптивное меню',
		'socials_menu'	=> 'Меню соц сетей'
	]);
}

add_action('after_setup_theme', 'theme_register_nav_menus');


/**
 * Enqueue scripts and styles.
 */
function wooder_scripts() {

	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/styles.min.css', array('style'));

	wp_enqueue_script('jquery');

	wp_enqueue_script('default', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'),'',true);
}

add_action( 'wp_enqueue_scripts', 'wooder_scripts' );

function my_custom_post_types( ){

	register_post_type( 'product', array(
		'labels'             => array(
			'name'               => 'Услуги', // Основное название типа записи
			'singular_name'      => 'Услуга', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          => 'Услуг не найдено',
			'not_found_in_trash' => 'В корзине Услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null
	) );
}

add_action( 'init', 'my_custom_post_types' );

