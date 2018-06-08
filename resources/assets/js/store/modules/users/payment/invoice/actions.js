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
  getInvoice({ commit, state }, orderId) {
    commit('setIsLoading', true)
    api.invoice.getInvoice(state.params, orderId).then(res => {

      const a = document.createElement("a")
      document.body.appendChild(a)
      a.style = "display: none"
      a.href = res.data.url
      a.click()

      commit('setIsLoading', false)
    }).catch(err => {
      commit('setErrors', err.response.data)
      commit('setIsLoading', false)
    })
  }
}
