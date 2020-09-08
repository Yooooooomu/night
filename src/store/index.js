// https://vuex.vuejs.org/zh-cn/intro.html
// make sure to call Vue.use(Vuex) if using a module system
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    bannerList: [] // item: {img: url, href: string}
  },
  mutations: {
    LIST: (state, payload) => {
      state.bannerList = payload.list
    }
  }
})

export default store
