import api from '../../../api'

export default {
  getOrder({ commit, dispatch }, id) {
    dispatch('setRootIsLoading', true)
    api.product.getOrder(id).then(res => {
      commit('setOrder', res.data.data)
      dispatch('setRootIsLoading', false)
    })
  },
  closeProduct({ commit }) {
    commit('users/dashboard/setDisplayedOrderId', null, { root: true })
    commit('setOrder', null)
  },
  setRootIsLoading({ commit }, value) {
    commit('users/dashboard/setIsLoading', value, { root: true })
  }
}
