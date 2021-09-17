<template>
    <div class="card">
        <div class="card-header bg-white">
            <img :src="icon" class="mr-2">
            <strong>{{ venue.name }}</strong>
        </div>
        <div class="card-body">
            <p class="mb-1">
                <strong>Category:</strong> {{ category.name }}
            </p>
            <p class="mb-0">
                <strong>Address:</strong> {{ address }}
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'VenueList',

        props: {
            venue: {
                type: Object,
                default: null,
            },
        },

        computed: {
            category() {
                return this.venue.categories[0];
            },

            icon() {
                return `${this.category.icon.prefix}bg_32${this.category.icon.suffix}`;
            },

            address() {
                let location = this.venue.location;

                return `${location.address} ${location.crossStreet} ${location.city}, ${location.state}
                    ${location.postalCode} ${location.country}`;
            },
        }
    }
</script>
