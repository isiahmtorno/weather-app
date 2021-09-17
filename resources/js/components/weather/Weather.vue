<template>
    <div class="container">
        <div class="d-flex justify-content-center mb-5">
            <form-select @loader="loader" v-model="weather" page="weather-forecast" />
        </div>
        <div class="d-flex justify-content-center">
            <div v-if="weather && ! isLoading" class="widget">
                <div class="weather-icon">
                    <img :src="icon" />
                </div>
                <div class="weather-info">
                    <div class="temperature"><span>{{ temperature }}&deg;</span></div>
                    <div class="description">
                        <div class="weather-condition">{{ getWeather.description }}</div>
                        <div class="place">{{ place }}</div>
                    </div>
                </div>
                <div class="date">
                    {{ dateToday }}
                </div>
            </div>
            <div v-else class="text-center">
                <loader />
            </div>
        </div>
    </div>
</template>

<script>
    import FormSelect from '../form/FormSelect';
    import Loader from '../loader/Loader';
    import moment from 'moment';

    const DATE_FORMAT = 'Do MMM';

    export default {
        name: 'Weather',

        components: {
            FormSelect,
            Loader,
        },

        data() {
            return {
                weather: null,
                isLoading: true,
            }
        },

        computed: {
            getWeather() {
                return this.weather.weather[0];
            },

            dateToday() {
                return moment().format(DATE_FORMAT);
            },

            place() {
                return `${this.weather.name}, ${this.weather.sys.country}`;
            },

            icon() {
                return `http://openweathermap.org/img/wn/${this.getWeather.icon}@4x.png`;
            },

            temperature() {
                return parseInt(this.weather.main.temp);
            },
        },

        methods: {
            loader(value) {
                this.isLoading = value;
            },
        },
    }
</script>
