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
        ])
    },
    mounted() {
        this.getOrders();
    }
};