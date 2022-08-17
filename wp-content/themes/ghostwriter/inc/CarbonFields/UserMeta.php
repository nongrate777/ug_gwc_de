<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class UserMeta
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', [$this, 'addFields']);
    }

    public function addFields()
    {
        Container::make('user_meta', 'carbon_fields_container_user_meta', 'Настройки пользователя')
            ->add_fields([
                Field::make('image', 'de_avatar', 'Фотография пользователя')
                    ->set_value_type('url')
                    ->set_type('image'),
                Field::make('rich_text', 'de_user_short', 'Описание пользователя'),
                Field::make('text', 'de_user_post', 'Должность'),
                Field::make('text', 'de_user_phone', 'Телефон'),
                Field::make('text', 'de_user_skype', 'Логин скайп'),
                Field::make('text', 'de_user_time', 'Время работы'),
            ])
        ;
    }
}

new UserMeta();