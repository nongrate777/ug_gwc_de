<?php
$users = get_users([
    'orderby' => 'display_name',
    'role' => 'author',
    'order' => 'ASC',
    'fields' => [
        'ID',
        'user_login',
        'display_name',
        'user_email'
    ]
]);
if (!empty($users)) {
    ?>
    <div class="managers__wrap main-padding _light-white">
        <div class="container">
            <div class="managers">
                <div class="managers__title _center">
                    <h2>Ihre Ansprechpartner bei UG-GWC und unsere Öffnungszeiten</h2>
                </div>
                <div class="managers__subtitle _center">
                    Benötigte Unterstützung ist nicht immer planbar. Gut zu wissen, dass unsere Manager von 07:00 Uhr bis 21:00 Uhr für Sie erreichbar sind
                </div>
                <div class="managers__content js-manager-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($users as $user) { ?>
                            <div class="managers__content-item swiper-slide">
                                <div class="div">
                                    <div class="managers__content-item-img">
                                        <img src="<?= carbon_get_user_meta($user->ID, 'de_avatar'); ?>"
                                             alt="<?= $user->display_name; ?>"
                                        />
                                    </div>
                                    <div class="managers__content-item-name _center">
                                        <span><?= $user->display_name; ?></span> |
                                        <span><?= carbon_get_user_meta($user->ID, 'de_user_post'); ?></span>
                                    </div>
                                    <div class="managers__content-item-social">
                                        <div <?= empty(carbon_get_user_meta($user->ID, 'de_user_phone')) ? 'class="_hidden"' : ''; ?>>
                                            <a href="https://wa.me/<?= preg_replace("/[^,.0-9]/", '', carbon_get_user_meta($user->ID, 'de_user_phone')); ?>">
                                                <?= carbon_get_user_meta($user->ID, 'de_user_phone'); ?>
                                            </a>
                                        </div>
                                        <div <?= empty(carbon_get_user_meta($user->ID, 'de_user_skype')) ? 'class="_hidden"' : ''; ?>>
                                            <a href="skype:<?= carbon_get_user_meta($user->ID, 'de_user_skype'); ?>?call" target="_blank">
                                                <?= $user->display_name; ?>
                                            </a>
                                        </div>
                                        <div <?= (empty($user->user_email) || $user->user_login == 'admin') ? 'class="_hidden"' : ''; ?>>
                                            <a href="mailto:<?= $user->user_email; ?>" target="_blank">
                                                <?= $user->user_email; ?>
                                            </a>
                                        </div>
                                        <div <?= empty(carbon_get_user_meta($user->ID, 'de_user_time')) ? 'class="_hidden"' : ''; ?>>
                                            <?= carbon_get_user_meta($user->ID, 'de_user_time'); ?>
                                        </div>
                                    </div>
                                    <div class="managers__content-item-button js-open-popup" href="javascript:void(0);" data-id="popup-call">
                                        <div class="btn btn__square_gray">Unverbindlich Anfragen</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="arrows">
                        <div class="arrows-arrow js-prev"></div>
                        <div class="arrows-arrow js-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}