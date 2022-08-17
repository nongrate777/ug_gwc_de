<?php
$i = 1;
$wpTitle = carbon_get_post_meta(get_the_ID(), 'de_wp_title');
$wpImage = carbon_get_post_meta(get_the_ID(), 'de_wp_image');
$wpBlock = carbon_get_post_meta(get_the_ID(), 'de_wp_block');
if (!empty($wpTitle) && !empty($wpBlock)) {
    ?>
    <div class="writing-process _light-white main-padding">
        <div class="container">
            <h2 class="_center"><?= $wpTitle; ?></h2>
            <div class="writing-process__content">
                <div class="writing-process__content-img">
                    <img src="<?= $wpImage; ?>" alt="<?= $wpTitle; ?>" />
                </div>
                <div class="writing-process__content-list">
                    <?php foreach ($wpBlock as $block) { ?>
                        <div class="writing-process__content-item">
                            <div class="writing-process__content-title"><?= $i; ?></div>
                            <div class="writing-process__content-text"><?= $block['text']; ?></div>
                            <div class="writing-process__content-line"></div>
                        </div>
                    <?php $i++; } ?>
                </div>
            </div>
            <div class="writing-process__bottom">
                <div class="writing-process__bottom-title _center">
                    Wenn Sie sich vorstellen können, uns zu beauftragen, senden Sie uns gerne eine Anfrage über das Formular zu.
                </div>
                <div class="writing-process__bottom-text _center">
                    Wir senden Ihnen ein kostenloses Angebot zu!
                </div>
            </div>
            <div class="writing-process__btn">
                <div class="div">
                    <a href="javascript:void(0);" data-id="popup-form" class="btn btn__square_orange js-open-popup">
                        JETZT ANFRAGEN
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>