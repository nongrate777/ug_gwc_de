<div class="popup-bg _hidden">
    <div id="popup-call" class="popup-wrap popup-sm _white _hidden">
        <div class="popup" style="padding: 55px 20px !important;">
            <div class="popup-close"></div>
            <div class="popup__title _center" style="font-size: 21px !important;">
                Jetzt einen <span>kostenlosen</span> Rückruf bestellen
            </div>
            <form class="js-form">
                <div class="_row _jc-center">
                    <div class="_size_5 _size_sm_6">
                        <div class="popup__content">
                            <div class="form-small__item <?= (is_single()) ? 'column' : '' ?>" style="width: 100% !important; margin-bottom: 25px;">
                            <label>Name</label>
                            <input type="text" class="form-input" name="name" placeholder="Vorname / Nickname">
                            </div>
                            <div class="form-small__item <?= (is_single()) ? 'column' : '' ?>" style="width: 100% !important;  margin-bottom: 25px;">
                               <label style="z-index: 9999;">Telefon</label>
                               <input type="text" class="form-input" name="phone" placeholder="Telefon">
                            </div>
                             
                        </div>
                        <div class="popup__btn">
                            <input type="hidden" name="form-id" value="call-form"/>
                            <a class="form-btn_green" href="https://wa.me/<?= Helper::managers(true); ?>" target="_blank">
                            <div class="btn__arrow">
                            <div class="btn__arrow-img">
                            <img src="<?= get_template_directory_uri(); ?>/src/images/ui/img02.svg" alt="">
                            </div>
                             <div class="btn__arrow-text">Anonymer Chat</div>
                            </div>
                            </a>
                            <button class="form-btn form-btn_orange _w-100" style="margin-left: 15px !important"><?= (is_single()) ? 'Absenden' : 'JETZT ANFRAGEN'; ?></button>
                        </div>
                    </div>
                </div>
<?php get_template_part('templates/components/form-custom-fields'); ?>
            </form>
        </div>
    </div>

    <div id="popup-form" class="popup-wrap popup-lg _white _hidden">
        <div class="popup">
            <div class="popup-close"></div>
            <?php get_template_part('templates/components/form-big'); ?>
        </div>
    </div>

    <div id="popup-thanks" class="popup-wrap popup-lg _white _hidden">
        <div class="popup">
            <div class="popup-close"></div>
            <div class="_row _jc-center">
                <div class="_size_5 _size_sm_6">
                    <div class="popup__content-text _center">
                        Danke für Ihre Anfrage! Wir kontaktieren Sie innerhalb von 15 Minuten per Telefon 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>