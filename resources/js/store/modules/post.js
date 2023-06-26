const state = {
    posts: null,
    test: 'testVUEX'
}

const getters = {
    posts: state => {
        return state.posts
    },
    test: state => {
        return state.test
    }
}

const mutations = {
    setPosts(state, data) {
        state.posts = data
    }
}

const actions = {
    getPosts(context) {
        axios.get('/api/post/')
            .then(res => {
                context.commit('setPosts', res.data);
            })
    },

    getLog(){
        console.log('get log!!!!')
    }
}

export default {
    state, mutations, actions, getters
}
