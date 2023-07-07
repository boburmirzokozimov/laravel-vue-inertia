<script setup>
import {Head, useForm} from "@inertiajs/vue3";

let form = useForm({
    name: "",
    email: "",
    password: "",
})

</script>

<template>
    <Head>
        <title>Create User</title>
    </Head>

    <h1 class="mb-6">Create New User</h1>

    <form action="/users" class="max-w-2xl mx-auto" method="post" @submit.prevent="form.post('/users')">
        <div class="mb-6">
            <label
                class="block mb-2 uppercase font-bold text-sm text-gray-700"
                for="name"
            >
                Name
            </label>

            <input
                id="name"
                v-model="form.name"
                class="border border-gray-200 p-2 w-full rounded-2xl"
                name="name"
                required
                type="text"
            />
            <div v-if="form.errors.name" class="text-red-500 text-sm">{{ form.errors.name }}</div>
        </div>

        <div class="mb-6">
            <label
                class="block mb-2 uppercase font-bold text-sm text-gray-700"
                for="email"
            >
                Email
            </label>

            <input
                id="email"
                v-model="form.email"
                class="border border-gray-200 p-2 w-full rounded-2xl"
                name="email"
                required
                type="email"
            />
            <div v-if="form.errors.email" class="text-red-500 text-sm">{{ form.errors.email }}</div>
        </div>

        <div class="mb-6">
            <label
                class="block mb-2 uppercase font-bold text-sm text-gray-700"
                for="password"
            >
                Password
            </label>

            <input
                id="password"
                v-model="form.password"
                class="border border-gray-200 p-2 w-full rounded-2xl"
                name="password"
                required
                type="password"
            />
            <div v-if="form.errors.password" class="text-red-500 text-sm">{{ form.errors.password }}</div>
        </div>

        <div class="flex justify-end w-full">
            <button :disabled="form.processing" class="bg-blue-500 p-2 rounded-2xl text-white" type="submit">Submit
            </button>
        </div>
    </form>
</template>

<style scoped>

</style>
