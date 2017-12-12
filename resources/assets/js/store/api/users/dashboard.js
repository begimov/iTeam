export default {
  getOrders(page, params) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/orders`).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
