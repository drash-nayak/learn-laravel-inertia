<template>
    <nav>
        <ul class="flex space-x-6 list-inside">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'" >
                    Home
                </NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'" >
                    Users
                </NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'" >
                    Settings
                </NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post"
                      as="button">
                    Logout
                </NavLink>
            </li>
        </ul>
    </nav>
</template>
<script>

import {Link} from "@inertiajs/inertia-vue3";
import NavLink from "./NavLink";

export default {
    components: {
        NavLink,
        Link
    }
}
</script>
