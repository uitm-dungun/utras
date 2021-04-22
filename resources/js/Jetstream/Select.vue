<template>
    <select
        class="block w-full mt-1 text-sm rounded border-gray-200 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="select"
    >
        <slot></slot>
    </select>
</template>

<script>
export default {
    props: ['modelValue'],

    emits: ['update:modelValue'],

    methods: {
        focus() {
            this.$refs.select.focus()
        },
    },
}
</script>

