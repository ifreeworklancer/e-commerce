let customSelectInput = document.querySelectorAll('.custom-selected-input input');

if (customSelectInput.length) {
    customSelectInput.forEach(item => {
        item.addEventListener('focus', function () {
            item.parentNode.parentNode.classList.add('active');
        });
        item.addEventListener('blur', function () {
            item.parentNode.parentNode.classList.remove('active');
        })
    })
}