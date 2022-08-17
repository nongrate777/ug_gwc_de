<?php
/** Template Name: О нас */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/components/first-screen');
    get_template_part('templates/pages/about/photo');
    get_template_part('templates/components/experience');
    get_template_part('templates/pages/about/form');
    get_template_part('templates/components/advantages');
    get_template_part('templates/pages/about/after-advantages');
    get_template_part('templates/components/form-big-container');
    get_template_part('templates/components/managers');
    get_template_part('templates/components/content');
    get_template_part('templates/components/specialties');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}

get_footer();