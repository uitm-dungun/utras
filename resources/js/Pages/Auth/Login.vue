<template>
    <jet-authentication-card>
        <!-- <template #logo>
            <jet-authentication-card-logo />
        </template> -->
        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Login
        </h1>

        <!-- Temporary Component -->
        <!-- <jet-validation-errors class="mb-4" /> -->

        <!-- Temporary Component -->
        <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div> -->

        <form @submit.prevent="submit">
            <div class="block text-sm">
                <jet-label for="email" value="Email" />
                <jet-input id="email" type="email" v-model="form.email" :has-error="form.errors.email !== undefined" placeholder="user@example.com" required autofocus />
            </div>
            <span @if="form.errors.email" class="text-xs text-red-600 dark:text-red-400">
                {{ form.errors.email }}
            </span>            

            <div class="block text-sm mt-4">
                <jet-label for="password" value="Password" />
                <jet-input id="password" type="password" v-model="form.password" :has-error="form.errors.password !== undefined" placeholder="***********" required autocomplete="current-password" />
            </div>
            <span @if="form.errors.password" class="text-xs text-red-600 dark:text-red-400">
                {{ form.errors.password }}
            </span>

            <div class="flex mt-6 text-sm">
                <label class="flex items-center dark:text-gray-400">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2">Remember me</span>
                </label>
            </div>

            <jet-button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
            </jet-button>

            <hr class="my-8" />

            <p class="mt-4">
                <inertia-link v-if="canResetPassword" :href="route('password.request')" class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline">
                    Forgot your password?
                </inertia-link>
            </p>
        </form>
    </jet-authentication-card>    
</template>

<script>
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    // import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from '@/Jetstream/Checkbox'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            JetAuthenticationCard,
            // JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    }
</script>
