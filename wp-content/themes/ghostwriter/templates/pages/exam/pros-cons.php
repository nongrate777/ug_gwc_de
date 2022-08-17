<?php
$prosConsTitle = carbon_get_post_meta(get_the_ID(), 'de_pros_cons_title');
if (!empty($prosConsTitle)) {
    ?>
    <div class="_light-white">
        <div class="container _pt-lg _pb-lg">
            <div class="pros-cons">
                <div class="pros-cons__title">
                    <h2><?= $prosConsTitle; ?></h2>
                </div>
                <div class="pros-cons__pros">
                    <h2><span>Nachteile</span></h2>
                </div>
                <?php foreach (carbon_get_post_meta(get_the_ID(), 'de_cons') as $cons) { ?>
                    <div class="pros-cons__item"><?= $cons['text']; ?></div>
                <?php } ?>
                <div class="pros-cons__cons">
                    <h2><span>Vorteile</span></h2>
                </div>
                <?php foreach (carbon_get_post_meta(get_the_ID(), 'de_pros') as $pros) { ?>
                    <div class="pros-cons__item"><?= $pros['text']; ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
}