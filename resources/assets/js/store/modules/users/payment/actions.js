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
    api.payment.getPaymentSignature(state.walletOneOptions).then(res => {
      console.log(res)
      // resolve(res)
    }).catch(err => {
      console.log(err)
    })
  },
}
