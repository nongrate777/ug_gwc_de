import Swiper, {Navigation} from 'swiper';

export function sliders() {
    const sliders = document.querySelectorAll('.js-slider');
    if (!sliders.length) {
        return;
    }

    sliders.forEach(slider => {
        new Swiper(slider, {
            modules: [Navigation],
            slidesPerView: 1,
            spaceBetween: 24,
            navigation: {
                nextEl: slider.querySelector('.js-next'),
                prevEl: slider.querySelector('.js-prev'),
            },
            breakpoints: {
                576: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
            }
        });
    });
}

export function specialtiesSliders() {
    const slider = document.querySelector('.js-slider-specialties');
    if (!slider) {
        return;
    }

    new Swiper(slider, {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: slider.querySelector('.js-next'),
            prevEl: slider.querySelector('.js-prev'),
        },
        breakpoints: {
            576: {
                slidesPerView: 2
            },
            820: {
                slidesPerView: 3
            },
            1100: {
                slidesPerView: 4
            },
        }
    });
}

export function managerSlider() {
    const slider = document.querySelectorAll('.js-manager-slider');
    if (!slider.length) {
        return;
    }

    slider.forEach(slide => {
        new Swiper(slide, {
            modules: [Navigation],
            slidesPerView: 1,
            spaceBetween: 24,
            navigation: {
                nextEl: slide.querySelector('.js-next'),
                prevEl: slide.querySelector('.js-prev'),
            },
            breakpoints: {
                420: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                992: {
                    slidesPerView: 4
                },
            }
        });
    });
}

export function managerSliderSidebar() {
    const slider = document.querySelectorAll('.js-manager-slider-sidebar');
    if (!slider.length) {
        return;
    }

    slider.forEach(slide => {
        new Swiper(slide, {
            modules: [Navigation],
            slidesPerView: 1,
            navigation: {
                nextEl: slide.querySelector('.js-next'),
                prevEl: slide.querySelector('.js-prev'),
            },
        });
    });
}