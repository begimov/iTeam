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
  updatePhone({ commit }, num) {
    commit('updatePhone', num)
  },
  getInvoice({ commit, state }) {
    commit('setIsLoading', true)
    api.invoice.getInvoice(state.params).then(res => {
      commit('setIsLoading', false)
    }).catch(err => {
      console.log(err.response.data)
      commit('setErrors', err.response.data)
      commit('setIsLoading', false)
    })
  }
}
