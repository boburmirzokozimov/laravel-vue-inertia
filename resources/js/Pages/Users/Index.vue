<template>
    <Head>
        <title>Users</title>
    </Head>

    <div class="mb-6 flex justify-between items-center">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl mr-6">
                Users
            </h1>

            <div>
                <Link v-if="can.createUser" class="bg-blue-600 p-2 rounded-xl text-white" href="/users/create">Create
                </Link>
            </div>
        </div>


        <div>
            <input
                id="search"
                v-model="search"
                class="border rounded-2xl"
                name="search"
                placeholder="Search..."
                type="text">
        </div>
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

    <div>
        <Paginator :links="users.links" class="mt-6"/>
    </div>

</template>

<script setup>
import NavLink from "@/Shared/NavLink.vue";
import Paginator from "@/Shared/Paginator.vue";
import {ref, watch} from "vue";
import {Link, router} from "@inertiajs/vue3";
import {debounce} from "lodash/function.js";

const props = defineProps({
    users: Object,
    filters: Object,
    can: Array
})

let search = ref(props.filters.search);

watch(search, debounce(function (value) {
    router.get(
        '/users', {search: value}, {
            preserveState: true,
            replace: true,
        }
    )
}, 500))

</script>
