import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    computed: {
        //
    },
    methods: {
        ...mapActions('users/payment', [
            'closePayment',
        ]),
        close() {
            this.closePayment()
        }
    },
    mounted() {
        console.log(this.order)
    }
};