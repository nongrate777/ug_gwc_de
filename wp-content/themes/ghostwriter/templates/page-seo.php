<?php
/** Template Name: СЕО страница */

get_header();

while (have_posts()) {
    the_post();
    get_template_part('templates/components/first-screen');
    get_template_part('templates/pages/seo/navigation');
    get_template_part('templates/pages/seo/content');
    get_template_part('templates/pages/seo/tiles');
    get_template_part('templates/pages/seo/text');
    get_template_part('templates/pages/seo/text-black-fon');
    get_template_part('templates/pages/seo/writing-process');
    get_template_part('templates/components/advantages');
    get_template_part('templates/components/form-big-container');
    get_template_part('templates/components/text');
	get_template_part('templates/components/price');
    get_template_part('templates/components/reasons');
    get_template_part('templates/components/specialties');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/contacts');
}

get_footer();