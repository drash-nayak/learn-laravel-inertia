<template>
    <Head>
        <title>Create User</title>
    </Head>

    <h1 class="text-3xl">
        Create New User
    </h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>

            <input type="text"
                   v-model="form.name"
                   class="border border-gray-400 p-2 w-full"
                   required
                   name="name"
                   id="name"
            >

            <div v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-sm italic mt-1"></div>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>

            <input type="email"
                   v-model="form.email"
                   class="border border-gray-400 p-2 w-full"
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
                   class="border border-gray-400 p-2 w-full"
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
                Submit
            </button>
        </div>
    </form>
</template>
<script>
import {useForm} from "@inertiajs/inertia-vue3";
export default {
    components: {},
    data() {
        return {
            form: useForm({
                name: '',
                email: '',
                password: ''
            })
        }
    },
    methods: {
        submit() {
            this.form.post('/users');
        }
    }
}
</script>
