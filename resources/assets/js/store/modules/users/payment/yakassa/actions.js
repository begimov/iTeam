import api from '../../../../api'

export default {
  buy({ commit, state }, payload) {
    return new Promise((resolve, reject) => {
      api.yakassa.getPaymentUrl(payload).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
