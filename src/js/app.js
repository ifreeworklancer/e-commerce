import Vue from 'vue';

const app = new Vue({
    el: '#app',
    mounted() {
        // Form
        require('./modules/form');

        // Menu
        require('./modules/menu');

        // Slider
        require('./modules/slider');

        // Slider
        require('./modules/quantity');

        // Select
        require('./modules/select');

        // Video
        require('./modules/video');

        // Modal
        require('./modules/modal');

        // Product
        require('./modules/product');

        // Filters
        require('./modules/filters');

        // Checkout
        require('./modules/checkout');
    },
});