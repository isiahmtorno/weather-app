<template>
    <div>
        <h4 class="text-center font-weight-bold">Search for {{ toTitleCase }}</h4>
        <v-select :options="options" placeholder="Select City" v-model="city" @input="search"></v-select>
    </div>
</template>

<script>
    import vSelect from 'vue-select';
    import _ from 'lodash';

    const DEFAULT_CITY = 'Tokyo';

    export default {
        name: 'FormSelect',

        components: {
            vSelect,
        },

        props: {
            page: {
                type: String,
                default: null,
            },
        },

        data() {
            return {
                city: {
                    label: DEFAULT_CITY,
                    code: DEFAULT_CITY
                },
            };
        },

        created() {
            this.cities = this.$cities;
        },

        computed: {
            options() {
                return this.cities.map(city => ({
                    label: city.name,
                    code: city.name
                }));
            },

            toTitleCase() {
                return this.page.split('-').map(_.capitalize).join(' ');
            }
        },

        methods: {
            search(value) {
                let params = new URLSearchParams({
                    city: value.code,
                });

                this.$emit('loader', true);

                axios.get(`/api/${this.page}?${params.toString()}`).then(response => {
                    this.$emit('input', response.data);
                    this.$emit('loader', false);
                });
            },
        },

        mounted() {
            this.search({code: DEFAULT_CITY});
        },
    }
</script>
