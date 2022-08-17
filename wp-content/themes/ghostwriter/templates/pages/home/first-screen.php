<?php
$context = [
    'fs_title' => carbon_get_post_meta(DE_HOMEPAGE, 'de_title'),
    'fs_desc' => wpautop(carbon_get_post_meta(DE_HOMEPAGE, 'de_desc')),
    'fs_image' => carbon_get_post_meta(DE_HOMEPAGE, 'de_image'),
];
?>
<div class="first-screen experience main-padding _light-white">
    <div class="container">
        <div class="first-screen__image__text">
            <div class="first-screen__image">
                <img src="<?= $context['fs_image']; ?>" alt="<?= $context['fs_title']; ?>"/>
            </div>
            <div class="first-screen__text">
                <h1><?= $context['fs_title']; ?></h1>
                <?= $context['fs_desc']; ?>
            </div>
        </div>
        <div class="first-screen__text-footer">
            <h2>
                Dringende Hilfe beim Erstellen von studentischen Arbeiten<br/>
                <span class="_color-red">Unmögliches in ein bis zwei Tagen möglich machen!</span>
            </h2>
            <p>Wir verfassen alle Arten wissenschaftlicher Arbeiten zu jeglichem Thema. Wir erledigen
                sowohl dringende, als auch extra dringende Aufträge!</p>
        </div>
        <div class="first-screen__form">
            <?php get_template_part('templates/components/form-small'); ?>
        </div>
    </div>
</div>

