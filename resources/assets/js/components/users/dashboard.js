import { mapActions, mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters('users/profile', [
            'isLoading',
            'orders',
        ])
    },
    methods: {
        ...mapActions('users/profile', [
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