export function mobileMenuOpen() {
    const menuOpen = document.querySelector('.js-mobile-open');
    if (!menuOpen) {
        return;
    }

    const mobileWrapper = document.querySelector('.js-mobile');

    menuOpen.addEventListener('click', () => {
        mobileWrapper.classList.toggle('_hidden');
        document.body.classList.toggle('overflow-hidden');
    });
}

export function subMobileMenu() {
    const subMobileMenu = document.querySelectorAll('.mobile-menu .menu-item-has-children');
    if (!subMobileMenu.length) {
        return;
    }

    subMobileMenu.forEach(item => {
        item.onclick = () => {
            item.children[1].classList.toggle('active');
        };
    });
}

export function mobileMenuClose() {
    const menuClose = document.querySelector('.js-mobile-close');
    if (!menuClose) {
        return;
    }

    const mobileWrapper = document.querySelector('.js-mobile');

    menuClose.addEventListener('click', () => {
        mobileWrapper.classList.toggle('_hidden');
        document.body.classList.toggle('overflow-hidden');
    });
}

export function smoothScrolling() {
    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {
        anchor.addEventListener('click', (e) => {
            e.preventDefault()

            const id = anchor.getAttribute('href').substr(1);
            const element = document.getElementById(id);
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - 180;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth',
            });
        });
    }
}