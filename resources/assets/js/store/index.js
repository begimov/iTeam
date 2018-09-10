import users from './modules/users'
import tests from './modules/tests'
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    users,
    tests,
  }
})
