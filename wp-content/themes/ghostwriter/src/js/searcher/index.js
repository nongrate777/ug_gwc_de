export function searcher() {
    const input = document.querySelector('.searcher');
    const items = document.querySelectorAll('.work-examples__card-item');
    if (!input && !items.length) {
        return;
    }

    input.oninput = () => {
        items.forEach(item => {
            const name = item.querySelector('.item-name').innerHTML;
            if (name.toUpperCase().indexOf(input.value.toUpperCase()) !== -1) {
                item.classList.remove('_hidden');
            } else {
                item.classList.add('_hidden');
            }
        });
    }

    const select = document.querySelector('.selectel');
    select.addEventListener('change', (e) => {
        const target = e.target.value;

        if (target === '0') {
            items.forEach(item => {
                item.classList.remove('_hidden_theme');
            });
        } else {
            items.forEach(item => {
                const theme = item.querySelector('.item-theme').innerHTML;
                if (theme.toUpperCase().indexOf(target.toUpperCase()) !== -1) {
                    item.classList.remove('_hidden_theme');
                } else {
                    item.classList.add('_hidden_theme');
                }
            });
        }
    });
}