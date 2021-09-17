<template>
    <div>
        <layout-header />
        <router-view :key="$route.path" />
    </div>
</template>

<script>
    import LayoutHeader from './layout/LayoutHeader';

    export default {
        name: 'Index',

        components: {
            LayoutHeader,
        },
    }
</script>
