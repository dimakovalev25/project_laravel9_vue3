<template>
    <div class="container">
        <SinglePostComponent></SinglePostComponent>
        <h3>
            post component
            {{ number }}
        </h3>
        <h5>{{ getdata }}</h5>
        <button @click="sayHi">say hi</button>
        <button @click="sayHello">say hello</button>
        <button @click="plus1">plus1</button>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="user in users">
                <tr v-if="user.age > 40">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.age }}</td>
                </tr>
            </template>
            </tbody>
        </table>

    </div>
</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";

export default {
    components: {
        SinglePostComponent
    },

    name: "PostComponent",

    computed: {
        getdata() {
            return 'test data'
        }
    },

    data() {
        return {
            number: 44,
            users: [
                {
                    name: 'jo',
                    age: 33,
                    id: 1
                },
                {
                    name: 'annett',
                    age: 31,
                    id: 2
                },
                {
                    name: 'alex',
                    age: 43,
                    id: 3
                }
            ]
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
                .then(data => {
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

        sayHi() {
            console.log('hi!!!!!!!!');
        },

        sayHello() {
            console.log('hello!');
        },

        plus1() {
            this.number = this.number + 1;
        }
    }
}
</script>

<style scoped>

</style>
