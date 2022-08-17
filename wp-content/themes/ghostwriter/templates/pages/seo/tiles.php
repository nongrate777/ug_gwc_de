<?php
$tiles = carbon_get_post_meta(get_the_ID(), 'de_tiles_title');
$tilesBlocks = carbon_get_post_meta(get_the_ID(), 'de_tiles_blocks');
if (!empty($tiles) && !empty($tilesBlocks)) {
    ?>
    <div class="tiles">
        <div class="container">
            <div class="tiles__title"><?= $tiles; ?></div>
            <div class="tiles__content">
                <?php foreach ($tilesBlocks as $block) { ?>
                    <div class="tiles__content-item"><?= $block['text']; ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
}
?>