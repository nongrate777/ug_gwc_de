<?php

use Carbon_Fields\Field;

class CommonMeta
{
    public static function firstScreen(): array
    {
        return [
            Field::make('select', 'de_style_first_screen', 'Шаблон первого экрана')
                ->set_options([
                    'type1' => 'Без текста и с текстом',
                    'type2' => 'Главная страница',
                    'type3' => 'Информационная страница',
                ]),
            Field::make('image', 'de_image', 'Картинка')
                ->set_value_type('url')
                ->set_type(['image'])
                ->set_width(20),
            Field::make('text', 'de_title', 'Заголовок H1')
                ->set_width(80),
            Field::make('rich_text', 'de_desc', 'Описание'),
            Field::make('rich_text', 'de_form_home', 'Форма для шаблона главной странице'),
        ];
    }

    public static function faqMeta(): array
    {
        return [
            Field::make('complex', 'de_faq', 'FAQ')
                ->add_fields([
                    Field::make('text', 'question', 'Вопрос'),
                    Field::make('rich_text', 'answer', 'Ответ'),
                ])
        ];
    }

    public static function customBlockImageLeft(): array
    {
        return [
            Field::make('text', 'de_custom_block_first_title', 'Заголовок'),
            Field::make('complex', 'de_custom_block_first', 'Блок картинка слева')
                ->add_fields([
                    Field::make('image', 'image', 'Картинка')
                        ->set_width(30)
                        ->set_value_type('url')
                        ->set_type(['image']),
                    Field::make('rich_text', 'text', 'Текст')
                        ->set_width(70),
                ])
        ];
    }

    public static function customBlockImageLeftAndRight(): array
    {
        return [
            Field::make('text', 'de_custom_block_next_title', 'Заголовок раздела'),
            Field::make('complex', 'de_custom_block_next', 'Блок-картинка слева/справа')
                ->add_fields([
                    Field::make('image', 'image', 'Картинка')
                        ->set_width(30),
                    Field::make('rich_text', 'text', 'Текст')
                        ->set_width(70),
                ])
        ];
    }

    public static function customColumnsBlock(): array
    {
        return [
            Field::make('text', 'de_custom_block_last_title', 'Заголовок'),
            Field::make('rich_text', 'de_custom_block_last_subtitle', 'Текст под разделом'),
            Field::make('complex', 'de_custom_block_last', 'Блоки по 3 в колонку')
                ->add_fields([
                    Field::make('image', 'image', 'Картинка')
                        ->set_width(30)
                        ->set_value_type('url')
                        ->set_type(['image']),
                    Field::make('rich_text', 'text', 'Текст')
                        ->set_width(70),
                ])
        ];
    }

    public static function priceFields(): array
    {
        return [
            Field::make('complex', 'de_prices', 'Цены')
                ->add_fields([
                    Field::make('text', 'title', 'Заголовок')
                        ->set_width(50),
                    Field::make('text', 'price', 'Цена')
                        ->set_width(50),
                ])
        ];
    }

    public static function orangeBlocks(): array
    {
        return [
            Field::make('text', 'de_orange_title', 'Заголовок'),
            Field::make('complex', 'de_orange', 'Оранжевые блоки')
                ->add_fields([
                    Field::make('text', 'text', 'Текст')
                ])
        ];
    }
}