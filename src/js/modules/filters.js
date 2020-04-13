import './rSlider';

let filtersListItem = document.querySelectorAll('.filters-item-list li');

if (filtersListItem.length) {
    filtersListItem.forEach(item => {
        item.childNodes[0].addEventListener('click', function () {
            this.parentElement.classList.toggle('active');
            if (this.nextElementSibling.clientHeight === 0) {
                this.nextElementSibling.style.height = `${this.nextElementSibling.childNodes[0].clientHeight}px`;
            } else {
                this.nextElementSibling.style.height = '0px';
            }
        })
    });
}


let rangeSlider = new rSlider({
    target: '#rangeSlider',
    values: {min: 0, max: 1000},
    step: 100,
    range: true,
    set: [300, 600],
    scale: false,
    labels: false,
    // onChange: function (vals) {
    //     console.log('');
    // }
});