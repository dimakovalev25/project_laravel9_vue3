<template>
    <div class="container">
        <h3>name: {{name}}</h3>
        <Post></Post>
    </div>
</template>

<script>
import Post from "@/components/Post.vue";
import {defineComponent} from "vue";
import data from "bootstrap/js/src/dom/data.js";

export default defineComponent({
    components: {Post},

    data: function () {
        return {
            name: 'alex'
        }
    },






})




</script>
