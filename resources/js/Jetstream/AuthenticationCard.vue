<template>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">

                <!-- Side Illustration -->
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full dark:hidden"
                        src="/img/login-office.jpeg" alt="Office" aria-hidden="true"
                    />
                    <img class="hidden object-cover w-full h-full dark:block"
                        src="/img/login-office-dark.jpeg" alt="Office" aria-hidden="true"
                    />
                </div>

                <!-- Main Form Section -->
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <!-- <div>
                            <slot name="logo" />
                        </div> -->
                        <slot />
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
