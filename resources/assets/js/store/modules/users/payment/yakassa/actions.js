import api from '../../../../api'

export default {
  buy({ commit, state }) {
    return new Promise((resolve, reject) => {
      api.yakassa.getPaymentUrl().then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
