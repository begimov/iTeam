export default {
  setIsLoading (state, value) {
      state.isLoading = value
  },
  setOrder (state, payload) {
      state.order = payload.data
  },
}
