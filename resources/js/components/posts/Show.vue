<template>
    <div>
        show post component
        <p>----------{{test}}------------</p>
        <br>
        <router-link :to="{name: 'posts.create'}">create new post</router-link>
        <br>
        <hr>
        <h1>posts:</h1>
        <div v-for="post in posts">
            <h4>{{ post.title }}</h4>
            <h5>{{ post.content }}</h5>
            <router-link :to="{ name: 'posts.edit', params: { id: post.id }}">edit post</router-link>
<!--            <router-link :to="{ name: 'posts.delete', params: { id: post.id }}">delete post-->
                <button @click.prevent="deletePost(post.id)"> delete post</button>
            <hr>
        </div>

<!--        <router-link :to="{ name: 'posts.edit', params: { id: 1}}">edit post</router-link>-->

    </div>
</template>

<script>


import router from "@/router.js";


export default {
    name: "ShowPostComponent",

    mounted() {
        // this.$store.dispatch('getPosts')
        this.getPosts()
        console.log(this.$store.state.Post.test)
    },

    data() {
        return {
            posts: [],
            test: this.$store.state.Post.test
        }
    },

    methods: {
        getPosts() {
            axios.get('/api/post')
                .then(res => {
                    this.posts = res.data
                })
        },

        deletePost(id){
            axios.delete('/api/post/'+id)
                .then(res=> {
                    this.getPosts()
                    // router.push({name: 'posts'})
                })
        },

    }


}
</script>

<style scoped>

</style>
