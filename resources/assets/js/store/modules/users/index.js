import dashboard from './dashboard'
import product from './product'
import payment from './payment'
import state from './state'
import getters from './getters'
import actions from './actions'
import mutations from './mutations'

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations,
  modules: {
    dashboard,
    product,
    payment
  }
}
