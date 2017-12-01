import { mapActions, mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters('users/dashboard', [
            'isLoading',
            'orders',
            'displayedProduct',
        ])
    },
    methods: {
        ...mapActions('users/dashboard', [
            'getOrders',
        ]),
        openProduct(id) {
            console.log(id);
        }
    },
    mounted() {
        this.getOrders();
    }
};