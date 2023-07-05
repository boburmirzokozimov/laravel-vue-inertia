<template>
    <Head>
        <title>Users</title>
    </Head>

    <div class="mb-6">
        <h1 class="text-3xl">
            Users
        </h1>
    </div>

    <div class="w-full mb-6">
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
                <tr v-for="user in users.data" :key="user.id" class="hover:bg-gray-200">
                    <td class="py-4 px-6 border-b border-grey-light">{{ user.name }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <NavLink :href="`users/${user.id}/edit`"
                        >
                            Edit
                        </NavLink>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="">
        <ul>
            <Component
                :is="link.url ? 'Link':'span'"
                v-for="link in users.links"
                :class="link.url ? 'text-gray-500':'text-gray-200'"
                :href="link.url"
                class="px-1"
                v-html="link.label"
            />
        </ul>
    </div>

</template>

<style scoped>

</style>
<script setup>
import NavLink from "@/Shared/NavLink.vue";

defineProps({
    users: Object
})
</script>
