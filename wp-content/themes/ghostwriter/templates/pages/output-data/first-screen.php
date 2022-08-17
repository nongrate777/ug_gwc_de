<?php
$id = get_the_ID();
$context = [
    'fs_title' => carbon_get_post_meta($id, 'de_title'),
    'fs_desc' => wpautop(carbon_get_post_meta($id, 'de_desc')),
    'fs_image' => carbon_get_post_meta($id, 'de_image'),
];
?>
<div class="first-screen default">
    <?php get_template_part('templates/components/breadcrumbs'); ?>
    <div class="container">
        <h1><?= $context['fs_title']; ?></h1>
    </div>
    <div class="_light-white default-content">
        <div class="container">
            <div class="first-screen__main">
                <div class="first-screen__column">
                    <img src="<?= $context['fs_image']; ?>" alt="<?= $context['fs_title']; ?>" />
                </div>
                <div class="first-screen__column">
                    <div class="first-screen__title">
                        <?= $context['fs_desc']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>