<?php

class Shortcodes
{
    public function __construct()
    {
        add_action('init', [$this, 'mceButtons']);
    }

    public function mceButtons()
    {
        add_filter('mce_external_plugins', [$this, 'mceAddButtons']);
        add_filter('mce_buttons', [$this, 'mceRegisterButtons']);

        add_shortcode('modal-button', [$this, 'generateButtonForModalWindow']);
        add_shortcode('modal-form', [$this, 'generateFormSmall']);
    }

    public function mceAddButtons($pluginArray)
    {
        $pluginArray['mcButtons'] = DE_URI . '/src/js/admin.js';
        return $pluginArray;
    }

    public function mceRegisterButtons($buttons)
    {
        array_push($buttons, 'modal-button');
        array_push($buttons, 'modal-form');
        return $buttons;
    }

    public static function generateButtonForModalWindow($atts): string
    {
        $name = !empty($atts['name']) ? $atts['name'] : 'JETZT ANFRAGEN';
        return '
        <div class="text-center mt-4">
            <a href="javascript:void(0);" class="btn btn__square btn__square_orange js-open-popup" data-id="popup-form">'. $name .'</a>
        </div>
        ';
    }

    public function generateFormSmall($atts): string
    {
        $title = !empty($atts['title']) ? "<h2 class=\"_center\">{$atts['title']}</h2>" : '';
        $subtitle = !empty($atts['subtitle']) ? "<h3 class=\"_center\">{$atts['subtitle']}</h3>" : '';
        $desc = !empty($atts['desc']) ? "<p>{$atts['desc']}</p>" : '';

        return '
        <div>
            ' . $title . $subtitle . $desc . '
            <div class="first-screen__form">
                <form class="js-form">
                    <div class="form-small">
                        <div class="form-small__wrap">
                            <div class="form-small__item">
                                <label>Name</label>
                                <input type="text" class="form-input" name="name" placeholder="Vorname / Nickname">
                            </div>
                            <div class="form-small__item">
                                <label>Mail</label>
                                <input type="text" class="form-input" name="email" placeholder="E-Mail">
                            </div>
                            <div class="form-small__item">
                                <input type="hidden" name="form-id" value="small-form" />
                                <a class="form-btn_green" href="https://wa.me/' . Helper::managers(true) . '" target="_blank">
                                    <div class="btn__arrow">
                                        <div class="btn__arrow-img">
                                            <img src="' . DE_URI . '/src/images/ui/img02.svg" alt="">
                                        </div>
                                        <div class="btn__arrow-text">Anonymer Chat</div>
                                    </div>
                                </a>
                                <button class="form-btn form-btn_orange _w-100">JETZT ANFRAGEN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        ';
    }
}

new Shortcodes();