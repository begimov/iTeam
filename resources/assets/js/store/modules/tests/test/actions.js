import api from '../../../api'

export default {
  getTest({ commit }, id) {
    commit('setIsLoading', true)
    api.test.getTest(id).then((res) => {
      commit('setTest',res.data.data)
      commit('setIsLoading', false)
    }).catch((err) => {
      console.log(err)
    })
  },
  updateSelectedAnswers({ commit }, answers) {
    commit('updateSelectedAnswers', answers)
  },
  sendAnswers({ commit }, answers) {
    console.log(answers)
  },
}
