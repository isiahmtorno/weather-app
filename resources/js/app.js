'use strict';

require('./bootstrap');

import App from './components/Index';
import router from './router';

let settings = JS_VARS.settings;

window.Vue = require('vue').default;

Vue.prototype.$cities = settings.cities;

new Vue({
    router: router(),
    render: h => h(App)
}).$mount('#app');
