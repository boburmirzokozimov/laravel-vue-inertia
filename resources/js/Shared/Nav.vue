<script>
import {Link} from "@inertiajs/vue3";
import NavLink from "@/Shared/NavLink.vue";

export default {
    components: {
        NavLink,
        Link
    }
}
</script>

<template>
    <nav>
        <ul class="flex space-x-4 list-inside">
            <li>
                <NavLink :active="$page.component==='Home'" href="/">Home</NavLink>
            </li>
            <li>
                <NavLink :active="$page.component==='Settings'" href="/settings">Settings</NavLink>
            </li>
            <li>
                <NavLink :active="$page.component==='Users'" href="/users">Users</NavLink>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
