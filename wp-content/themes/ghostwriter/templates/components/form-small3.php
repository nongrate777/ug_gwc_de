<div class="contacts__content-item">
    <form class="js-form">
        <div class="contacts__content-forms">
            <div class="contacts__content-forms-title">
                Bei Fragen und Unklarheiten können Sie sich gerne an uns wenden
            </div>
            <div class="_row">
                <div class="_col _size_6">
                    <div class="form-wrap">
                        <label>Name</label>
                        <input class="form-input" name="name" type="text" placeholder="Vorname / Nickname"/>
                    </div>
                </div>
            </div>
            <div class="_row">
                <div class="_col _size_6">
                    <div class="form-wrap">
                        <label>Mail</label>
                        <input class="form-input" name="email" type="text" placeholder="E-Mail"/>
                    </div>
                </div>
            </div>
            <div class="_row">
                <div class="_col _size_6">
                    <div class="form-wrap">
                        <label>Ihre Nachricht an uns</label>
                        <textarea class="form-input" name="text" placeholder="Nachricht"></textarea>
                    </div>
                </div>
            </div>
            <div class="contacts__content-forms-btn">
                <div class="form-small__item <?= (is_single()) ? 'column' :
                    '' ?>">
                    <input type="hidden" name="form-id" value="small-form" />
                    <a class="form-btn_green" href="https://wa.me/<?= Helper::managers(true); ?>" target="_blank">
                        <div class="btn__arrow">
                            <div class="btn__arrow-img">
                                <img src="<?= get_template_directory_uri(); ?>/src/images/ui/img02.svg" alt="">
                            </div>
                            <div class="btn__arrow-text">Anonymer Chat</div>
                        </div>
                    </a>
                    <button class="form-btn form-btn_orange _w-100"><?= (is_single()) ? 'Absenden' : 'Absenden'; ?></button>
                </div>
                <div class="contacts__content-forms-text">
                    Prüfen Sie bitte vor dem Absenden des Formulars, ob Ihre E-Mail-Adresse korrekt ist.
                </div>
            </div>
        </div>
<?php get_template_part('templates/components/form-custom-fields'); ?>
    </form>
</div>