export function faq() {
    const items = document.querySelectorAll('.faq__item');
    if (!items.length) {
        return;
    }

    items.forEach(item => {
        item.addEventListener('click', () => {
            const btn = item.querySelector('.faq__button');
            const text = item.querySelector('.faq__body');
            btn.classList.toggle('current');
            text.classList.toggle('_hidden');
        });
    });
}