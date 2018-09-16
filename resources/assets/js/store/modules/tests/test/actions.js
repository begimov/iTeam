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
  sendAnswers({ commit, state }, answers) {
    commit('setIsLoading', true)
    api.test.sendAnswers(state.test.id, answers).then((res) => {
      commit('setResults', res.data)
      commit('setIsLoading', false)
    }).catch((err) => {
      console.log(err)
    })
  },
}
