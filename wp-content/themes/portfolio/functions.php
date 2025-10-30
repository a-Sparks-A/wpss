<?php

function creator_portfolio_setup() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(
        array(
            'main-menu' => esc_html__('Главное меню', 'creator-portfolio'),
        )
    );
}
add_action('after_setup_theme', 'creator_portfolio_setup');


function creator_portfolio_scripts() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');
    wp_enqueue_style('creator-portfolio-style', get_stylesheet_uri(), array('bootstrap'), '1.0');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);
}
add_action('wp_enqueue_scripts', 'creator_portfolio_scripts');

function creator_portfolio_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Главный сайдбар', 'creator-portfolio'),
            'id'            => 'main-sidebar',
            'description'   => esc_html__('Добавьте сюда виджеты для отображения на страницах блога.', 'creator-portfolio'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action('widgets_init', 'creator_portfolio_widgets_init');

function create_portfolio_post_type() {
    $labels = array(
        'name'               => 'Портфолио',
        'singular_name'      => 'Работа',
        'menu_name'          => 'Портфолио',
        'name_admin_bar'     => 'Работу',
        'add_new'            => 'Добавить новую',
        'add_new_item'       => 'Добавить новую работу',
        'new_item'           => 'Новая работа',
        'edit_item'          => 'Редактировать работу',
        'view_item'          => 'Посмотреть работу',
        'all_items'          => 'Все работы',
        'search_items'       => 'Искать работы',
        'parent_item_colon'  => 'Родительские работы:',
        'not_found'          => 'Работы не найдены.',
        'not_found_in_trash' => 'Работы в корзине не найдены.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_post_type');
