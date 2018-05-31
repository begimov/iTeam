import state from './state'
import getters from './getters'
import actions from './actions'
import mutations from './mutations'
import walletone from './walletone'

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations,
  modules: {
    walletone,
  }
}
