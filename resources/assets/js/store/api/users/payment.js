export default {
  getPaymentSignature(payload) {
    return new Promise((resolve, reject) => {
      axios.post(`/webapi/orderspayment/signature`, payload).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
