<template>
    <!-- <slot name="count"></slot> -->
    {{ count }}
    <button @click="increment">Increment</button>
    <button @click="decrement">Decrement</button>
</template>

<script>
    export default {
        // props: {
        //     count: 0
        // },
        data() {
            return { count: 4 }
        },
        methods: {
            increment() {
                // `this` will refer to the component instance
                this.count++;
            },
            decrement() {
                // `this` will refer to the component instance
                this.count--;
            }
        }
    }
</script>
