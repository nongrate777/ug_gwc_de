<?php
get_header();

while (have_posts()) {
    the_post();

    echo '<div class="container"><h1>' . get_the_title() . '</h1></div>';
    get_template_part('templates/components/content');
}

get_footer();