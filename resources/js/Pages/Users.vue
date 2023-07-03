<script>
import {Link} from '@inertiajs/vue3'
import Nav from "@/Shared/Nav.vue";
import Layout from "@/Shared/Layout.vue";

export default {
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
                Users
            </h1>
        </div>
    </Layout>
</template>

<style scoped>

</style>
