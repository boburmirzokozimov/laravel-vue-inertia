<script setup>
import {Head, useForm} from "@inertiajs/vue3";

defineProps({
    orders: Object,
})

function changed(e, id) {
    form.status = e.target.value

    form.patch(`/orders/${id}`)
}

let form = useForm({
    status: '',
})

</script>

<template>
    <Head>
        <title>Orders</title>
    </Head>
    <div class="w-full mb-6">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse p-2">
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
                <tr v-for="order in orders" :key="order.id" class="">
                    <td class="py-4 px-6 border-b border-grey-light">{{ order.user }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ order.gift }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">Yunusabad</td>
                    <td class="">
                        <div class="ml-4">
                            <form action='' method="post">
                                <select
                                    id="status"
                                    :value="order.status"
                                    class="border-gray-200 rounded"
                                    name="status"
                                    @change="(e)=>changed(e,order.id)">
                                    <option v-for="status in order.statuses"
                                            :key="status"
                                            :value="status"
                                            v-text="status"></option>
                                </select>
                            </form>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<style scoped>

</style>
