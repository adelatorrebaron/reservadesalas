
import Vue from 'vue';
import router from './router';
import App from './components/App';

require('./bootstrap');
require('admin-lte'); // Añadida esta linea para que carge el admin-lte.

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
})