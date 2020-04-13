let menuItems = document.querySelectorAll('.header-nav-list-item .header-nav-list-item__link');

menuItems.forEach(item => {
    if (item.nextElementSibling) {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            item.parentElement.classList.toggle('active');
            item.nextElementSibling.classList.toggle('active');
        });

        document.addEventListener('click', e => {
            let target = e.target;
            let its_menu = target === item.parentElement || item.parentElement.contains(target);
            let menu_is_active = item.parentElement.classList.contains('active');

            if (!its_menu && menu_is_active) {
                item.parentElement.classList.remove('active');
                item.nextElementSibling.classList.remove('active');
            }
        })

    }
});

let burgerMenu = document.querySelector('.burger-menu'),
    menu = document.querySelector('.menu'),
    closeMenu = document.querySelector('.close-menu');

burgerMenu.addEventListener('click', function () {
    burgerMenu.classList.toggle('active');
    menu.classList.toggle('active');
});

closeMenu.addEventListener('click', function () {
    burgerMenu.classList.remove('active');
    menu.classList.remove('active');
});

