<template>
    <div>
        <header class="bg-gray-800 text-white flex justify-end px-2 py-1 text-xs border-b border-gray-700">
            <button class="hover:bg-gray-600 rounded px-2" @click="copyToClipboard">{{ copied ? "Copied" : "Copy"  }}</button>
        </header>
        <pre><code ref="block">{{ code }}</code></pre>
    </div>
</template>

<script>
import {hightlightElement} from "../Services/SyntaxHighlighting";
export default {
    props: {
        code: String
    },
    data(){
        return{
            copied:false
        }
    },
    mounted() {
        hightlightElement(this.$refs.block);
    },
    methods:{
        async copyToClipboard(){
            if(navigator && navigator.clipboard){
                await navigator.clipboard.writeText(this.code);

                this.copied = true;

                setTimeout(() => {
                    this.copied = false;
                },3000);

                return;
            }
            alert("Your browser doesn't support this function!")
        }
    }
}
</script>

