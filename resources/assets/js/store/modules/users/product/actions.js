import api from '../../../api'

export default {
  getOrder({ commit }, id) {
    // commit('setIsLoading', true)
    api.product.getOrder(id).then(res => {
      commit('setOrder', res.data.data)
      // commit('setIsLoading', false)
    })
  },
  closeProduct({ commit }) {
    commit('users/dashboard/setDisplayedOrderId', null, { root: true })
    commit('setOrder', null)
  },
}
