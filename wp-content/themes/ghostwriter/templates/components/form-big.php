<form class="js-form" enctype="multipart/form-data">
    <div class="form-big__head">
        <div class="form-big__head-title">Erhalten Sie Ihr unverbindliches Angebot</div>
        <div class="form-big__head-description">Das Ausfüllen des Formulars dauert max. eine Minute.</div>
    </div>
    <div class="form-big__body">

        <div class="_row">
            <div class="_col _size_4 _size_lg_6 _size_768">
                <div class="form-wrap">
                    <label>Art von Arbeit</label>
                    <select name="type" class="form-input">
                        <?= get_template_part('templates/components/selects/options-type') ?>
                    </select>
                </div>
            </div>
            <div class="_col _size_2 _size_lg_6 _size_768_2">
                <div class="form-wrap">
                    <div class="form-date">
                        <label>Abgabetermin</label>
                        <input class="form-date__input datepicker-input"
                               placeholder="Abgabetermin"
                               autocomplete="off"
                               name="deadline"
                               type="text"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="_row">
            <div class="_col _size_4 _size_lg_6 _size_768">
                <div class="form-wrap">
                    <label>Fach</label>
                    <select name="specialization" class="form-input">
                        <?= get_template_part('templates/components/selects/options-specialties') ?>
                    </select>
                </div>
            </div>
            <div class="_col _size_1 _size_lg_3 _size_lg_auto _size_768_2">
                <div  style="flex: 0 1 100%; width: 100%;">
                    <div class="form-counter">
                        <label>Seitenanzahl</label>
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
            <div class="_col _size_1 _size_lg_3 _size_lg_auto seiten">
                <div class="form-wrap">
                    <div class="form-wrap-text">
                        Seiten 
                    </div>
                </div>
            </div>
        </div>
        <div class="_row">
            <div class="_col _size_4 _size_lg_6 _size_768">
                <div class="form-wrap">
                    <label>Thema der Arbeit</label>
                    <input class="form-input"
                           placeholder="Thema der Arbeit"
                           autocomplete="off"
                           name="theme"
                           type="text"
                    />
                </div>
            </div>
            <div class="_col _size_2 _size_lg_6 _size_768_2">
                <div class="form-wrap">
                    <label>Vorname / Nickname</label>
                    <input class="form-input" name="name" type="text" placeholder="Vorname / Nickname" />
                </div>
            </div>
        </div>
        <div class="_row _pt-md">
            <div class="_col _size_2 _size_lg_6 _size_768">
                <div class="form-wrap3">
                    <label>Qualifikation des Autors</label>
                    <input type="range"
                           class="form-range form-range-qualification"
                           value="0"
                           min="0"
                           max="2"
                    />
                    <input id="input-qualification" type="hidden" name="qualification" value="Akzeptables Niveau" />
                    <div class="form-range-items">
                        <div class="form-range-item">
                            <div class="form-range-item-text">
                                Akzeptables Niveau
                            </div>
                            <div class="form-range-item-img">
                                <div class="form-range-item-img-guess">
                                    Bachelor / Masterand
                                </div>
                            </div>
                        </div>
                        <div class="form-range-item">
                            <div class="form-range-item-text">
                                Hohes Niveau
                            </div>
                            <div class="form-range-item-img">
                                <div class="form-range-item-img-guess">
                                    Bachelor / Masterand
                                </div>
                            </div>
                        </div>
                        <div class="form-range-item">
                            <div class="form-range-item-text">
                                Sehr hohes Niveau
                            </div>
                            <div class="form-range-item-img">
                                <div class="form-range-item-img-guess">
                                    Bachelor / Masterand
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_col _size_2 _size_lg_6 _size_768">
                <div class="form-wrap3">
                    <label>Gewünschte Note für die Arbeit</label>
                    <input type="range"
                           class="form-range form-range-evaluation"
                           value="0"
                           min="0"
                           max="2"
                    />
                    <input id="input-evaluation" type="hidden" name="evaluation" value="Befriedigend" />
                    <div class="form-range-items">

                        <div class="form-range-item">
                            <div class="form-range-item-text">
                                Befriedigend
                            </div>
                        </div>
                        <div class="form-range-item">
                            <div class="form-range-item-text">
                                Gut
                            </div>
                        </div>
                        <div class="form-range-item">
                            <div class="form-range-item-text">
                                Ausgezeichnet
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_col _size_2 _size_lg_6 _size_768_2 _size_768_verh">
                <div class="form-wrap">
                    <label>Telefon</label>
                    <input class="form-input" name="phone" type="text" />
                </div>
            </div>
        </div>
        <div class="_row">
            <div class="_col _size_4 _size_lg_6 _size_768">
                <div class="form-wrap">
                    <label>Ihre Nachricht an uns (optional)</label>
                    <input class="form-input" name="message" type="text" placeholder="..." />
                </div>
            </div>
            <div class="_col _size_2 _size_lg_6 _size_768_2">
                <div class="form-wrap">
                    <label>E-Mail</label>
                    <input class="form-input" name="email" type="text" placeholder="E-Mail" />
                </div>
            </div>
        </div>
        <div class="_row">
            <div class="_col _size_6">
                <div class="form-upload">
                    <div class="form-upload__label">Datei anhängen</div>
                    <label for="complaints-form-files">
                        <span>Drag & Drop</span>
                        <span>order</span>
                        <span>Dateien auswählen</span>
                        <span class="files-block"></span>
                    </label>
                    <input class="form-upload__input" type="file" name="attachment[]" id="complaints-form-files" multiple>
                </div>
            </div>
        </div>
    </div>
    <div class="form-big__footer">
        <input type="hidden" name="form-id" value="large-form"/>
        <button class="form-btn form-btn_orange">Das Formular abschicken</button>
        <div class="form-big__footer-info">
            Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
        </div>
    </div>
<?php get_template_part('templates/components/form-custom-fields'); ?>
</form>