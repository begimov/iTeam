import api from '../../../api'

export default {
  getOrders({ commit }) {
    return new Promise((resolve, reject) => {
      commit('setIsLoading', true)
      api.dashboard.getOrders().then(res => {
        commit('setOrders', res.data)
        commit('setIsLoading', false)
        resolve(res.data)
      })
    })
  },
  openProduct({ commit, state }, orderId) {
    commit('setDisplayedOrderId', orderId)
  },
  orderPayment({ commit, state }, order) {
    commit('setPaymentOrder', order)
  },
  deleteOrder({ commit, dispatch, state }, orderId) {
    commit('setIsLoading', true)
    api.dashboard.deleteOrder(orderId).then(res => {
      commit('setIsLoading', false)
      dispatch('getOrders')
    })
  },
}
