export default {
    setSelectedPaymentType(state, id) {
        state.selectedPaymentTypeId = id
    },
    updateWalletOneOptions(state, data) {
        state.walletOneOptions = { ...state.walletOneOptions, ...data }
    }
}
