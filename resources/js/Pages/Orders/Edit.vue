<script setup>
import {Head, useForm} from "@inertiajs/vue3";

const props = defineProps({
    order: Array,
    statuses: Array,
})

const form = useForm({
    status: props.order.status,
})

function change(e) {
    console.log(e)
}
</script>

<template>
    <Head>
        <title>Orders</title>
    </Head>
    <div class="w-full mb-6">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Name
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Gift Type
                    </th>
                    <th>
                        Branch
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Status
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="py-4 px-6 border-b border-grey-light">{{ order.user }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ order.gift }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">Yunusabad</td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <form action='' method="post" @change.prevent="form.patch('/orders/'+order.id)">
                            <select id="status" v-model="form.status" class="border-gray-200 rounded" name="status">
                                <option v-for="status in statuses"
                                        :value="status"
                                        v-text="status"></option>
                            </select>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<style scoped>

</style>
