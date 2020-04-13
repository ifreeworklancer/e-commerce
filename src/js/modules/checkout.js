let checkoutSelect = document.querySelectorAll('.checkout-select-input');

if (checkoutSelect.length) {

    checkoutSelect.forEach(item => {
        item.addEventListener('click', function () {
            item.parentNode.classList.toggle('active');
            if(!item.nextElementSibling.clientHeight) {
                item.nextElementSibling.style.height = `${item.nextElementSibling.childNodes[0].clientHeight}px`;
            } else {
                item.nextElementSibling.style.height = '0px';
            }
        });
    });
}