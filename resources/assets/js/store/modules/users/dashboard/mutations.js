export default {
  setIsLoading (state, value) {
      state.isLoading = value
  },
  setOrders (state, payload) {
      state.orders = payload.data
  },
}
