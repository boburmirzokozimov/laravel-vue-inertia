<template>
    <Head>
        <title>Users</title>
    </Head>

    <div class="mb-6">
        <h1 class="text-3xl">
            Users
        </h1>
    </div>

    <div class="w-full">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Name
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users" :key="user.id" class="hover:bg-gray-200">
                    <td class="py-4 px-6 border-b border-grey-light">{{ user.name }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <Link :href="`users/${user.id}/edit`"
                              class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark">
                            Edit
                        </Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<style scoped>

</style>
<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    users: Array
})
</script>
