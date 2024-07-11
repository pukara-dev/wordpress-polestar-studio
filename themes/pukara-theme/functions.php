<?php

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => esc_html__('Primary menu', 'puk-menu'),
            'footer' => __('Secondary menu', 'puk-menu'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}


function theme_scripts()
{
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/main.min.css', array(), null);
}

add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'theme_scripts');

function your_theme_setup()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'your_theme_setup');

function your_theme_scripts()
{
    // Enfileirar o JavaScript para o menu toggle
    wp_enqueue_script('menu-toggle', get_template_directory_uri() . '/js/menu-toggle.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'your_theme_scripts');