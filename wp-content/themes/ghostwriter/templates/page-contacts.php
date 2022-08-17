<?php

/** Template Name: Контакты */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/pages/contacts/first-screen');
    get_template_part('templates/components/managers');
    get_template_part('templates/components/experience');
    get_template_part('templates/components/content');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}

get_footer();