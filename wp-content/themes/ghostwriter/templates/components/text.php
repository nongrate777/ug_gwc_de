<?php
$id = is_front_page() ? DE_HOMEPAGE : get_the_ID();
$items = carbon_get_post_meta($id, 'de_custom_block_next');
if ($items) {
    ?>
    <div class="_white main-padding info-block">
        <div class="container">
            <div class="_center">
                <h2><?= carbon_get_post_meta(get_the_ID(), 'de_custom_block_next_title'); ?></h2>
            </div>
            <?php foreach ($items as $item) { ?>
                <div class="info-block__wrap default-content">
                    <div class="info-block__text">
                        <?= wpautop($item['text']); ?>
                    </div>
                    <div class="info-block__images">
                        <?= wp_get_attachment_image($item['image'], 'large'); ?>
                        <div style="margin-top: 16px; text-align: left">
                            <?= wp_get_attachment_caption($item['image']); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="_center">
                <h3 style="text-align: center; text-transform: uppercase">
                    <span style="color: #FF522F;">Finden Sie jetzt Ihren persönlichen Ghostwriter!</span>
                </h3>
                <a class="btn btn__square btn__square_orange js-open-popup"
                   href="javascript:void(0);"
                   data-id="popup-form"
                >
                    Bestellung von
                </a>
            </div>
        </div>
    </div>
<?php } ?>