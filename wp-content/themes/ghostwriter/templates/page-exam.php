<?php
/** Template Name: Онлайн экзамен */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/components/first-screen');
    get_template_part('templates/components/content');
    get_template_part('templates/components/text');
    get_template_part('templates/components/banner');
    get_template_part('templates/pages/exam/pros-cons');
    get_template_part('templates/pages/exam/text1');
    get_template_part('templates/components/orange-blocks');
    get_template_part('templates/pages/exam/text2');
    get_template_part('templates/pages/exam/form');
    get_template_part('templates/components/experience');
    get_template_part('templates/pages/exam/exam-list');
    get_template_part('templates/components/specialties');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}

get_footer();