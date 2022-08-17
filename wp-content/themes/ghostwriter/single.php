<?php
get_header();
while (have_posts()) {
    the_post();
    get_template_part('templates/components/breadcrumbs');
    get_template_part('templates/single/content');
    get_template_part('templates/components/reviews');
    get_template_part('templates/components/faq');
    get_template_part('templates/components/contacts');
}
get_footer();