<footer class="_black main-padding">
    <div class="container">
        <div class="footer">
            <div class="footer__items">
                <div class="footer__items-into">
                    <div class="footer__items-logo">
                        <div>
                            <img src="<?= DE_URI; ?>/src/images/footer/logo.svg" alt="Logo"/>
                            Offiziell auf dem Markt mit 1998
                        </div>
                        <div>
                            <a class=footer__items-title-dot href="/impressum/"><span>Impressum</span></a>
                        </div>
                    </div>
                    <div class="footer__items-text">
                        <?= wpautop(carbon_get_post_meta(DE_HOMEPAGE, 'de_footer_info')); ?>
                    </div>
                    <a class=footer__items-title-dot href="/impressum/"><span>Impressum</span></a>
                </div>
            </div>
            <div class="footer__items">
                <div class="footer__items-title">
                    MIT UNS VERBINDEN:
                </div>
                <ul>
                    <li>
                        <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(DE_HOMEPAGE, 'de_phone')); ?>">
                            <?= carbon_get_post_meta(DE_HOMEPAGE, 'de_phone'); ?>
                        </a>
                        <a class="footer__items-title-dot js-open-popup"
                           href="javascript:void(0);"
                           data-id="popup-call"
                        >
                            <span>Um Rückruf bitten</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?= carbon_get_post_meta(DE_HOMEPAGE, 'de_mail'); ?>" target="_blank">
                            <?= carbon_get_post_meta(DE_HOMEPAGE, 'de_mail'); ?>
                        </a>
                    </li>
                    <li><?= carbon_get_post_meta(DE_HOMEPAGE, 'de_address'); ?></li>
                </ul>
                <div class="footer__items-pay">
                    <div class="footer__items-title">Bezahlung</div>
                    <div class="footer__items-cards">
                        <img src="<?= DE_URI; ?>/src/images/footer/card1.svg" alt="PayPal"/>
                        <img src="<?= DE_URI; ?>/src/images/footer/card2.svg" alt="VISA"/>
                        <img src="<?= DE_URI; ?>/src/images/footer/card3.svg" alt="MasterCard"/>
                    </div>
                </div>
            </div>
            <div class="footer__items">
                <div class="footer__items-title">
                    Unsere Bürozeiten:
                </div>
                <ul>
                    <li><?= carbon_get_post_meta(DE_HOMEPAGE, 'de_work'); ?></li>
                </ul>
                <div class="footer__items-title">Social media:</div>
                <div class="footer__items-icons">
                    <a href="<?= carbon_get_post_meta(DE_HOMEPAGE, 'de_soc_instagram'); ?>" target="_blank">
                        <img src="<?= DE_URI; ?>/src/images/footer/inst.svg" alt="Instagram"/>
                    </a>
                    <a href="<?= carbon_get_post_meta(DE_HOMEPAGE, 'de_facebook'); ?>" target="_blank">
                        <img src="<?= DE_URI; ?>/src/images/footer/fb.svg" alt="Facebook"/>
                    </a>
                </div>
                <div class="footer__items-pay">
                    <div class="footer__items-title">Bezahlung</div>
                    <div class="footer__items-cards">
                        <img src="<?= DE_URI; ?>/src/images/footer/card1.svg" alt="PayPal"/>
                        <img src="<?= DE_URI; ?>/src/images/footer/card2.svg" alt="VISA"/>
                        <img src="<?= DE_URI; ?>/src/images/footer/card3.svg" alt="MasterCard"/>
                    </div>
                </div>
                <div class="footer__items-text">
                    <?= wpautop(carbon_get_post_meta(DE_HOMEPAGE, 'de_footer_info')); ?>
                </div>
                <div class="footer__items-copy">
                    <?= carbon_get_post_meta(DE_HOMEPAGE, 'de_footer_copy'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php get_template_part('templates/components/popups'); ?>
<?php wp_footer(); ?>
 
<div class="uber-bottom">
   <a id="smooth-bottom" href="#smooth-top">
    <div class="uber-bottom__btn">
        <div class="uber-bottom__btn-text">
            UBER
        </div>
    </div>
   </a>
</div>

<div class="widget">
    <div class="widget-help__btn js-widget">
        <div class="widget-help__btn-text">
            HILFE
        </div>
    </div>
    <div class="widget-help _hidden">
        <div class="popup-close" style="z-index: 9999999999; top: 6px !important; right: 6px !important;"></div>
        <div class="popup-bg"></div>
        <div class="widj_left">
            <div class="_row _jc-center">
                <div class="_size_5 _size_sm_6">
                    <div class="popup__title _center" style="font-size: 16px !important;">
                        Garantierte Antwortzeit von 8-10 Minuten!
                    </div>
                    <div class="widj_content">
                        <form class="js-form js-phone-form">
                            <div class="_row _jc-center">
                                <div class="_size_5_ _size_sm_6 widj_left_block">
                                    <div class="popup__content widj1">
                                        <input type="text" class="form-input" name="phone" placeholder="Jetzt einen kostenlosen Rückruf bestellen">
                                    </div>
                                    <div class="popup__btn widj2">
                                        <input type="hidden" name="form-id" value="call-form"/>
                                        <button class="form-btn form-btn_orange _w-100 widj3">Senden</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="js-form js-email-form _hidden">
                            <div class="_row _jc-center">
                                <div class="_size_5_ _size_sm_6 widj_left_block">
                                    <div class="popup__content widj1">
                                        <input type="text" class="form-input" name="email" placeholder="E-Mail">
                                    </div>
                                    <div class="popup__btn">
                                        <input type="hidden" name="form-id" value="email-form"/>
                                        <button class="form-btn form-btn_orange _w-100 widj3">Senden</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-help__content">
            <a class="widget-help__content-social" target="_blank" href="https://wa.me/<?= Helper::managers(true); ?>">WhatsApp</a>
            <a class="widget-help__content-social" target="_blank"
               href="skype:<?= Helper::managers(); ?>?chat">Skype</a>
            <a class="widget-help__content-social jsb" href="javascript:void(0);" data-id="0">E-Mail</a>
            <a class="widget-help__content-social jsb" href="javascript:void(0);" data-id="1">Telefon</a>
        </div>
    </div>
</div>

</div>
</body>
</html>