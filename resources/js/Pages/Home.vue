<template>
    <Head>
        <title>Home</title>
        <meta name="title" content="My App - Home" head-key="title" />
        <meta name="description" content="Home information" head-key="description" />
    </Head>
    <h1 class="text-4xl font-bold mb-4">
        Home
    </h1>
    <Highlight :code="snippet" />
</template>
<script>
import Highlight from "../Components/Highlight";
let snippet = `
     class ExampleALL
            {
                public function __construct()
                {
                    //
                }
            }
`.trim();
export default {
    components: {Highlight},
    setup(){
        return{
            snippet
        }
    }
}
</script>
