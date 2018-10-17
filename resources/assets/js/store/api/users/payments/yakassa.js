export default {
  getPaymentUrl(payload) {
    return new Promise((resolve, reject) => {
      axios.post(`/webapi/orders/payments/yakassa/url`, payload).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
