<template>
    <div>
        <h3>
            post component
        </h3>
        <div v-for="person in persons">
            <h3>{{person.name}}</h3>
            <h3>{{person.age}}</h3>

        </div>
    </div>
</template>

<script>
export default {
    name: "Post",


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
        }
    }
}


</script>

<style scoped>

</style>
