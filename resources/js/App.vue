
<template>
    <!-- Типо template -->
    <div id="app">
        <example-component></example-component>
        <!-- Навигация -->
        <nav class="flex flex-wrap">
            <router-link
                :to="'/'"
            >
                Главная
            </router-link>

            <router-link
                :to="'/about'"
            >
                О нас
            </router-link>
        </nav>

        <!-- Контент страницы -->
        <router-view />

        <div>
            <button @click="count++">{{ count }}</button>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';
import ExampleComponent from "@/components/ExampleComponent.vue";
export default {
    components: {ExampleComponent},
    setup() {
        const count = ref(0);
        return {
            count
        }
    },
    mounted() {
        console.log(this.count);
    }
}
</script>
