<div class="_white">
    <?php get_template_part('templates/components/breadcrumbs'); ?>
    <div class="container">
        <h1><?= get_the_title(); ?></h1>
    </div>
</div>
<div class="_light-white _pt-md _pb-lg">
    <div class="container">
        <div class="contacts">
            <div class="contacts__content">
                <div class="contacts__content-item">
                    <div class="contacts__content-card">
                        <div class="contacts__content-card-title">
                            Wir sind online
                        </div>
                        <div class="contacts__content-card-text">
                            Täglich zu Zeiten <span>von 7:00 bis 21:00 Uhr</span><br>
                            <a href="javascript:void(0);" class="js-open-popup" data-id="popup-call">
                                Erhalten Sie jetzt eine Antwort auf Ihre Frage!
                            </a>
                        </div>
                    </div>
                    <div class="contacts__content-card">
                        <div class="contacts__content-card-title">
                            E-Mail an uns
                        </div>
                        <div class="contacts__content-card-text">
                            Wir sind offen für alle Fragen per E-Mail<br>
                            <a href="mailto:<?= carbon_get_post_meta(DE_HOMEPAGE, 'de_mail'); ?>" target="_blank">
                                <?= carbon_get_post_meta(DE_HOMEPAGE, 'de_mail'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="contacts__content-card">
                        <div class="contacts__content-card-title">
                            Rufen Sie uns an
                        </div>
                        <div class="contacts__content-card-text">
                            Haben Sie Fragen? Wir sind hier, um zu helfen!<br>
                            <span>
                                <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(DE_HOMEPAGE, 'de_phone')); ?>">
                                    <?= carbon_get_post_meta(DE_HOMEPAGE, 'de_phone'); ?>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <?php get_template_part('templates/components/form-small3'); ?>
            </div>
        </div>
    </div>
</div>