<form class="js-form">
    <div class="form-small">
        <?php if (is_single()) { ?>
            <div class="form-small__title">
                Bei Fragen und Unklarheiten können Sie sich gerne an uns wenden
            </div>
        <?php } ?>
        <div class="form-small__wrap">
            <div class="form-small__item <?= (is_single()) ? 'column' : '' ?>">
                <label>Name</label>
                <input type="text" class="form-input" name="name" placeholder="Vorname / Nickname">
            </div>
            <div class="form-small__item <?= (is_single()) ? 'column' : '' ?>">
                <label>Mail</label>
                <input type="text" class="form-input" name="email" placeholder="E-Mail">
            </div>
            <?php if (is_single()) { ?>
                <div class="form-small__item <?= (is_single()) ? 'column' : '' ?>">
                    <textarea class="form-input" name="text" placeholder="Nachricht"></textarea>
                </div>
                <p class="form-small__text-sm">
                    Prüfen Sie bitte vor dem Absenden des Formulars, ob Ihre E-Mail-Adresse korrekt ist.
                </p>
            <?php } ?>
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
                <button class="form-btn form-btn_orange _w-100"><?= (is_single()) ? 'Absenden' : 'JETZT ANFRAGEN'; ?></button>
            </div>
        </div>
    </div>
<?php get_template_part('templates/components/form-custom-fields'); ?>
</form>