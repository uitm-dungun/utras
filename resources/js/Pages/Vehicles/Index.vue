<template>
    <app-layout>
        <template #header>Vehicle</template>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Listings</h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-8">
            <div class="w-full overflow-x-auto">
                <jet-table>
                    <jet-table-head>
                        <th class="px-4 py-3">Vehicle</th>
                        <th class="px-4 py-3">Location</th>
                        <th class="px-4 py-3">Availabilty</th>
                        <th class="px-4 py-3">Last Maintenance</th>
                        <th class="px-6 py-3 text-center">Menu</th>
                    </jet-table-head>
                    <jet-table-body class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <jet-table-row v-for="vehicle in vehicles.data" v-bind="vehicle" v-bind:key="vehicle.id">
                            <jet-table-data>
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" :src="`/img/vehicles/${vehicle.type}.jpg`" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ vehicle.plate_number }}</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">{{ vehicle.type }}</p>
                                    </div>
                                </div>
                            </jet-table-data>
                            <jet-table-data class="text-sm">{{ vehicle.located_at_campus_name }}</jet-table-data>
                            <jet-table-data class="text-xs">
                                <span :class="{ 'text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100': vehicle.is_available, 'text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700': !vehicle.is_available }" class="px-2 py-1 font-semibold leading-tight rounded-full">{{ vehicle.is_available ? 'Available' : 'Unavailable' }}</span>
                            </jet-table-data>
                            <jet-table-data class="text-sm">{{ vehicle.maintenances[0].date }}</jet-table-data>
                            <jet-table-data>
                                <div class="flex items-center justify-center space-x-4 text-sm">
                                    <inertia-link :href="route('vehicles.edit', vehicle)" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-gray-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </inertia-link>
                                </div>
                            </jet-table-data>
                        </jet-table-row>
                    </jet-table-body>
                </jet-table>
            </div>

            <!-- Pagination -->
            <pagination-link :paginator="vehicles" />
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import Welcome from '@/Jetstream/Welcome'
import PaginationLink from '@/Jetstream/PaginationLink'
import JetTable from '@/Jetstream/Table'
import JetTableHead from '@/Jetstream/TableHead'
import JetTableBody from '@/Jetstream/TableBody'
import JetTableRow from '@/Jetstream/TableRow'
import JetTableData from '@/Jetstream/TableData'

export default {
    props: {
        vehicles: Array,
        dark: Boolean,
    },

    components: {
        AppLayout,
        Welcome,
        PaginationLink,
        JetTable,
        JetTableHead,
        JetTableBody,
        JetTableRow,
        JetTableData,
    },

    data() {
        return { show: false }
    },
}
</script>
