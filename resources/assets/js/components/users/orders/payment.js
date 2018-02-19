import { mapActions, mapGetters } from 'vuex'
import config from '../../../config'

export default {
    props: ['order'],
    data() {
        return {
            //
        }
    },
    computed: {
        ...mapGetters('users/payment', [
            'selectedPaymentTypeId',
            'paymentTypes',
            'walletOneOptions',
        ]),
    },
    methods: {
        ...mapActions('users/payment', [
            'closePayment',
            'selectPaymentType',
            'updateWalletOneOptions',
        ]),
    },
    mounted() {
        this.updateWalletOneOptions({
            WMI_PAYMENT_AMOUNT: this.order.price,
            WMI_PAYMENT_NO: this.order.id,
            WMI_DESCRIPTION: 'iTeam: "' + this.order.product.data.name + '"',
            WMI_SUCCESS_URL: config.payments.WMI_SUCCESS_URL,
            WMI_FAIL_URL: config.payments.WMI_FAIL_URL,
            WMI_SIGNATURE: "0"
        })
    }
};