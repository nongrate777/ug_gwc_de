<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PageMeta
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', [$this, 'homePageFields']);
        add_action('carbon_fields_register_fields', [$this, 'aboutUsPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'contactsPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'workPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'examPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'outputDataPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'examplesPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'faqPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'riskPageFields']);
        add_action('carbon_fields_register_fields', [$this, 'pricePageFields']);
        add_action('carbon_fields_register_fields', [$this, 'seoPageFields']);
    }

    public function homePageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_home_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-home.php')
            ->add_tab('Глобальные настройки', [
                Field::make('text', 'de_phone', 'Телефон')
                    ->help_text('Указывается глобально для всего сайта')
                    ->set_width(50),
                Field::make('text', 'de_mail', 'Электронная почта')
                    ->help_text('Указывается глобально для всего сайта')
                    ->set_width(50),
                Field::make('text', 'de_address', 'Адрес')
                    ->help_text('Указывается глобально для всего сайта')
                    ->set_width(50),
                Field::make('text', 'de_work', 'Режим работы')
                    ->help_text('Указывается глобально для всего сайта')
                    ->set_width(50),
                Field::make('text', 'de_facebook', 'Facebook')
                    ->help_text('Указывается глобально для всего сайта')
                    ->set_width(50),
                Field::make('text', 'de_soc_instagram', 'Instagram')
                    ->help_text('Указывается глобально для всего сайта')
                    ->set_width(50),
                Field::make('rich_text', 'de_footer_info', 'Информация в подвале'),
                Field::make('text', 'de_footer_copy', 'Копирайт'),
            ])
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('Блок-картинка слева', CommonMeta::customBlockImageLeft())
            ->add_tab('Цены', CommonMeta::priceFields())
            ->add_tab('Блок-картинка слева/справа', CommonMeta::customBlockImageLeftAndRight())
            ->add_tab('Блоки по 3 в колонку', CommonMeta::customColumnsBlock())
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function aboutUsPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_about_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-about.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('Блок-картинка слева', CommonMeta::customBlockImageLeft())
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function contactsPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_contacts_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-contacts.php')
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function workPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_home_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-work.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function examPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_work_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-exam.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('Блок-картинка слева/справа', CommonMeta::customBlockImageLeftAndRight())
            ->add_tab('Плюсы/Минусы', [
                Field::make('text', 'de_pros_cons_title', 'Заголовок'),
                Field::make('complex', 'de_pros', 'Плюсы')
                    ->add_fields([
                        Field::make('text', 'text', 'Плюсы')
                    ]),
                Field::make('complex', 'de_cons', 'Минусы')
                    ->add_fields([
                        Field::make('text', 'text', 'Минусы')
                    ])
            ])
            ->add_tab('Текст 1', [
                Field::make('rich_text', 'text_exam_1', 'Текст')
            ])
            ->add_tab('Оранжевые блоки', CommonMeta::orangeBlocks())
            ->add_tab('Текст 2', [
                Field::make('rich_text', 'text_exam_2', 'Текст')
            ])
            ->add_tab('Аббревиатуры', [
                Field::make('text', 'de_abbreviations_title', 'Заголовок'),
                Field::make('complex', 'de_abbreviations', 'Аббревиатуры')
                    ->add_fields([
                        Field::make('text', 'abc', 'Аббревиатура')
                            ->set_width(20),
                        Field::make('text', 'text', 'Название')
                            ->set_width(80)
                    ])
            ])
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function outputDataPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_output_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-output-data.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function examplesPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_examples_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-examples.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('Работы', [
                Field::make('complex', 'de_example_work', 'Работы')
                    ->add_fields([
                        Field::make('file', 'file', 'Файл')
                            ->set_width(20),
                        Field::make('text', 'direction', 'Направление')
                            ->set_width(20),
                        Field::make('select', 'type', 'Вид работы')
                            ->set_options(Helper::type())
                            ->set_width(20),
                        Field::make('text', 'uniqueness', 'Уникальность')
                            ->set_width(10),
                        Field::make('text', 'pages', 'Страницы')
                            ->set_width(10),
                        Field::make('text', 'text', 'Название')
                            ->set_width(20)
                    ])
            ])
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function faqPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_faq_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-faq.php')
            ->add_tab('Блок-картинка слева/справа', CommonMeta::customBlockImageLeftAndRight())
            ->add_tab('Последний блок', [
                Field::make('rich_text', 'text_faq', 'Текст')
            ])
        ;
    }

    public function riskPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_risk_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-risk.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
        ;
    }

    public function pricePageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_price_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-price.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('Таблицы', [
                Field::make('complex', 'de_tables', 'Таблицы')
                    ->add_fields([
                        Field::make('rich_text', 'text', 'Текст'),
                    ])
            ])
            ->add_tab('Блоки по 3 в колонку', CommonMeta::customColumnsBlock())
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }

    public function seoPageFields()
    {
        Container::make('post_meta', 'carbon_fields_container_seo_page', 'Глобальные настройки')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'templates/page-seo.php')
            ->add_tab('Первый экран', CommonMeta::firstScreen())
            ->add_tab('Навигация', [
                Field::make('complex', 'de_navigation', 'Навигация')
                    ->add_fields([
                        Field::make('text', 'anchor', 'Якорь')
                            ->set_width(50),
                        Field::make('text', 'text', 'Текст')
                            ->set_width(50),
                    ])
            ])
            ->add_tab('Оранжевые блоки', [
                Field::make('text', 'de_tiles_title', 'Заголовок'),
                Field::make('complex', 'de_tiles_blocks', 'Блоки')
                    ->add_fields([
                        Field::make('text', 'text', 'Текст')
                    ])
            ])
            ->add_tab('Текст', [
                Field::make('rich_text', 'text_1', 'Текст')
            ])
            ->add_tab('Текст/черный фон', [
                Field::make('rich_text', 'text_black_fon', 'Текст')
            ])
            ->add_tab('Блок со скроллом', [
                Field::make('image', 'de_wp_image', 'Картинка')
                    ->set_value_type('url')
                    ->set_type(['image'])
                    ->set_width(30),
                Field::make('text', 'de_wp_title', 'Заголовок')
                    ->set_width(70),
                Field::make('complex', 'de_wp_block', 'Блоки')
                    ->add_fields([
                        Field::make('text', 'text', 'Текст')
                    ])
            ])
			->add_tab('Цены', CommonMeta::priceFields())
            ->add_tab('Блок-картинка слева', CommonMeta::customBlockImageLeft())
            ->add_tab('Блок-картинка слева/справа', CommonMeta::customBlockImageLeftAndRight())
            ->add_tab('Блоки по 3 в колонку', CommonMeta::customColumnsBlock())
            ->add_tab('FAQ', CommonMeta::faqMeta())
        ;
    }
}

new PageMeta();