export default {
  getOrders(page, params) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/orders`).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  },
  deleteOrder(orderId) {
    return new Promise((resolve, reject) => {
      axios.delete(`/webapi/orders/${orderId}`).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
