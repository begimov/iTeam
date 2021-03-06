import state from './state'
import getters from './getters'
import actions from './actions'
import mutations from './mutations'
import walletone from './walletone'
import invoice from './invoice'

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations,
  modules: {
    walletone,
    invoice
  }
}
