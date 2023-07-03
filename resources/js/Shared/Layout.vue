<script setup>
import Nav from "@/Shared/Nav.vue";
</script>

<template>
    <section class="p-6 bg-gray-200">
        <header class="flex items-center justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg mr-4">My app</h1>
                <p>
                    Welcome Back,{{ $page.props.auth.user }}
                </p>
            </div>
            <Nav/>
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot/>
        </div>
    </section>
</template>
