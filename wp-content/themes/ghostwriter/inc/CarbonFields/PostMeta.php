<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PostMeta
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', [$this, 'blogMetaFields']);
        add_action('carbon_fields_register_fields', [$this, 'reviewsMetaFields']);
    }

    public function blogMetaFields()
    {
        Container::make('post_meta', 'carbon_fields_container_blog', 'Настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'post')
            ->add_tab('Контент', [
                Field::make('complex', 'de_slider', 'Контент')
                    ->add_fields([
                        Field::make('text', 'title', 'Заголовок'),
                        Field::make('rich_text', 'text', 'Текст'),
                    ])
            ])
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function reviewsMetaFields()
    {
        Container::make('post_meta', 'carbon_fields_container_blog', 'Настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'reviews')
            ->add_fields([
                Field::make('text', 'city', 'Город')
                    ->set_width(33),
                Field::make('text', 'num', 'Оценка')
                    ->set_attribute('type', 'number')
                    ->set_width(33),
                Field::make('text', 'title', 'Заголовок')
                    ->set_width(33)
            ])
        ;
    }
}

new PostMeta();