import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['orderId'],
    computed: {
        ...mapGetters('users/product', [
            'order'
        ]),
        product() {
            return this.order.product.data;
        },
        materials() {
            return this.product.materials.data;
        },
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