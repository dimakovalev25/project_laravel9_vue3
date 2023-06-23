<template>

    <div>
        <input class="form-control w-25" type="text" v-model="name" placeholder="name">
        <br>
        <input class="form-control w-25" type="number" v-model="age"  placeholder="age">
        <br>
        <input class="form-control w-25" type="text" v-model="job" placeholder="job">
        <br>
        <button class="btn btn-success" @click.prevent="addPerson" >add person</button>
        <br>
        <hr>

    </div>

</template>

<script>
export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },

    methods: {
        addPerson() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job })
                .then(res => {
                    this.name = null
                    this.age = null
                    this.job = null
                    // console.log(res);
                })
        }
    }
}
</script>

<style scoped>

</style>
