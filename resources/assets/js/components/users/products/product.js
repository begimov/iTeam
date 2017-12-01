import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['orderId'],
    computed: {
        ...mapGetters('users/dashboard', [
            //
        ])
    },
    methods: {
        ...mapActions('users/product', [
            'getOrder',
        ])
    },
    mounted() {
        this.getOrder(this.orderId);
    }
};