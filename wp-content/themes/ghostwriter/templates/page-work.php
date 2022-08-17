<?php
/** Template Name: Как мы работаем */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/components/first-screen');
    get_template_part('templates/components/content');
    get_template_part('templates/components/experience');
    get_template_part('templates/pages/work/after-experience');
    get_template_part('templates/components/specialties');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}

get_footer();