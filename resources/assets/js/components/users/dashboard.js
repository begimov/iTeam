import { mapActions, mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters('users/dashboard', [
            'isLoading',
            'orders',
            'displayedOrderId',
            'paymentOrder',
        ])
    },
    methods: {
        ...mapActions('users/dashboard', [
            'getOrders',
            'openProduct',
            'orderPayment',
            'deleteOrder',
        ]),
        openPaymentModal() {
            const urlParams = new URLSearchParams(window.location.search)

            if (urlParams.has('order')) {

                const order = _.find(this.orders, [
                    'id', parseInt(urlParams.get('order'))
                ])

                if (order) {
                    this.orderPayment(order)
                }
            }
        }
    },
    mounted() {
        this.getOrders().then(res => {
            this.openPaymentModal()
        })
        
    }
};