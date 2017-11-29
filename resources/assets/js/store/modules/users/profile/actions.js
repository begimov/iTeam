import api from '../../../api'

export default {
  getOrders({ commit }) {
    // commit('setIsLoading', true)
    api.profile.getOrders().then(res => {
      console.log(res)
      // commit('setProducts', res.data)
      // commit('setIsLoading', false)
    })
  },
}
