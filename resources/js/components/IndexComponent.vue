<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users">
                <th scope="row">{{ user.id }}</th>
                <td>{{ user.name }}</td>
                <td>{{ user.age }}</td>
                <td>{{ user.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import data from "bootstrap/js/src/dom/data.js";

export default {
    name: "IndexComponent",


    data() {
        return {
            users: []
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople() {
            axios('/api/people')
                .then(res => {
                    console.log(res)
                    this.users = res.data
                })
        }
    }
}


</script>

<style scoped>

</style>
