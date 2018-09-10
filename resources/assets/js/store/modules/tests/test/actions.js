import api from '../../../api'

export default {
  getTest({ commit }, id) {
    commit('setIsLoading', true)
  }
}
