import api from '../../../api'

export default {
  closePayment({ commit }) {
    commit('users/dashboard/setPaymentOrder', null, { root: true })
  },
  selectPaymentType({ commit }, id) {
    commit('setSelectedPaymentType', id)
  },
}
