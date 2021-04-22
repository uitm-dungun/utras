<template>
    <span v-if="value" class="text-gray-700 dark:text-gray-400">{{ value }}</span>
    <span v-else class="text-gray-700 dark:text-gray-400"><slot></slot></span>
</template>

<script>
    export default {
        props: ['value']
    }
</script>
