<?php
$context = [
    'fs_title' => carbon_get_post_meta(get_the_ID(), 'de_title'),
    'fs_desc' => wpautop(carbon_get_post_meta(get_the_ID(), 'de_desc')),
    'fs_image' => carbon_get_post_meta(get_the_ID(), 'de_image'),
];
?>
<div class="container">
    <h1><?= $context['fs_title']; ?></h1>
</div>
<div class="first-screen experience main-padding _light-white">
    <div class="container">
        <div class="first-screen__image__text">
            <div class="first-screen__image">
                <img src="<?= $context['fs_image']; ?>" alt="<?= $context['fs_title']; ?>" />
            </div>
            <div class="first-screen__text">
                <?= $context['fs_desc']; ?>
                <?php get_template_part('templates/components/orange-static-blocks'); ?>
            </div>
        </div>
        <br />
        <h3 class="_center">WSie sehen gro ße Hürden bei bevorstehenden Prüfungen?</h3>
        <h3 class="signature__main signature_orange">Prüfungen einfach, stressfrei und sicher bewältigen: unser Service.</h3>
        <p class="_center">Prüfungen einfach, stressfrei und sicher bewältigen: unser Service.</p>
        <div class="block-text-v2__content-btn">
            <a href="javascript:void(0);" class="btn btn__square btn__square_orange js-open-popup" data-id="popup-form">
                JETZT ANFRAGEN
            </a>
        </div>
    </div>
</div>

