import { mapActions, mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters('users/dashboard', [
            'isLoading',
            'orders',
            'displayedOrderId',
        ])
    },
    methods: {
        ...mapActions('users/dashboard', [
            'getOrders',
            'openProduct',
        ])
    },
    mounted() {
        this.getOrders();
    }
};