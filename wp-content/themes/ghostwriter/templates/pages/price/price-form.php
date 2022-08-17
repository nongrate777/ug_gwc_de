<form class="js-form">
    <div class="div _light-white _pt-lg _pb-lg">
        <div class="container">
            <div class="calculator__title">
                <h2>Der erste Überblick: </h2>
            </div>
            <div class="calculator__subtitle">
                <h3>Preiskalkulator für Ghostwriting – wissenschaftliche Arbeiten</h3>
            </div>
            <div class="calculator _white">
                <div class="calculator__content-title">
                    <h3>Nutzen Sie unseren preisrechner und kalkulieren Sie Ihre Arbeit<h3>
                </div>
                <div class="calculator__content">
                    <div class="calculator__content-item">
                        <div class="calculator__content-subtitle">
                            Wählen Sie die Parameter für Ihre Arbeit
                        </div>
                        <div class="calculator__content-form">
                            <div class="_row">
                                <div class="_size_6">
                                    <div class="form-wrap3">
                                        <label>Fach</label>
                                        <select name="specialization" class="form-input">
                                            <?= get_template_part('templates/components/selects/options-specialties') ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="_size_6">
                                    <div class="form-wrap3">
                                        <label>Seitenanzahl</label>
                                        <div class="form-counter">
                                            <div data-id="decrement" class="counter-btn">-</div>
                                            <input class="form-input count-input"
                                                   name="number"
                                                   type="number"
                                                   value="40"
                                                   max="1000"
                                                   min="0"
                                                   step="5"
                                            />
                                            <div data-id="increment" class="counter-btn">+</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_size_6">
                                    <div class="form-wrap3">
                                        <label>Dringlichkeit</label>
                                        <select name="" class="form-input" id="calc-select">
                                            <option value="0">-</option>
                                            <option value="Eilig">Eilig</option>
                                            <option value="Nicht dringend">Nicht dringend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="_size_6">
                                    <div class="form-wrap3">
                                        <div class="form-date2">
                                            <label>Liefertermin</label>
                                            <input class="form-date__input datepicker-input" placeholder="Liefertermin"
                                                   id="header-deadline" autocomplete="off" name="deadline" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__content-item">
                        <div class="calculator__content-subtitle">
                            Wählen Sie Ihren Rabatt:
                        </div>
                        <div class="calculator__content-unit">
                            <div class="calculator__content-unit-left">
                                -50%
                            </div>
                            <div class="calculator__content-unit-right">
                                <input class="form-checkbox2__input" id="checkbox_1" name="" value="Erste Bestellung"
                                       type="checkbox">
                                <label for="checkbox_1">Erste Bestellung</label>
                            </div>
                        </div>
                        <div class="calculator__content-unit">
                            <div class="calculator__content-unit-left">
                                -25%
                            </div>
                            <div class="calculator__content-unit-right">
                                <input class="form-checkbox2__input" id="checkbox_2" name=""
                                       value="Bonus zum Geburtstag" type="checkbox">
                                <label for="checkbox_2">Bonus zum Geburtstag</label>
                            </div>
                        </div>
                        <div class="calculator__content-unit">
                            <div class="calculator__content-unit-left">
                                -10%
                            </div>
                            <div class="calculator__content-unit-right">
                                <div class="_pb-md">
                                    <input class="form-checkbox2__input" id="checkbox_3" name="" value=""
                                           type="checkbox">
                                    <label for="checkbox_3">Komplette Vorauszahlung für den gesamten Auftrag</label>
                                </div>
                                <div class="_pb-md">
                                    <input class="form-checkbox2__input" id="checkbox_4" name="" value=""
                                           type="checkbox">
                                    <label for="checkbox_4">Positive Bewertung (mit Status „bestätigt“)</label>
                                </div>
                                <div>
                                    <input class="form-checkbox2__input" id="checkbox_5" name="" value=""
                                           type="checkbox">
                                    <label for="checkbox_5">Freundschaftswerbungsprogramm</label>
                                    <div class="form-checkbox2__text">
                                        (10 Prozent Cashback auf die Zahlungen )
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calculator__content-unit">
                            <div class="calculator__content-unit-left">
                                -5%
                            </div>
                            <div class="calculator__content-unit-right">
                                <div class="_pb-md">
                                    <input class="form-checkbox2__input" id="checkbox_6" name="" value=""
                                           type="checkbox">
                                    <label for="checkbox_6">Für jede weitere Bestellung</label>
                                </div>
                                <div>
                                    <input class="form-checkbox2__input" id="checkbox_7" name="" value=""
                                           type="checkbox">
                                    <label for="checkbox_7">Rabatt ab 20 Personen</label>
                                </div>
                            </div>
                        </div>
                        <div class="calculator__content-unit _pb-lg">
                            <div class="calculator__content-unit-left">
                                50 &#8364;
                            </div>
                            <div class="calculator__content-unit-right">
                                <input class="form-checkbox2__input" id="checkbox_8" name="" value="" type="checkbox">
                                <label for="checkbox_8">Rabatt für den ersten Auftrag</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calculator__result">
                    <div class="calculator__result-price">
                        <div class="calculator__result-price-item">
                            <h3><span id="price-total">44</span> &#8364;</h3>

                            <div class="calculator__result-price-item-text">
                                inklusive 19 % MwSt
                            </div>
                        </div>
                    </div>
                    <div class="calculator__result-btn">
                        <div class="calculator__result-btn-item">
                            <batton class="btn btn__square btn__square_orange">JETZT ANFRAGEN</batton>
                        </div>
                    </div>
                </div>
                <div class="calculator__text">
                    <span>Bitte beachten Sie:</span> Die vom Kalkulator errechneten Preise dienen einer ersten
                    Orientierung. Ein
                    detailliertes und auf Ihre Anforderungen zugeschnittenes Angebot fordern Sie einfach über das
                    Anfrageformular auf unserer Website an. Alternativ beraten Sie unsere Manager gerne per E-Mail
                    oder telefonisch. Dort erhalten Sie auch Informationen zu weiteren von uns angebotenen
                    Dienstleistungen.
                </div>
            </div>
        </div>
    </div>
</form>