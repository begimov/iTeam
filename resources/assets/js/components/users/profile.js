import { mapActions, mapGetters } from 'vuex'

export default {
    methods: {
        ...mapActions('users/profile', [
            'getOrders',
        ])
    },
    mounted() {
        this.getOrders();
    }
};