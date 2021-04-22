<template>
    <aside class="z-20 flex-shrink-0 w-64 overflow-y-auto bg-white dark:bg-gray-800 hidden md:block">
        <jet-side-bar-inner />
    </aside>
</template>

<script>
import JetSideBarInner from '@/Jetstream/SideBarInner'

export default {

    components: {
        JetSideBarInner,
    },

    props: ['innersomeothervalue'],

}
</script>
