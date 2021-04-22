<template>
    <input
        :class="hasError ? 'border-red-600 focus:border-red-400 focus:shadow-outline-red' : 'focus:border-purple-400 dark:focus:shadow-outline-gray focus:shadow-outline-purple border-gray-200'"
        class="autofill:bg-purple-200 block w-full mt-1 text-sm rounded dark:border-gray-600 dark:bg-gray-700 focus:outline-none dark:text-gray-300 form-input" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input"
    >
</template>

<script>
    export default {
        props: {
            'modelValue': String,
            'hasError': false
        },

        emits: ['update:modelValue'],

        methods: {
            focus() {
                this.$refs.input.focus()
            }
        }
    }
</script>

