import api from '../../../api'

export default {
  getOrder({ commit }, id) {
    // commit('setIsLoading', true)
    api.product.getOrder(id).then(res => {
      commit('setOrder', res.data)
      // commit('setIsLoading', false)
    })
  },
}
