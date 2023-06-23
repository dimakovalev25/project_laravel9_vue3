<template>
    <div class="container">
        <br>
        <create-component></create-component>
        <br>
        <index-component></index-component>
    </div>
</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";
import CreateComponent from "@/components/CreateComponent.vue"
import IndexComponent from "@/components/IndexComponent.vue";

export default {
    components: {
        IndexComponent,
        CreateComponent,
        SinglePostComponent
    },
}
</script>

<style scoped>

</style>
