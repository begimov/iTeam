import api from '../../../api'

export default {
  getOrders({ commit }) {
    commit('setIsLoading', true)
    api.dashboard.getOrders().then(res => {
      commit('setOrders', res.data)
      commit('setIsLoading', false)
    })
  },
  openProduct({ commit, state }, orderId) {
    commit('setDisplayedOrderId', orderId)
  },
}