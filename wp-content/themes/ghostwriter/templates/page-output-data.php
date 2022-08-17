<?php
/** Template Name: Выходные данные */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/pages/output-data/first-screen');
    get_template_part('templates/components/content');
    get_template_part('templates/pages/output-data/form');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}

get_footer();