import { Datepicker } from 'vanillajs-datepicker';
import intlTelInput from 'intl-tel-input';

export function phoneInput() {
    const inputs = document.querySelectorAll('input[name="phone"]');
    if (!inputs.length) {
        return;
    }

    inputs.forEach(input => {
        intlTelInput(input, {
            initialCountry : 'DE',
            autoPlaceholder : 'aggressive',
            preferredCountries: ["DE","GB"],
            nationalMode: true,
            utilsScript: "wp-content/themes/ghostwriter/node_modules/intl-tel-input/build/js/utils.js"
        });
    });
}

export function calendar() {
    const dateInputs = document.querySelectorAll('.form-date__input');
    if (!dateInputs.length) {
        return;
    }

    for (let dateInput of dateInputs) {
        new Datepicker(dateInput, {
            buttonClass: dateInput,
            weekStart: 1
        });
    }
}

export function stepper() {
    const formCounts = document.querySelectorAll(".form-counter");
    if (!formCounts.length) {
        return;
    }

    formCounts.forEach(item => {
        item.onclick = (e) => {
            const target = e.target;

            if (target.classList.contains("counter-btn")) {
                let input = item.querySelector(".count-input");
                let min = input.getAttribute("min");
                let max = input.getAttribute("max");
                let step = input.getAttribute("step");
                let val = input.getAttribute("value");

                let id = target.getAttribute("data-id")
                let calcStep = (id === "increment") ? (step * 1) : (step * -1);
                let newValue = parseInt(val) + calcStep;

                if (newValue >= min && newValue <= max) {
                    input.setAttribute("value", newValue);
                }
            }
        };
    });
}

export function mailer() {
    const forms = document.querySelectorAll('.js-form');
    if (!forms.length) {
        return;
    }

    const popupWraps = document.querySelectorAll('.popup-wrap');
    const popupThanks = document.getElementById('popup-thanks');
    const popupBg = document.querySelector('.popup-bg');

    for (let form of forms) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            let formData = new FormData(form),
                formId = formData.get('form-id'),
                button = form.querySelector('.form-btn'),
                buttonText = button.innerHTML,
                isErrors = false,
                errors = [],
                data = {};

            button.innerHTML = 'Sendung...';
            button.disabled = true;

            if (formId === 'large-form') {
                data = ['theme','type','specialization','deadline','number','name','phone','email'];
            }

            if (formId === 'small-form') {
                data = ['name','email'];
            }

            if (formId === 'call-form') {
                data = ['phone'];
            }

            if (formId === 'email-form') {
                data = ['email'];
            }

            setTimeout(() => {
                data.forEach(item => {
                    if (formData.get(item) === '') {
                        errors.push(item);
                        button.innerHTML = buttonText;
                        button.disabled = false;
                        isErrors = true;
                    } else {
                        form.querySelector('[name="' + item + '"]').classList.remove('_error');
                    }
                });

                if (errors) {
                    errors.forEach(item => {
                        form.querySelector('[name="' + item + '"]').classList.add('_error');
                    });

                    setTimeout(() => {
                        errors.forEach(item => {
                            form.querySelector('[name="' + item + '"]').classList.remove('_error');
                        });
                    }, 2000);
                }

                if (!isErrors) {
                    formData.append('action', 'sendForm');

                    fetch('/wp-admin/admin-ajax.php', {
                        method: 'POST',
                        body: formData,
                        credentials: 'same-origin'
                    })
                        .then(response => response.json())
                        .then(response => {
                            button.innerHTML = buttonText;
                            button.disabled = false;

                            if (response.success) {
                                popupWraps.forEach(item => {
                                    item.classList.add('_hidden');
                                });

                                popupThanks.classList.remove('_hidden');

                                popupBg.classList.remove('_hidden');
                                document.body.classList.add('_scroll-hidden');

                                form.reset();
                            }
                        })
                    ;
                }
            }, 500);
        });
    }
}

export function uploadFiles() {
    const forms = document.querySelectorAll('.js-form');
    if (!forms.length) {
        return;
    }

    forms.forEach(form => {
        const file = form.querySelector('input[type="file"]');
        if (!file) {
            return;
        }

        file.addEventListener('change', () => {
            for (let i = 0; i < file.files.length; i++) {
                let fr = new FileReader();
                fr.addEventListener('load', () => {
                    let elem = document.createElement('img');
                    elem.setAttribute('src', fr.result);
                    elem.setAttribute('height', '100');
                    elem.setAttribute('width', '100');
                    form.querySelector('.files-block').appendChild(elem);
                }, false);

                fr.readAsDataURL(file.files[i]);
            }
        });
    });
}

export function rangeSliderQualification() {
    const rangeSliderQualification = document.querySelector('.form-range-qualification');
    if (!rangeSliderQualification) {
        return;
    }

    const stepsQualification = [
        "Akzeptables Niveau",
        "Hohes Niveau",
        "Sehr hohes Niveau"
    ];

    const outputQualification = document.getElementById('input-qualification');
    rangeSliderQualification.oninput = () => {
        outputQualification.value = stepsQualification[rangeSliderQualification.value];
    }
}

export function rangeSliderEvaluation() {
    const rangeSliderEvaluation = document.querySelector('.form-range-evaluation');
    if (!rangeSliderEvaluation) {
        return;
    }

    const stepsEvaluation = [
        "Befriedigend",
        "Gut",
        "Ausgezeichnet"
    ];

    const outputEvaluation = document.getElementById('input-evaluation');
    rangeSliderEvaluation.oninput = () => {
        outputEvaluation.value = stepsEvaluation[rangeSliderEvaluation.value];
    }
}

export function customRange() {
    const rangeInputs = document.querySelectorAll('input[type="range"]');

    if (!rangeInputs.length) {
        return;
    }

    rangeInputs.forEach(input => {
        input.addEventListener('input', (e) => {
            let target = e.target
            const min = target.min
            const max = target.max
            const val = target.value

            target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
        });
    });
}