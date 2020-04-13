import IMask from 'imask';

const phones = document.querySelectorAll('[type="tel"]');
Array.from(phones).forEach(phone => {
    new IMask(phone, {
        mask: '(000) 000-00-00'
    });
});

let nameCard = document.querySelectorAll('.form-control--name-card');
Array.from(nameCard).forEach(name => {
    new IMask(name, {
        mask: '0000 0000 0000'
    });
});

let termCard = document.querySelectorAll('.form-control--term-card');
Array.from(termCard).forEach(term => {
    new IMask(term, {
        mask: '00 / 00'
    });
});

let cvvCard = document.querySelectorAll('.form-control--cvv-card');
Array.from(cvvCard).forEach(cvv => {
    new IMask(cvv, {
        mask: '000'
    });
});


/**
 * Form-label
 */
let formControls = document.querySelectorAll('.form-control');
formControls.forEach(item => {
    item.addEventListener('focus', function (e) {
        if (!item.parentElement.classList.contains('.form-group')) {
            if (!item.parentElement.parentElement.classList.contains('.form-group--phone')) {
                item.parentElement.parentElement.classList.add('in-focus')
            }
        }
        item.parentElement.classList.add('in-focus')
    });

    item.addEventListener('blur', function (e) {
        if (!item.parentElement.classList.contains('.form-group')) {
            if (!item.parentElement.parentElement.classList.contains('.form-group--phone')) {
                e.target.value !== "" ? item.parentElement.parentElement.classList.add('in-focus') : item.parentElement.parentElement.classList.remove('in-focus');
            }
        }
        e.target.value !== "" ? item.parentElement.classList.add('in-focus') : item.parentElement.classList.remove('in-focus');
    });
});

let openForm = document.querySelector('.open-search'),
    formSearch = document.querySelector('.form-search-mob'),
    formSearchMask = document.querySelector('.form-search-mask');

openForm.addEventListener('click', function () {
    formSearch.classList.add('active');
    formSearchMask.classList.add('active');
});

formSearchMask.addEventListener('click', function () {
    formSearch.classList.remove('active');
    formSearchMask.classList.remove('active');
});