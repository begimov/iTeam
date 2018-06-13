export default {
    order(state, getters, rootState, rootGetters) {
        return rootGetters['users/dashboard/paymentOrder']
    },
    selectedPaymentTypeId(state) {
        return state.selectedPaymentTypeId
    },
    paymentTypes(state) {
        return state.paymentTypes
    }
}
