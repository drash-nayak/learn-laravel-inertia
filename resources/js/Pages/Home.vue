<template>
    <Head>
        <title>Home</title>
        <meta type="description" content="Home information" head-key="description">
    </Head>
    <h1 class="text-4xl font-bold">
        Home
    </h1>
    Hello {{ name }} with dob {{ dob }}
</template>
<script>
import Navbar from "../Shared/Navbar";

export default {
    props: {
        name: String,
        dob: String,
        frameworks: Array,
    },
    components: {
        Navbar
    }
}
</script>
