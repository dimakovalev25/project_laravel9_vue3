<template>
    <div class="container">
        <div  v-for="person in personAge">
            <h3>{{person.name}}</h3>
            <h3>{{person.age}}</h3>

        </div>
        <!--        <button @click="say">hello</button>-->
        <Post></Post>
    </div>
</template>

<script>
import Post from "@/components/PostComponent.vue";
import {defineComponent} from "vue";
import data from "bootstrap/js/src/dom/data.js";
export default defineComponent({
    components: {Post},
    data: function () {
        return {
            persons: [
                {
                    name: 'jo',
                    age: 22
                },
                {
                    name: 'alex',
                    age: 25
                },
                {
                    name: 'john',
                    age: 22
                },
            ]
        }
    },
    methods: {
        say() {
            console.log('hello')
        }
    },
    computed: {
        personAge() {
            return this.persons.filter(function (item) {
                return item.age > 22
            })
        }
    }
})
</script>
