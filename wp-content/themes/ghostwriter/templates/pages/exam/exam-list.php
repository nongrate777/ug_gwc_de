<?php
$abbreviationsTitle = carbon_get_post_meta(get_the_ID(), 'de_abbreviations_title');
if (!empty($abbreviationsTitle)) {
    ?>
    <div class="exams__background _pt-lg _pb-lg">
        <div class="container">
            <div class="exams">
                <div class="exams__title">
                    <h2 class="_center"><?= $abbreviationsTitle; ?></h2>
                </div>
                <?php foreach (carbon_get_post_meta(get_the_ID(), 'de_abbreviations') as $item) { ?>
                    <div class="exams__item">
                        <div class="exams__item-title"><?= $item['abc']; ?></div>
                        <div class="exams__item-text"><?= $item['text']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
}