import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    data() {
        return {
            payment: {
                WMI_MERCHANT_ID: "132360589069",
                WMI_PAYMENT_AMOUNT: this.order.price,
                WMI_CURRENCY_ID: "643",
                WMI_PAYMENT_NO: this.order.id,
                WMI_DESCRIPTION: 'iTeam: "' + this.order.product.data.name + '"',
                WMI_AUTO_LOCATION: "1",
                WMI_SUCCESS_URL: '',
                WMI_FAIL_URL: '',
                WMI_SIGNATURE: "0"
            },
        }
    },
    computed: {
        ...mapGetters('users/payment', [
            'selectedPaymentTypeId',
            'paymentTypes',
        ]),
    },
    methods: {
        ...mapActions('users/payment', [
            'closePayment',
            'selectPaymentType',
        ]),
    },
    mounted() {
        //
    }
};