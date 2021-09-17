'use strict';

import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

import routes from './config/routes';

const router = new Router({
    base: '/',
    mode: 'history',
    routes
});

export default function () {
    return router;
}
