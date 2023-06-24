<template>
    <div class="container">
        <create-component></create-component>
        <br>
        <index-component></index-component>
        <br>
    </div>
</template>

<script>
import CreateComponent from "@/components/CreateComponent.vue"
import IndexComponent from "@/components/IndexComponent.vue";

export default {
    components: {
        IndexComponent,
        CreateComponent
    },

    data(){
      return {
          data: {
          }
      }
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
