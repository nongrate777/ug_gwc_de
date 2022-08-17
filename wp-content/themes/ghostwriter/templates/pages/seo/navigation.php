<?php if ($navigation = carbon_get_post_meta(get_the_ID(), 'de_navigation')) { ?>
    <div class="navigation-page">
        <div class="container">
            <ul>
                <?php foreach ($navigation as $nav) { ?>
                    <li><a href="#<?= $nav['anchor']; ?>"><?= $nav['text']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php
}
?>
<div class="container">
    <div class="author-panel">
        <div class="author-panel__item">
            <span>Autor, Doctor</span>
            <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?= get_the_author_meta('display_name', get_the_author_meta('ID')); ?>
            </a>
        </div>
        <div class="author-panel__item">
            <span>Aktualisiert</span>
            <time class="text-time"><?= get_the_date(); ?></time>
        </div>
        <div class="author-panel__item">
            <span>Erneut</span>
            <time class="text-time"><?= get_the_modified_date(); ?></time>
        </div>
    </div>
</div>
