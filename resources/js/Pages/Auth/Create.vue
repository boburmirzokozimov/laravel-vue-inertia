<script>
export default {
    layout: null
}
</script>

<script setup>
import {Head, useForm} from "@inertiajs/vue3";

let form = useForm({
    email: "",
    password: "",
})

</script>

<template>
    <Head>
        <title>Login</title>
    </Head>

    <main class="flex justify-center items-center min-h-screen">
        <section class="max-w-full mx-auto px-4">
            <form action="/users/store" class="border px-6 py-4 rounded-2xl" method="post"
                  @submit.prevent="form.post('/login')">
                <h1 class="mb-6">Login</h1>

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
                    <button :disabled="form.processing" class="bg-blue-500 p-2 rounded-2xl text-white" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>


<style scoped>

</style>
