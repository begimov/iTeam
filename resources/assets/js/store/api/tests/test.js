export default {
  getTest(id) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/tests/${id}`).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  },
  sendAnswers(testId, answers) {
    return new Promise((resolve, reject) => {
      axios.post(`/webapi/tests/${testId}/answers`, answers).then(res => {
        resolve(res)
      }).catch(err => {
        console.log(err)
      })
    })
  }
}
