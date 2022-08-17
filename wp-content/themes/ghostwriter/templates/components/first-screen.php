<?php
$id = is_front_page() ? DE_HOMEPAGE : get_the_ID();
$type = carbon_get_post_meta($id, 'de_style_first_screen');
$title = carbon_get_post_meta($id, 'de_title');
$desc = wpautop(carbon_get_post_meta($id, 'de_desc'));
$image = carbon_get_post_meta($id, 'de_image');

// Главная страница
if ($type === 'type2') {
    ?>
    <div class="first-screen home-page">
        <div class="container">
            <div class="first-screen__main">
                <div class="first-screen__column">
                    <img src="<?= $image; ?>" alt="<?= $title; ?>" />
                    <?php get_template_part('templates/components/orange-static-blocks'); ?>
                </div>
                <div class="first-screen__column">
                    <div class="first-screen__title">
                        <h1><?= $title; ?></h1>
                        <?= $desc; ?>
                    </div>
                </div>
            </div>
            <?= apply_filters('the_content', carbon_get_post_meta($id, 'de_form_home')); ?>
        </div>
    </div>
    <?php
    // Без текста и с текстом
} elseif ($type === 'type1') {
    ?>
    <div class="first-screen text-and-no-text _light-white">
        <?php get_template_part('templates/components/breadcrumbs'); ?>
        <div class="container">
            <div class="first-screen__main">
                <div class="first-screen__column">
                    <img src="<?= $image; ?>" alt="<?= $title; ?>" />
                </div>
                <div class="first-screen__column">
                    <div class="first-screen__title">
                        <h1><?= $title; ?></h1>
                        <?= $desc; ?>
                    </div>
                    <div class="first-screen__inner-column">
                        <div>
                            <?php get_template_part('templates/components/orange-static-blocks'); ?>
                        </div>
                        <div>
                            <div class="first-screen__form">
                                <?php get_template_part('templates/components/form-small'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="first-screen default">
        <?php get_template_part('templates/components/breadcrumbs'); ?>
        <div class="container">
            <h1><?= $title; ?></h1>
        </div>
        <div class="_light-white">
            <div class="default-content">
                <div class="container">
                    <div class="first-screen__main">
                        <div class="first-screen__column">
                            <img src="<?= $image; ?>" alt="<?= $title; ?>" />
                        </div>
                        <div class="first-screen__column">
                            <div class="first-screen__title">
                                <?= $desc; ?>
                            </div>
                            <?php get_template_part('templates/components/orange-static-blocks'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>