<?php
$id = is_front_page() ? DE_HOMEPAGE : get_the_ID();
$items = carbon_get_post_meta($id, 'de_custom_block_last');
if ($items) {
    ?>
    <div class="reasons main-padding _white">
        <div class="container">
            <h2 class="_center"><?= carbon_get_post_meta($id, 'de_custom_block_last_title'); ?></h2>
            <div class="reasons__items">
                <?php foreach ($items as $item) { ?>
                    <div class="reasons__item">
                        <div class="reasons__item-image">
                            <img src="<?= $item['image']; ?>" alt="Ghostwriting" />
                        </div>
                        <div class="reasons__item-description">
                            <?= wpautop($item['text']); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br />
            <?= wpautop(carbon_get_post_meta(get_the_ID(), 'de_custom_block_last_subtitle')); ?>
            <div class="_center">
                <a class="btn btn__square btn__square_orange js-open-popup"
                   href="javascript:void(0);"
                   data-id="popup-form"
                >
                    JETZT ANFRAGEN
                </a>
            </div>
        </div>
    </div>
<?php } ?>