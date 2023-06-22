<template>
    <div>
        <single-post-component></single-post-component>
        <h3>
            post component
        </h3>

        <button @click="sayHi">say hi</button>
<!--        <div v-for="person in persons">-->
<!--            <h3>{{person.name}}</h3>-->
<!--            <h3>{{person.age}}</h3>-->
<!--        </div>-->
    </div>
</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";
export default {
    components: {
      SinglePostComponent
    },

    name: "PostComponent",

    data() {
        return {
            persons: null
        }
    },

    mounted() {
        this.getPersons()

    },

    methods: {
        getPosts() {

            axios.get('/posts')
                .then(function (data) {
                    console.log(data)
                    console.log(data.data)
                })
                .then(data=>{
                    console.log(data);
                })


        },

        getPersons() {
            axios.get('/persons')
                .then(data => {
                    // console.log(data);
                    this.persons = data.data
                })
        },

        sayHi(){
            console.log('hi!!!!!!!!');
        }
    }
}
</script>

<style scoped>

</style>
