import { mapActions, mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters('users/profile', [
            'isLoading',
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