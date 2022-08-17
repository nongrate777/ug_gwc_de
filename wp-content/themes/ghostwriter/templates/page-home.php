<?php
/** Template Name: Главная страница */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/components/first-screen');
    get_template_part('templates/components/experience');
    get_template_part('templates/components/content');
    get_template_part('templates/components/form-big-container');
    get_template_part('templates/components/advantages');
    get_template_part('templates/components/banner');
    get_template_part('templates/components/price');
    get_template_part('templates/pages/home/after-price');
    get_template_part('templates/components/text');
    get_template_part('templates/components/reasons');
    get_template_part('templates/components/specialties');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/blog');
    get_template_part('templates/components/contacts');
}

get_footer();