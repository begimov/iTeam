import config from '../../../../config'

export default {
    props: ['order'],
    data() {
        return {
            walletOneOptions: {
                WMI_MERCHANT_ID: '',
                WMI_PAYMENT_AMOUNT: '',
                WMI_CURRENCY_ID: '',
                WMI_PAYMENT_NO: '',
                WMI_DESCRIPTION: '',
                WMI_AUTO_LOCATION: '',
                WMI_SUCCESS_URL: '',
                WMI_FAIL_URL: '',
                WMI_SIGNATURE: ''
            },
        }
    },
    methods: {
        purchase() {
            axios.post(`/webapi/orders/payments/walletone/signature`, this.walletOneOptions).then(res => {
                this.walletOneOptions = { ...this.walletOneOptions, ...res.data.data }
                this.$nextTick(() => {
                    this.$refs.woform.submit()
                })
            }).catch(err => {
                console.log(err)
            })
        }
    },
    mounted () {
        this.walletOneOptions = {
            WMI_MERCHANT_ID: config.payments.WMI_MERCHANT_ID,
            WMI_PAYMENT_AMOUNT: this.order.price,
            WMI_CURRENCY_ID: config.payments.WMI_CURRENCY_ID,
            WMI_PAYMENT_NO: this.order.id,
            WMI_DESCRIPTION: 'iTeam: "' + this.order.product.name + '"',
            WMI_AUTO_LOCATION: config.payments.WMI_AUTO_LOCATION,
            WMI_SUCCESS_URL: config.payments.WMI_SUCCESS_URL,
            WMI_FAIL_URL: config.payments.WMI_FAIL_URL,
            WMI_SIGNATURE: "0"
        }
    }
};