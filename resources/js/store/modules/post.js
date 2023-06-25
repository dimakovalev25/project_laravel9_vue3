// export default {
//     state: () => ({
//         name: 'Yura'
//     }),
//     getters: {},
//     mutations: {
//         SET_NAME(state, payload){
//             state.name = payload
//         }
//     },
//     actions: {
//         saveName({commit}, data){
//             commit('SET_NAME', data)
//         }
//     }
// }

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
    }
}
//
// const actions = {
//     getPosts(commit) {
//         axios.get('/api/post')
//             .then(res => {
//                 commit('setPosts', res.data)
//                 // this.posts = res.data
//             })
//     },
// }
export default {
    state, mutations, actions, getters
}
