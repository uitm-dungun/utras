<template>
    <datepicker
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="date"
         class="block w-full mt-1 text-sm rounded border-gray-200 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
    />
</template>

<script setup>
    import Datepicker from 'vue3-datepicker'
    import { ref } from 'vue'
    const picked = ref(new Date())
</script>

<script>

    export default {
        
        props: ['modelValue'],

        emits: ['update:modelValue'],

        methods: {
            focus() {
                this.$refs.date.focus()
            }
        }
    }
</script>

