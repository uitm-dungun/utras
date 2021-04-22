<template>
    <app-layout>
        <template #header>
            <inertia-link :href="route('vehicles.index')" class="text-purple-500 hover:text-purple-600">Vehicle /</inertia-link>
            {{ vehicle.plate_number }}
        </template>
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Modify Information</h4>
        <div class="grid gap-6 mb-8 md:grid-cols-3">
            <div class="col-span-2 px-4 py-3 mb-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" style="height: max-content">
                <div class="block text-sm">
                    <jet-label for="plate_number" value="Plate Number" />
                    <jet-input id="plate_number" type="text" v-model="form.plate_number" :placeholder="vehicle.plate_number" required />
                </div>

                <div class="block text-sm mt-4">
                    <jet-label for="type" value="Type" />
                    <jet-select id="type" v-model="form.type" required>
                        <option disabled value="">Please select one</option>
                        <option v-for="vehicleType in ['Bus', 'Car', 'Lorry', 'Truck']" v-bind:key="vehicleType" :value="vehicleType">{{ vehicleType }}</option>
                    </jet-select>
                </div>

                <div class="block text-sm mt-4">
                    <jet-label for="type" value="Location" />
                    <jet-select id="type" v-model="form.located_at_campus_code" required>
                        <option disabled value="">Please select one</option>
                        <option v-for="campus in campuses" v-bind:key="campus.code" :value="campus.code">{{ campus.name }}</option>
                    </jet-select>
                </div>

                <div class="block text-sm mt-4">
                    <jet-label for="availablity" value="Availablity" />
                    <jet-radio id="availablity" v-model="form.is_available" required>
                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                            <input name="is_available" value="true" type="radio" :checked="form.is_available" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" />
                            <span class="ml-2">Available</span>
                        </label>
                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                            <input name="is_available" value="false" type="radio" :checked="!form.is_available" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" />
                            <span class="ml-2">Unavailable</span>
                        </label>
                    </jet-radio>
                </div>

                <div class="block mt-4">
                    <button class="w-full px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Save Changes</button>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="px-4 py-3 mb-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="block text-sm">
                        <div class="relative">
                            <img src="/img/placeholders/grant_example.jpg" alt="" />
                            <div class="absolute right-0 top-0 flex flex-col items-center mr-3 mt-3">
                                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors transition-opacity duration-150 bg-purple-600 opacity-40 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 hover:opacity-100 focus:outline-none focus:shadow-outline-purple" aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                    </svg>
                                </button>
                                <button class="mt-3 flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors transition-opacity duration-150 bg-purple-600 opacity-40 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 hover:opacity-100 focus:outline-none focus:shadow-outline-purple" aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="block text-sm mt-4">
                        <jet-label for="puspakomExpiry" value="Puspakom Expiry" />
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <datepicker id="puspakomExpiry" v-model="form.puspakom_expiry" class="block w-full mt-1 text-sm rounded border-gray-200 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Select a Date" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="block text-sm mt-4">
                        <jet-label for="roadtaxExpiry" value="Roadtax Expiry" />
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <datepicker id="roadtaxExpiry" v-model="form.roadtax_expiry" class="block w-full mt-1 text-sm rounded border-gray-200 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Select a Date" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="block text-sm mt-4">
                        <jet-label for="insuranceExpiry" value="Insurance Expiry" />
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <datepicker id="insuranceExpiry" v-model="form.insurance_expiry" class="block w-full mt-1 text-sm rounded border-gray-200 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Select a Date" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">Danger Zone</h4>
                    <ul class="divide-y divide-gray-200 dark:divide-gray-600">
                        <li class="flex md:flex-row py-4 justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Delete Vehicle</span>
                            <button class="flex items-center justify-between p-2 text-sm text-red-500 hover:text-white font-medium leading-5 transition-colors duration-150 border border-transparent rounded-lg active:bg-red-500 hover:bg-red-600 border-gray-200 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red focus:border-red-400 dark:focus:shadow-outline-gray" aria-label="Like">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </li>
                        <li class="flex md:flex-row py-4 justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Clear Maintenances</span>
                            <button class="flex items-center justify-between p-2 text-sm text-red-500 hover:text-white font-medium leading-5 transition-colors duration-150 border border-transparent rounded-lg active:bg-red-500 hover:bg-red-600 border-gray-200 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red focus:border-red-400 dark:focus:shadow-outline-gray" aria-label="Like">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script setup>
import Datepicker from 'vue3-datepicker'
import { ref, toRef } from 'vue'
// const picked = ref(new Date())
const picked = ref(new Date())
</script>

<script>
import AppLayout from '@/Layouts/AppLayout'
import JetLabel from '@/Jetstream/Label'
import JetInput from '@/Jetstream/Input'
import JetSelect from '@/Jetstream/Select'
import JetRadio from '@/Jetstream/Radio'
// import JetDatePicker from '@/Jetstream/DatePicker'

export default {
    props: ['vehicle', 'dark', 'canResetPassword', 'status'],

    components: {
        AppLayout,
        JetLabel,
        JetInput,
        JetSelect,
        JetRadio,
        // JetDatePicker,
    },

    data() {
        return {
            show: false,

            campuses: [
                {
                    code: 'dgn',
                    name: 'Dungun',
                },
                {
                    code: 'bb',
                    name: 'Bukit Besi',
                },
                {
                    code: 'kt',
                    name: 'Kuala Terengganu',
                },
            ],

            form: this.$inertia.form({
                plate_number: this.vehicle.plate_number,
                type: this.vehicle.type,
                located_at_campus_code: this.vehicle.located_at_campus_code,
                is_available: this.vehicle.is_available,
                grant_image_path: this.vehicle.grant_image_path,
                puspakom_expiry: new Date(this.vehicle.puspakom_expiry),
                roadtax_expiry: new Date(this.vehicle.roadtax_expiry),
                insurance_expiry: new Date(this.vehicle.insurance_expiry),
            }),
        }
    },

    methods: {
        submit() {
            this.form
                .transform((data) => ({
                    ...data,
                    remember: this.form.remember ? 'on' : '',
                }))
                .post(this.route('vehicles.update', vehicle), {
                    preserveScroll: true,
                })
        },
    },
}
</script>
