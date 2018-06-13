export default {
    updateWalletOneOptions(state, data) {
        state.walletOneOptions = { ...state.walletOneOptions, ...data }
    }
}
