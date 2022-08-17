<?php
$id = get_the_ID();
$context = [
    'fs_title' => carbon_get_post_meta($id, 'de_title'),
    'fs_desc' => wpautop(carbon_get_post_meta($id, 'de_desc')),
    'fs_image' => carbon_get_post_meta($id, 'de_image'),
];
?>
<div class="_light-white">
    <?php get_template_part('templates/components/breadcrumbs'); ?>
    <div class="container">
        <div class="work-examples">
            <div class="work-examples__title">
                <h1><?= $context['fs_title']; ?></h1>
            </div>
            <div class="work-examples__content">
                <div class="work-examples__content-item">
                    <img src="<?= $context['fs_image']; ?>" alt="<?= $context['fs_title']; ?>" />
                </div>
                <div class="work-examples__content-item">
                    <div class="work-examples__content-text">
                        <?= $context['fs_desc']; ?>
                    </div>
                    <div class="work-examples__content-search">
                        <div class="work-examples__content-title">
                            Suche nach einem Arbeiten
                        </div>
                        <div class="work-examples__content-form">
                            <div class="form-wrap2">
                                <div class="form-search">
                                    <label>Suchen...</label>
                                    <input type="text" class="form-search__input searcher" name="search" placeholder="suchen...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-examples__card">
                <div class="work-examples__card-item2">
                    <div class="work-examples__card-item2-title">
                        <span>Fachrichtung</span>
                    </div>
                    <div class="work-examples__card-item2-content">
                        <div class="work-examples__card-item2-text">
                            <select name="type" class="form-select selectel">
                                <option value="0">Alle</option>
                                <?= get_template_part('templates/components/selects/options-type') ?>
                            </select>
                        </div>
                        <div class="work-examples__card-item2-text">Thema</div>
                        <div class="work-examples__card-item2-text">Einzigartigkeit</div>
                        <div class="work-examples__card-item2-text">Seitenanzahl</div>
                    </div>
                </div>

                <?php foreach (carbon_get_post_meta(get_the_ID(), 'de_example_work') as $item) { ?>
                    <div class="work-examples__card-item">
                        <div class="work-examples__card-item-title">
                            <?= $item['direction']; ?>
                        </div>
                        <div class="work-examples__card-item-content">
                            <div class="work-examples__card-item-text item-theme">
                                <?= Helper::type($item['type']); ?>
                            </div>
                            <div class="work-examples__card-item-text item-name">
                                <?= $item['text']; ?>
                            </div>
                            <div class="work-examples__card-item-text">
                                <a href="<?= wp_get_attachment_url($item['file']); ?>"
                                   class="work-examples__card-item-popup"
                                   target="_blank"
                                >
                                    <div class="work-examples__card-item-hidden">
                                        Dokument ansehen
                                    </div>
                                </a>
                                <?php
                                $file = get_attached_file($item['file']);
                                $fileSize = filesize($file);
                                echo sprintf('%s&#37; (%s)', $item['uniqueness'], size_format($fileSize));
                                ?>
                            </div>
                            <div class="work-examples__card-item-text">
                                <a href="<?= wp_get_attachment_url($item['file']); ?>"
                                   class="work-examples__card-item-popup2"
                                   download
                                >
                                    <div class="work-examples__card-item-hidden">
                                        Dokument herunterladen
                                    </div>
                                </a>
                                <?php
                                $file = get_attached_file($item['file']);
                                $fileSize = filesize($file);
                                echo sprintf('%s (%s)', $item['pages'], size_format($fileSize));
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>