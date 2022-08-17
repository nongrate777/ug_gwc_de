<?php

use Carbon_Fields\Container;

class TermMeta
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', [$this, 'customFields']);
    }

    public function customFields()
    {
        Container::make('term_meta', 'carbon_fields_container_terms', 'Настройки категории')
            ->add_fields(CommonMeta::faqMeta())
        ;
    }
}

new TermMeta();