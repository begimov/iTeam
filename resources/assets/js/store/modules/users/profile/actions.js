import api from '../../../api'

export default {
  getOrders({ commit }) {
    // commit('setIsLoading', true)
    api.profile.getOrders().then(res => {
      commit('setOrders', res.data)
      // commit('setIsLoading', false)
    })
  },
}
