export default {
    props: ['order'],
    computed: {
        isPaid() {
            return this.order.payment_state_id === 2;
        }
    },
    methods: {
        //
    }
};