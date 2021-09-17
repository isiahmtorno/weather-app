<template>
    <div class="container">
        <div class="d-flex justify-content-center mb-5">
            <form-select @loader="loader" v-model="venues" page="venues" />
        </div>
        <div v-if="venues && ! isLoading" class="row justify-content-center">
            <div v-for="venue in venues" :key="venue.id" class="col-md-4 mb-4">
                <venue-list :venue="venue" />
            </div>
        </div>
        <div v-else class="text-center">
            <loader />
        </div>
    </div>
</template>

<script>
    import FormSelect from '../form/FormSelect';
    import Loader from '../loader/Loader.vue';
    import VenueList from './VenueList';

    export default {
        name: 'Venue',

        components: {
            FormSelect,
            Loader,
            VenueList,
        },

        data() {
            return {
                venues: null,
                isLoading: true,
            }
        },

        methods: {
            loader(value) {
                this.isLoading = value;
            },
        },
    }
</script>
