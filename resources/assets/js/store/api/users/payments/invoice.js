export default {
  getInitialData() {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/orders/payments/invoices/create`).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  },
  getInvoice(payload) {
    return new Promise((resolve, reject) => {
      axios.post(`/webapi/orders/payments/invoices`, payload).then(res => {
        resolve(res)
      }).catch(err => {
        reject(err)
      })
    })
  }
}
