export function calculator() {
    const calculator = document.querySelector('.calculator');
    if (!calculator) {
        return;
    }

    calculator.addEventListener('click', () => {
        let number = 44;

        // -50%
        let discount1 = 0;
        const param1 = document.getElementById('checkbox_1');
        if (param1.checked === true) {
            discount1 = Math.round(number * 50 / 100);
        }

        // -25%
        let discount2 = 0;
        const param2 = document.getElementById('checkbox_2');
        if (param2.checked === true) {
            discount2 = Math.round(number * 25 / 100);
        }

        // -10%
        let discount3 = 0;
        const param3 = document.getElementById('checkbox_3');
        const param4 = document.getElementById('checkbox_4');
        const param5 = document.getElementById('checkbox_5');
        if (param3.checked === true || param4.checked === true || param5.checked === true) {
            discount3 = Math.round(number * 10 / 100);
        }

        // -5%
        let discount4 = 0;
        const param6 = document.getElementById('checkbox_6');
        const param7 = document.getElementById('checkbox_7');
        if (param6.checked === true || param7.checked === true) {
            discount4 = Math.round(number * 5 / 100);
        }

        // +50
        let increase = 0;
        const param8 = document.getElementById('checkbox_8');
        if (param8.checked === true) {
            increase = 50;
        }

        let increase1 = 0;
        const param9 = document.getElementById('calc-select');
        if (param9.value === 'Eilig') {
            increase1 = Math.round(number * 20 / 100);
        }

        let sum = number - discount1 - discount2 - discount3 - discount4 + increase + increase1;

        document.getElementById('price-total').innerHTML = sum;
        calculator.querySelector('input[name="total"]').value = sum;
    });
}