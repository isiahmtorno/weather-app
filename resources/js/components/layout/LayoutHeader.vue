<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5" id="ftco-navbar">
        <div class="container">
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#ftco-nav"
                aria-controls="ftco-nav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon" /> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li
                        class="nav-item"
                        v-for="route in routes"
                        :key="route.name"
                        :to="route.path"
                    >
                        <router-link class="nav-link" exact-active-class="active" :to="route.path">
                            {{ route.name }}
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    import routes from '../../config/routes';

    export default {
        name: 'LayoutHeader',

        computed: {
            routes() {
                return routes;
            },
        }
    }
</script>
