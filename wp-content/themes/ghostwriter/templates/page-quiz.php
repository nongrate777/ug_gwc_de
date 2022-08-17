<?php
/** Template Name: Квиз */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/pages/quiz/first-screen');
    // get_template_part('templates/components/text');
    get_template_part('templates/pages/quiz/after-text');
    get_template_part('templates/pages/quiz/content');
    // get_template_part('templates/pages/faq/last-text');
    get_template_part('templates/components/contacts');
}

get_footer();