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
      axios.post(`/webapi/orders/payments/invoices`, payload, {
        responseType: 'blob'
      }).then(res => {
        resolve(res)
      }).catch(err => {
        const reader = new FileReader()
        reader.addEventListener('loadend', (e) => {
          reject(JSON.parse(e.srcElement.result))
        });
        reader.readAsText(err.response.data)
      })
    })
  }
}
