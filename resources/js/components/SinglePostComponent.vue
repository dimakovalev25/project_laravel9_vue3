<template>
    <div>
        single post
    </div>
</template>

<script>
export default {
    name: "SinglePost",

    data() {
        return {
            name: 'single_post'
        }
    },

    mounted() {
        this.$parent.parentLog();

    },

    methods: {
        log() {
            console.log('single_component')
        }
    }
}
</script>

<style scoped>

</style>
