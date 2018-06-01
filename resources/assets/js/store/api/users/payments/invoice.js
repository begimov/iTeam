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
    console.log(payload)
    // return new Promise((resolve, reject) => {
    //   axios.get(`/webapi/orders/payments/invoices/create`).then(res => {
    //     resolve(res)
    //   }).catch(err => {
    //     console.log(err)
    //   })
    // })
  }
}
