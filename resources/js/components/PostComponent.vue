<template>
    <div class="container">
        <br>
        <create-component></create-component>
        <br>
        <index-component></index-component>
        <br>
        <single-post-component ref="ref"></single-post-component>
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

    mounted() {
        console.log(this.$refs.ref.log())

    },

    methods: {
      parentLog(){
          console.log('parent_log!!!')
      }
    }
}
</script>

<style scoped>

</style>
