<?php

class CustomPostType
{
    public function __construct()
    {
        add_action('init', [$this, 'reviewsPostType']);
    }

    public function reviewsPostType()
    {
        register_post_type('reviews', [
            'labels' => [
                'name' => 'Отзывы',
                'singular_name' => 'Отзывы',
                'add_new' => 'Добавить отзыв',
                'add_new_item' => 'Добавление отзыва',
                'edit_item' => 'Редактирование отзыва',
                'new_item' => 'Новый отзыв',
                'view_item' => 'Смотреть отзыв',
                'search_items' => 'Искать отзыв',
                'not_found' => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name' => 'Отзывы',
            ],
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-admin-comments',
            'hierarchical' => true,
            'supports' => ['title', 'editor'],
            'taxonomies' => [],
            'has_archive' => false,
            'rewrite' => true,
            'query_var' => true,
        ]);
    }
}

new CustomPostType();
