<template>
    <div class="mt-2" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="radio">
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: ['modelValue'],

    emits: ['update:modelValue'],

    methods: {
        focus() {
            this.$refs.radio.focus()
        },
    },
}
</script>

