<div class="container">
    <h1><?= get_the_title(); ?></h1>
</div>
<div class="_light-white main-padding">
    <div class="container">
        <div class="single-container">
            <div id="article" class="single-content">
                <div class="author-panel">
                    <div class="author-panel__item">
                        <span>Autor, Doctor</span>
                        <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?= get_the_author_meta('display_name', get_the_author_meta('ID')); ?>
                        </a>
                    </div>
                    <div class="author-panel__item">
                        <span>Veröffentlicht</span>
                        <time class="text-time"><?= get_the_date(); ?></time>
                    </div>
                </div>
                <div class="single-image">
                    <?= get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                </div>
                <?= apply_filters('the_content', get_the_content()); ?>
                <?php
                $contents = carbon_get_post_meta(get_the_ID(), 'de_slider');
                if (!empty($contents)) {
                    ?>
                    <div class="single-list">
                        <?php foreach ($contents as $key => $content) { ?>
                            <a class="single-list-item" href="#section-<?= $key; ?>">
                                <?= $content['title']; ?>
                            </a>
                            <br/>
                        <?php } ?>
                    </div>
                    <?php foreach ($contents as $key => $content) { ?>
                        <div id="section-<?= $key; ?>" class="single-text">
                            <div class="single-text-title">
                                <h2><?= $content['title']; ?></h2>
                            </div>
                            <div class="single-text-content">
                                <?= apply_filters('the_content', $content['text']); ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <?php get_template_part('templates/components/author'); ?>
            </div>
            <div id="aside1" class="single-sidebar">
                <?php get_template_part('templates/components/form-small3'); ?>
            </div>
        </div>
    </div>
</div>
<div class="js-fixes-block-end"></div>