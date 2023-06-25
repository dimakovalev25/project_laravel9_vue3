<template>
    <div>
        show post component
        <router-link :to="{name: 'posts.create'}">create new post</router-link>
        <br>
        <hr>
        <h3>posts:</h3>
        <div v-for="post in posts">
            <h4>{{post.title}}</h4>
            <h5>{{post.content}}</h5>

        </div>


    </div>
</template>

<script>


export default {
    name: "ShowPostComponent",

    mounted() {
        this.getPosts()
    },

    data() {
        return {
            posts: []
        }
    },

    methods: {
        getPosts() {
            axios.get('/api/post')
                .then(res => {
                    this.posts = res.data
                })
        }
    }


}
</script>

<style scoped>

</style>
