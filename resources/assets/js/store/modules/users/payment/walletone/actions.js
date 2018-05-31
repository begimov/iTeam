import api from '../../../../api'

export default {
  updateWalletOneOptions({ commit }, data) {
    commit('updateWalletOneOptions', data)
  },
  buy({ commit, state }) {
    return new Promise((resolve, reject) => {
      api.payment.getPaymentSignature(state.walletOneOptions).then(res => {
        commit('updateWalletOneOptions', res.data.data)
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
