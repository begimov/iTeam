export default {
  getPaymentSignature(payload) {
    return new Promise((resolve, reject) => {
      axios.post(`/webapi/orders/payment/signature`, {
        params: payload
      }).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
