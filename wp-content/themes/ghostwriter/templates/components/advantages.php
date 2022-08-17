<?php
$id = is_front_page() ? DE_HOMEPAGE : get_the_ID();
$items = carbon_get_post_meta($id, 'de_custom_block_first');
if ($items) {
    ?>
    <div class="advantages main-padding">
        <div class="container">
            <h2 class="_center"><?= carbon_get_post_meta($id, 'de_custom_block_first_title'); ?></h2>
            <?php foreach ($items as $key => $item) { ?>
                <div class="advantages__item">
                    <div class="advantages__item-img"><img src="<?= $item['image']; ?>" alt="ug-gwc.de"/></div>
                    <div class="advantages__item-text"><?= apply_filters('the_content', $item['text']); ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php
}