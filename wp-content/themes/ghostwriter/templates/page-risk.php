<?php
/** Template Name: Залоги и риски */

get_header(); 

while (have_posts()) {
    the_post();
    get_template_part('templates/components/first-screen');
    get_template_part('templates/components/content');
    get_template_part('templates/pages/risk/form');
}

get_footer();