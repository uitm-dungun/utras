<template>
    <div v-show="ismobilesidebaropen" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="z-20 flex-shrink-0 w-64 overflow-y-auto bg-white dark:bg-gray-800 md:hidden mt-16 fixed inset-y-0" v-show="ismobilesidebaropen" v-click-outside="explosionimpact" @keyup.enter="explosionimpact">
        <jet-side-bar-inner />
    </aside>
</template>

<script>
import JetSideBarInner from '@/Jetstream/SideBarInner'

export default {

    components: {
        JetSideBarInner,
    },

    props: ['ismobilesidebaropen'],
    methods: {
            explosionimpact() { alert('nothing happened only pressed escape key') },
    },

    // emits: ['sidemenuwasclosed'],

}
</script>
