import api from '../../../api'

export default {
  getOrder({ commit }, id) {
    // commit('setIsLoading', true)
    api.product.getOrder(id).then(res => {
      console.log(res)
      // commit('setOrder', res.data)
      // commit('setIsLoading', false)
    })
  },
}
