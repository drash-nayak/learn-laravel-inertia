<template>
    <Head>
        <title>Users</title>
    </Head>
    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1 class="text-4xl font-bold">
                Users
            </h1>

            <Link v-if="can.createUser" href="/users/create" class="text-blue-500 text-sm ml-4">New User</Link>
        </div>

        <input v-model="search" type="text" placeholder="Search..." class="border px-2 rounded-lg">
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <tbody class="divide-y divide-gray-200 bg-white">
                        <tr v-for="user in users.data" :key="user.id">
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                <div class="flex items-center">
                                    <div>
                                        <div class="font-medium text-gray-900" v-text="user.name"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                <Link :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">
                                    Edit<span class="sr-only">, Lindsay Walton</span></Link>
                            </td>
                        </tr>

                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- paginator -->
    <Pagination :links="users.links" class="mt-6"></Pagination>
</template>

<script>
import Pagination from "../../Shared/Pagination";
import {debounce} from "lodash";
export default {
    components: {
        Pagination
    },
    props: {
        users: Object,
        filters: Object,
        can: Object,
    },
    data() {
        return {
            search: this.filters.search
        }
    },
    watch: {
        search:debounce(function (val) {
            this.$inertia.get('/users', {
                search: val
            }, {
                preserveState: true,
                replace: true
            })
        },500)
    }
}
</script>
