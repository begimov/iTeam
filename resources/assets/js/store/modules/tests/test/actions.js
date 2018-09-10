import api from '../../../api'

export default {
  getTest({ commit }, id) {
    commit('setIsLoading', true)

    api.test.getTest(id).then((res) => {
      console.log(res)
      commit('setIsLoading', false)
    }).catch((err) => {
      console.log(err)
    })
  }
}
