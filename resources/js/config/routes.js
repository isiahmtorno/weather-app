'use strict';

import Weather from '../components/weather/Weather';
import Venue from '../components/venue/Venue';

const ROUTES = [
    {
        path: '/weather-forecast',
        component: Weather,
        name: 'Wethear Forecast',
    },
    {
        path: '/venues',
        component: Venue,
        name: 'Venues',
    },
];

export const MENU_ROUTES = () => {
    let routes = {};
    ROUTES.forEach(route => {
        routes[route.path] = route;
    });
    return routes;
};

export default ROUTES;
