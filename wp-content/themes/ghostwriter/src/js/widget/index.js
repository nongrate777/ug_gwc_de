export function widget() {
    const widget = document.querySelector('.widget-help');
    if (!widget) {
        return;
    }

    window.onclick = (e) => {
        const target = e.target;

        if (target.classList.contains('js-widget')
            || target.closest('.widget-help__content')
            || target.closest('.widj_left')
        ) {
            widget.classList.remove('_hidden');
        } else {
            widget.classList.add('_hidden');
        }
    };

    const jsb = document.querySelectorAll('.jsb');
    jsb.forEach(item => {
        item.addEventListener('click', () => {
            if (item.dataset.id === '1') {
                document.querySelector('.js-phone-form').classList.remove('_hidden');
                document.querySelector('.js-email-form').classList.add('_hidden');
            } else {
                document.querySelector('.js-phone-form').classList.add('_hidden');
                document.querySelector('.js-email-form').classList.remove('_hidden');
            }
        });
    });
}