<template>
    <div id="app">
<!--        <example-component></example-component>-->
<!--        <create-component></create-component>-->
       <post-component></post-component>

    </div>
</template>

<script>
import { ref } from 'vue';
import ExampleComponent from "@/components/ExampleComponent.vue";
import Post from "@/components/PostComponent.vue";
import CreateComponent from "@/components/CreateComponent.vue";
import PostComponent from "@/components/PostComponent.vue";
export default {
    components: {PostComponent, CreateComponent, ExampleComponent},

}
</script>
