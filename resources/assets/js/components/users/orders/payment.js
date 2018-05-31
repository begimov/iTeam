import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    computed: {
        ...mapGetters('users/payment', [
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
        //
    }
};