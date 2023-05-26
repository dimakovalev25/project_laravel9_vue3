
<template>
    <div id="app">
        <nav class="flex flex-wrap">
<!--            <router-link-->
<!--                :to="'/'"-->
<!--            >-->
<!--                home-->
<!--            </router-link>-->
<!--            <router-link-->
<!--                :to="'/about'"-->
<!--            >-->
<!--                about-->
<!--            </router-link>-->
        </nav>
<!--        <router-view />-->
<!--        <example-component></example-component>-->
        <create-component></create-component>


    </div>
</template>

<script>
import { ref } from 'vue';
import ExampleComponent from "@/components/ExampleComponent.vue";
import Post from "@/components/Post.vue";
import CreateComponent from "@/components/CreateComponent.vue";
export default {
    components: {CreateComponent, Post, ExampleComponent},

}
</script>
