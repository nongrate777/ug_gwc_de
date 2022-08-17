/** SCSS */
import "./scss/_index.scss";

/** Swiper SCSS */
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

/** Init-tel-input */
import 'intl-tel-input/build/css/intlTelInput.css';

/** JS */
import {mobileMenuClose, mobileMenuOpen, smoothScrolling, subMobileMenu} from "./js/header";
import {sidebar} from "./js/single";
import {
    mailer,
    calendar,
    phoneInput,
    stepper,
    rangeSliderQualification,
    rangeSliderEvaluation,
    customRange,
    uploadFiles
} from "./js/form";
import {faq} from "./js/faq";
import {closePopup, popupOpen} from "./js/popup";
import {sliders, managerSlider, managerSliderSidebar, specialtiesSliders} from "./js/slider";
import {widget} from "./js/widget";
import {searcher} from "./js/searcher";
import {calculator} from "./js/calc";

document.addEventListener("DOMContentLoaded", () => {
    smoothScrolling();
    mobileMenuOpen();
    mobileMenuClose();
    sidebar();
    sliders();
    managerSlider();
    managerSliderSidebar();
    mailer();
    faq();
    popupOpen();
    closePopup();
    widget();
    calendar();
    phoneInput();
    stepper();
    rangeSliderQualification();
    rangeSliderEvaluation();
    searcher();
    calculator();
    customRange();
    subMobileMenu();
    uploadFiles();
    specialtiesSliders();
});