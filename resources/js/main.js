window._ = require('lodash');

window.axios = require('axios');
window.jQuery = $ = require('jquery');
window.Popper = require('popper.js');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

window.csrf= (token && token.hasAttribute('content')) ? token.getAttribute('content') : null;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.csrf
    }
});

require('bootstrap');
require('@fortawesome/fontawesome-free');
require('jquery.nicescroll')
require('moment');
