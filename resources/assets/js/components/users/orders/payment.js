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