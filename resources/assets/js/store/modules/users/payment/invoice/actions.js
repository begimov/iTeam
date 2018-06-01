import api from '../../../../api'

export default {
  getInitialData({ commit }) {
    commit('setIsLoading', true)
    api.invoice.getInitialData().then(res => {
      commit('setBusinessEntities', res.data.data)
      commit('setIsLoading', false)
    })
  },
  updateBusinessEntitiyId({ commit }, id) {
    commit('updateBusinessEntitiyId', id)
  },
  updateCompanyName({ commit }, name) {
    commit('updateCompanyName', name)
  },
  updateUsername({ commit }, name) {
    commit('updateUsername', name)
  },
}
