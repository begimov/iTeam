import api from '../../../../api'

export default {
  getInitialData({ commit }) {
    // commit('setIsLoading', true)
    api.invoice.getInitialData().then(res => {
      console.log(res.data.data)
      // commit('setOrders', res.data)
      // commit('setIsLoading', false)
    })
  },
  updateBusinessEntitiyId({ commit }, id) {
    commit('updateBusinessEntitiyId', id)
  },
}
