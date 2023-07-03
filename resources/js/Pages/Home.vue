<script>
import {Link} from '@inertiajs/vue3'
import Nav from "@/Shared/Nav.vue";
import Layout from "@/Shared/Layout.vue";

export default {
    props: {
        time: String
    },
    components: {
        Layout,
        Nav,
        Link
    }
}
</script>

<template>
    <Layout>
        <div>
            <h1 class="text-3xl">
                Home
            </h1>
        </div>
    </Layout>
</template>

<style scoped>

</style>
