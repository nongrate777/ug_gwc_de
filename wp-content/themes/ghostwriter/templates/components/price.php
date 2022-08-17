<?php
$id = (is_front_page()) ? DE_HOMEPAGE : get_the_ID();
$prices = carbon_get_post_meta($id, 'de_prices');
if (!empty($prices)) {
    ?>
    <div class="price main-padding _light-white">
        <div class="container">
            <h2 class="_center">Ghostwriter kosten</h2>
            <div class="price__items">
                <?php foreach ($prices as $price) { ?>
                    <div class="price__item">
                        <div class="price__title">
                            Kosten für das Schreiben von<br />
                            <span><?= $price['title']; ?></span>
                        </div>
                        <div class="price__cost">
                            <div class="price__cost-price">
                                ab <span><?= $price['price']; ?> euro</span>
                            </div>
                            <div class="price__cost-text-two">
                                Bei schwierigen Themen werden <span>25%</span> der Kosten zum Preis hinzugefügt
                            </div>
                        </div>
                        <div class="price__text">
                            (d. h. <?= $price['price']; ?> Euro + 25 % des Preises für die Komplexität des Themas pro Seite)
                        </div>
                        <div class="price__button">
                            <a class="js-open-popup" href="javascript:void(0);" data-id="popup-form">Bestellung von</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br/>
            <div>
                <p>
                    * Кosten für das Verfassen von dringenden und besonders dringenden Arbeiten werden individuell festgelegt<br/>
                    ** Wenn die Arbeit einen Software-Berechnungsteil erfordert, wird der Preis für das Verfassen individuell festgelegt<br/>
                    *** Alle Preise gelten zzgl. Mehrwertsteuer
                </p>
            </div>
        </div>
    </div>
<?php } ?>