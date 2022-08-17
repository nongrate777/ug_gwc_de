<div class="container">
    <div class="contacts">
        <div class="contacts__block main-padding">
            <div class="contacts__block-content">
                <h2>Haben Sie Fragen?</h2>
                <p>Kontakt per Telefon</p>
                <a href="tel:+<?= preg_replace("/[^,.0-9]/", '', carbon_get_post_meta(DE_HOMEPAGE, 'de_phone')); ?>"
                   class="contacts__block-phone">
                    <?= carbon_get_post_meta(DE_HOMEPAGE, 'de_phone'); ?>
                </a>
                <p>oder auf eine andere für Sie geeignete Weise</p>
                <div class="contacts__block-wrap">
                    <a class="contacts__block-btn" href="https://wa.me/<?= Helper::managers(true); ?>">WhatsApp Chat</a>
                    <a class="contacts__block-btn" href="skype:<?= Helper::managers(); ?>?chat">Skype Chat</a>
                </div>
                <a class="contacts__block-mail" href="mailto:info@ug-gwc.de">info@ug-gwc.de</a>
            </div>
        </div>
    </div>
</div>