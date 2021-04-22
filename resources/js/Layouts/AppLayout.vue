<template>
    <div :class="{ 'theme-dark': dark }">
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
            <!-- Desktop sidebar -->
            <jet-desktop-side-bar />

            <!-- Mobile sidebar -->
            <!-- <jet-mobile-side-bar v-bind:ismobilesidebaropen="isSideMenuOpen" @sidemenuwasclosed="closeSideMenu" @keyup.esc="kebaboom"/> -->

            <div class="flex flex-col flex-1">
                <!-- Top Navigation -->
                <jet-top-nav-bar v-on:side-menu-was-toggled="toggleSideMenu" v-on:theme-was-toggled="toggleTheme" :dark="dark"/>

                <!-- Main Content Area -->
                <div class="h-full pb-16 overflow-y-auto">
                    
                    <div class="container px-6 mx-auto grid">
                        <!-- Page Heading -->
                        <header v-if="$slots.header">
                            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                                <slot name="header"></slot>
                            </h2>
                        </header>
    
                        <!-- Information / Status Banner -->
                        <jet-banner />
    
                        <!-- Page Content -->
                        <main>
                            <slot></slot>
                        </main>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import JetApplicationMark from '@/Jetstream/ApplicationMark'
import JetDesktopSideBar from '@/Jetstream/DesktopSideBar'
import JetMobileSideBar from '@/Jetstream/MobileSideBar'
import JetTopNavBar from '@/Jetstream/TopNavBar'
import JetBanner from '@/Jetstream/Banner'
import JetDropdown from '@/Jetstream/Dropdown'
import JetDropdownLink from '@/Jetstream/DropdownLink'
import JetNavLink from '@/Jetstream/NavLink'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

export default {
    components: {
        JetApplicationMark,
        JetDesktopSideBar,
        JetMobileSideBar,
        JetTopNavBar,
        JetBanner,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        JetResponsiveNavLink,
    },

    data() {
        return {
            showingNavigationDropdown: Boolean,
            isSideMenuOpen: Boolean,
            dark: false,
        }
    },

    methods: {
        // ROUTES
        switchToTeam(team) {
            this.$inertia.put(
                route('current-team.update'),
                {
                    team_id: team.id,
                },
                {
                    preserveState: false,
                }
            )
        },

        logout() {
            this.$inertia.post(route('logout'))
        },

        // HELPERS
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen
        },

        closeSideMenu() {
            this.isSideMenuOpen = false
        },

        toggleTheme() {
            this.dark = !this.dark
        },

    },
}
</script>
