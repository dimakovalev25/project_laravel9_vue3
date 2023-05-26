<template>

    <div>
        <input type="text" v-model="name" placeholder="name">
        <input type="number" v-model="age"  placeholder="age">
        <input type="text" v-model="job" placeholder="job">
        <button @click.prevent="addPerson" type="submit">add person</button>
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
                    console.log(res);
                })
        }
    }
}
</script>

<style scoped>

</style>
