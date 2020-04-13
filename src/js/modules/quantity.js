document.addEventListener('DOMContentLoaded', function () {
    let inputs = document.getElementsByClassName('quantity');

    function incInputNumber(input, step) {
        let val = +input.value;
        if (isNaN(val)) val = 1;
        val += step;
        input.value = val > 1 ? val : 1
    }

    Array.prototype.forEach.call(inputs, function (el) {
        let input = el.getElementsByTagName('input')[0];

        el.getElementsByClassName('quantity-button--up')[0].addEventListener('click', function (e) {
            e.preventDefault();
            incInputNumber(input, 1)
        });

        input.addEventListener('click', function (e) {
            e.preventDefault();
        });

        el.getElementsByClassName('quantity-button--down')[0].addEventListener('click', function (e) {
            e.preventDefault();
            incInputNumber(input, -1)
        })
    })
});