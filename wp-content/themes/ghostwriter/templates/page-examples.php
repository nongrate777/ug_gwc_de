<?php
/** Template Name: Примеры выполненных работ */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/pages/example/list');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}

get_footer();