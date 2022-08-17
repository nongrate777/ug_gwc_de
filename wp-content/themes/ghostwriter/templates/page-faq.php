<?php
/** Template Name: FAQ */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/pages/faq/first-screen');
    get_template_part('templates/components/text');
    get_template_part('templates/pages/faq/after-text');
    get_template_part('templates/pages/faq/content');
    get_template_part('templates/pages/faq/last-text');
    get_template_part('templates/components/contacts');
}

get_footer();