export default {
  getOrder(id) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/orders/${id}`).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
