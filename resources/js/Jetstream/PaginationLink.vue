<template>
    <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">Showing {{ paginator.from }}-{{ paginator.to }} of {{ paginator.total }}</span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">
                    <li>
                        <inertia-link :href="paginator.prev_page_url" :class="{ 'text-gray-300': paginator.prev_page_url === null }" class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous" as="button" type="button" :disabled="paginator.prev_page_url === null">
                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </inertia-link>
                    </li>
                    <li v-for="link in filteredPaginatorLinks" :key="link">
                        <inertia-link v-if="link.label !== '...'" :href="link.url" :class="link.active ? activeLinkClasses : inactiveLinkClasses" as="button" type="button">{{ link.label }}</inertia-link>
                        <span v-else class="px-3 py-1">...</span>
                    </li>
                    <li>
                        <inertia-link :href="paginator.next_page_url" :class="{ 'text-gray-300': paginator.next_page_url === null }" class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next" as="button" type="button" :disabled="paginator.next_page_url === null">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </inertia-link>
                    </li>
                </ul>
            </nav>
        </span>
    </div>
</template>

<script>
export default {

    props: [ 'paginator' ],

    computed: {
        activeLinkClasses() {
            return 'px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple'
        },

        inactiveLinkClasses() {
            return 'px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple'
        },

        filteredPaginatorLinks() {
            return this.paginator.links.filter(
                link =>
                    link.label !== "&laquo; Previous" && 
                    link.label !== "Next &raquo;"
            )
        }
    },

}
</script>