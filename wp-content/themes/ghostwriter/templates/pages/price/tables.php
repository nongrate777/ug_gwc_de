<?php
$contents = carbon_get_post_meta(get_the_ID(), 'de_tables');
if (!empty($contents)) {
    ?>
    <div class="main-padding _light-white">
        <div class="container">
            <?php foreach ($contents as $content) { ?>
                <div class="table-text">
                    <?= apply_filters('the_content', $content['text']); ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php
}