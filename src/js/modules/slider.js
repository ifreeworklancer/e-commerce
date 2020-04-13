import Flickity from 'flickity';

window.onload = () => {
    let introSlider = document.querySelector('.intro-slider');

    if (introSlider) {
        const flkty1 = new Flickity(introSlider, {
            prevNextButtons: false,
            pageDots: true,
            contain: true,
            draggable: false,
            wrapAround: false,
            cellAlign: 'left',
        });

        document.querySelector('.slider-arrow--intro .slider-arrow-item--prev').addEventListener('click', function () {
            flkty1.previous(false, false);
        });

        document.querySelector('.slider-arrow--intro .slider-arrow-item--next').addEventListener('click', function () {
            flkty1.next(false, false);
        });
    }

    let popularSlider = document.querySelector('.popular-slider');

    if (popularSlider) {
        const flkty2 = new Flickity(popularSlider, {
            prevNextButtons: false,
            pageDots: false,
            contain: true,
            draggable: false,
            wrapAround: false,
            cellAlign: 'left',
        });

        document.querySelector('.slider-arrow--popular .slider-arrow-item--prev').addEventListener('click', function () {
            flkty2.previous(false, false);
        });

        document.querySelector('.slider-arrow--popular .slider-arrow-item--next').addEventListener('click', function () {
            flkty2.next(false, false);
        });
    }

    let reviewsSlider = document.querySelector('.reviews-slider');

    if (reviewsSlider) {
        const flkty3 = new Flickity(reviewsSlider, {
            prevNextButtons: false,
            pageDots: true,
            contain: true,
            draggable: false,
            wrapAround: true,
            cellAlign: 'center',
            cellSelector: '.reviews-slider-item',
        });

        document.querySelector('.slider-arrow--reviews .slider-arrow-item--prev').addEventListener('click', function () {
            flkty3.previous(false, false);
        });

        document.querySelector('.slider-arrow--reviews .slider-arrow-item--next').addEventListener('click', function () {
            flkty3.next(false, false);
        });
    }

    let promotionalSlider = document.querySelector('.promotional-product-slider');

    if (promotionalSlider) {
        const flkty4 = new Flickity(promotionalSlider, {
            prevNextButtons: false,
            pageDots: true,
            contain: true,
            draggable: false,
            wrapAround: false,
            cellAlign: 'left',
        });

        document.querySelector('.slider-arrow--promotional .slider-arrow-item--prev').addEventListener('click', function () {
            flkty4.previous(false, false);
        });

        document.querySelector('.slider-arrow--promotional .slider-arrow-item--next').addEventListener('click', function () {
            flkty4.next(false, false);
        });
    }
};