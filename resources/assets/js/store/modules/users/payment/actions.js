import api from '../../../api'

export default {
  closePayment({ commit }) {
    commit('users/dashboard/setPaymentOrder', null, { root: true })
  },
  selectPaymentType({ commit }, id) {
    commit('setSelectedPaymentType', id)
  },
  updateWalletOneOptions({ commit }, data) {
    commit('updateWalletOneOptions', data)
  },
  buy({ commit, state }) {
    console.log(state.walletOneOptions)
    // commit('updateWalletOneOptions', data)
  },
}
