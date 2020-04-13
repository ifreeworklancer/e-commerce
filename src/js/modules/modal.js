let formRegister = document.querySelector('.form-register'),
    modalRegister = document.querySelector('.custom-modal-register'),
    modalMask = document.querySelector('.modal-mask'),
    modalMaskAddBasket = document.querySelector('.modal-mask-add-basket'),
    closeModal = document.querySelectorAll('.close-modal'),
    buttonAddBasket = document.querySelectorAll('.btn-add-basket'),
    modalAddBasket = document.querySelector('.custom-modal-add-basket');

if (buttonAddBasket.length) {
    buttonAddBasket.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            modalAddBasket.classList.add('active');
            modalMaskAddBasket.classList.add('active');
        })
    })
}

if (!!formRegister) {
    formRegister.addEventListener('submit', function (e) {
        e.preventDefault();
        modalRegister.classList.add('active');
        modalMask.classList.add('active');
    });
}

closeModal.forEach(item => {
    item.addEventListener('click', function () {
        modalRegister.classList.remove('active');
        modalAddBasket.classList.remove('active');
        modalMask.classList.remove('active');
    })
});

modalMaskAddBasket.addEventListener('click', function () {
    modalAddBasket.classList.remove('active');
    modalMaskAddBasket.classList.remove('active');
});

modalMask.addEventListener('click', function () {
    modalRegister.classList.remove('active');
    modalMask.classList.remove('active');
});