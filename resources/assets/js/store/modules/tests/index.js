import state from './state'
import getters from './getters'
import actions from './actions'
import mutations from './mutations'
import test from './test'

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations,
  modules: {
    test
  }
}
