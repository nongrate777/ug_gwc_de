<?php $id = get_the_author_meta('ID'); ?>
<div class="_light-white main-padding">
    <div class="container">
        <div class="default-content">
            <div class="author__content">
                <div class="author__content-item">
                    <img src="<?= carbon_get_user_meta($id, 'de_avatar') ?>"
                         alt="<?= get_the_author_meta('display_name') ?>"
                         class="author__image alignleft"
                    />
                </div>
                <div class="author__content-item">
                    <h1><?= get_the_author_meta('display_name'); ?></h1>

                    <h3 class="authro__status"><?= carbon_get_user_meta($id, 'de_user_post'); ?></h3>
                    <div class="author__text">
                        <?= wpautop(carbon_get_user_meta($id, 'de_user_short')); ?>
                    </div>
                    <div class="author__informer">
                        <?php if (get_the_author_meta('user_login') !== 'admin') { ?>
                            <div class="managers__content-items">
                                <div class="managers__content-item <?= empty(carbon_get_user_meta($id, 'de_user_phone')) ? '_hidden' : ''; ?>">
                                    <div class="managers__content-title">
                                        Mein persönliches WhatsApp:
                                    </div>
                                    <div class="managers__content-text">
                                        <a id="social_whatsapp" href="https://wa.me/<?= preg_replace("/[^,.0-9]/", '', carbon_get_user_meta($id, 'de_user_phone')); ?>">
                                            <?= carbon_get_user_meta($id, 'de_user_phone'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="managers__content-item <?= empty(carbon_get_user_meta($id, 'de_user_skype')) ? '_hidden' : ''; ?>">
                                    <div class="managers__content-title">
                                        Mein persönliches Skype:
                                    </div>
                                    <div class="managers__content-text">
                                        <a id="social_skype" href="skype:<?= carbon_get_user_meta($id, 'de_user_skype'); ?>?call" target="_blank">
                                            <?= get_the_author_meta('display_name'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="managers__content-item <?= empty(get_the_author_meta('facebook')) ? '_hidden' : ''; ?>">
                                    <div class="managers__content-title">
                                        Mein Facebook-Profil
                                    </div>
                                    <div class="managers__content-text">
                                        <a id="social_facebook" href="<?= get_the_author_meta('facebook'); ?>">
                                            <?= get_the_author_meta('display_name'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="managers__content-items">
                                <div class="managers__content-item <?= empty(carbon_get_user_meta($id, 'de_user_phone')) ? '_hidden' : ''; ?>">
                                    <div class="managers__content-text">
                                        <a id="social_phone" href="tel:<?= carbon_get_user_meta($id, 'de_user_phone'); ?>">
                                            <?= carbon_get_user_meta($id, 'de_user_phone'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="managers__content-item <?= (empty(get_the_author_meta('user_email')) || get_the_author_meta('user_login') == 'admin') ? '_hidden' : ''; ?>">
                                    <div class="managers__content-text">
                                        <a id="social_mail" href="mailto:<?= get_the_author_meta('user_email'); ?>" target="_blank">
                                            <?= get_the_author_meta('user_email'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div id="social_time" class="managers__content-item <?= empty(carbon_get_user_meta($id, 'de_user_time')) ? '_hidden' : ''; ?>">
                                    <?= carbon_get_user_meta($id, 'de_user_time'); ?>
                                </div>
                                <div class="managers__content-btn">
                                    <a class="btn btn__square btn__square_light_orange js-open-popup" href="javascript:void(0);" data-id="popup-form">
                                        Unverbindlich Anfragen
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="container">
        <h2 class="_center">Möchten Sie Sandra eine Frage stellen?</h2>
        <div class="first-screen__form">
            <?php get_template_part('templates/components/form-small'); ?>
        </div>
    </div>
</div>