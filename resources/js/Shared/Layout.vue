<script setup>
import Nav from "@/Shared/Nav.vue";
import {Head} from "@inertiajs/vue3";
</script>

<template>
    <Head>
        <title>My app</title>
        <meta content="Information"
              head-key="description"
              type="description"
        >
    </Head>

    <section class="p-6 bg-gray-200">
        <header class="flex items-center justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg mr-4">My app</h1>
                <p>
                    Welcome Back, {{ $page.props.auth.user.name }}
                </p>
            </div>
            <Nav/>
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-4xl mx-auto">
            <slot/>
        </div>
    </section>
</template>
