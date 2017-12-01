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
        showMaterials(id) {
            console.log(id);
        }
    },
    mounted() {
        this.getOrders();
    }
};