import { mapActions, mapGetters } from 'vuex'
import config from '../../../../config'

export default {
    props: ['order'],
    computed: {
        ...mapGetters('users/payment/walletone', [
            'walletOneOptions'
        ]),
    },
    methods: {
        ...mapActions('users/payment/walletone', [
            'updateWalletOneOptions',
            'buy'
        ]),
        purchase() {
            this.buy().then(res => {
                this.$nextTick(() => {
                    // this.$refs.woform.submit()
                })
            }).catch(err => {
                console.log(err)
            })
        }
    },
    mounted() {
        this.updateWalletOneOptions({
            WMI_MERCHANT_ID: config.payments.WMI_MERCHANT_ID,
            WMI_PAYMENT_AMOUNT: this.order.price,
            WMI_CURRENCY_ID: config.payments.WMI_CURRENCY_ID,
            WMI_PAYMENT_NO: this.order.id,
            WMI_DESCRIPTION: 'iTeam: "' + this.order.product.data.name + '"',
            WMI_AUTO_LOCATION: config.payments.WMI_AUTO_LOCATION,
            WMI_SUCCESS_URL: config.payments.WMI_SUCCESS_URL,
            WMI_FAIL_URL: config.payments.WMI_FAIL_URL,
            WMI_SIGNATURE: "0"
        })
    }
};