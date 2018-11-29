import { mapActions, mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters('users/payment', [
            'order',
            'selectedPaymentTypeId',
            'paymentTypes'
        ]),
    },
    methods: {
        ...mapActions('users/payment', [
            'closePayment',
            'selectPaymentType'
        ]),
    },
    mounted() {
        if (this.order.total_price > 5000) {
            this.selectPaymentType(2)
        }
        $('#modal-window-payment').modal({
            backdrop: 'static',
            keyboard: false
        })
    }
};