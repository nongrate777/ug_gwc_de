<?php
$orangeBlockTitle = carbon_get_post_meta(get_the_ID(), 'de_orange_title');
if (!empty($orangeBlockTitle)) {
    ?>
    <div class="_light-white">
        <div class="container">
            <div class="rules _pt-md _pb-lg">
                <div class="rules__title">
                    <h2><?= $orangeBlockTitle; ?></h2>
                </div>
                <div class="rules__content">
                    <?php foreach (carbon_get_post_meta(get_the_ID(), 'de_orange') as $key => $value) { ?>
                        <div class="rules__content-item">
                            <?= $value['text']; ?>
                            <div class="rules__content-item-number"><?= (int)$key+1; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}