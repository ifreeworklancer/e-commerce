let productGalleryBodyItem = document.querySelectorAll('.product-gallery-body-item'),
    productGalleryNavItem = document.querySelectorAll('.product-gallery-nav-item--image');

if (productGalleryBodyItem.length) {
    productGalleryNavItem.forEach(item => {
        item.addEventListener('click', function (e) {
            productGalleryBodyItem.forEach(el => {
                el.classList.remove('active');
            });
            productGalleryBodyItem[Array.prototype.indexOf.call(this.parentElement.children, this)].classList.add('active');
        });
    });
}

let productTabsNavItem = document.querySelectorAll('.product-info .custom-tabs .custom-tabs-nav li'),
    productTabsBodyItem = document.querySelectorAll('.product-info .custom-tabs .custom-tabs-body .custom-tabs-body-item');

if (productTabsNavItem.length) {

    let maxHeight = 0;

    productTabsBodyItem.forEach(item => {
        if (maxHeight < item.clientHeight) {
            maxHeight = item.clientHeight;
        }
    });

    productTabsBodyItem[0].parentElement.style.height = `${maxHeight}px`;

    productTabsNavItem.forEach(item => {
        item.addEventListener('click', function (e) {
            productTabsBodyItem.forEach(el => {
                el.classList.remove('active');
            });

            productTabsNavItem.forEach(el => {
                el.classList.remove('active');
            });

            item.classList.add('active');

            productTabsBodyItem[Array.prototype.indexOf.call(this.parentElement.children, this)].classList.add('active');
        })
    });
}
