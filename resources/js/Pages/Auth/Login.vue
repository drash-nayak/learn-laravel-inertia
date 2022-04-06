<template>
    <Head>
        <title>Login</title>
    </Head>
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl max-w-lg mx-auto border">
            <h1 class="text-3xl mb-6">
                Login
            </h1>
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>

                    <input type="email"
                           v-model="form.email"
                           class="border rounded p-2 w-full"
                           required
                           name="email"
                           id="email"
                    >
                    <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-sm italic mt-1"></div>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>

                    <input type="password"
                           v-model="form.password"
                           class="border rounded p-2 w-full"
                           name="password"
                           id="password"
                    >
                    <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-sm italic mt-1"></div>
                </div>
                <div class="mb-6">
                    <button type="submit"
                            :disabled="form.processing"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 disabled:bg-gray-500"
                    >
                        Log In
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>
<script>
import {useForm} from "@inertiajs/inertia-vue3";
export default {
    layout: null,
    data() {
        return {
            form: useForm({
                email: '',
                password: ''
            })
        }
    },
    methods: {
        submit() {
            this.form.post('/login');
        }
    }
}
</script>
