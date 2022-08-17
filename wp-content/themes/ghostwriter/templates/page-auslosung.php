<?php

/** Template Name: Auslosung */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/pages/faq/first-screen');
     
    get_template_part('templates/components/content');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}

get_footer();