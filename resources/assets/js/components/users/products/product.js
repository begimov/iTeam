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
        tests() {
            return this.product.tests.data;
        },
    },
    methods: {
        ...mapActions('users/product', [
            'getOrder',
            'closeProduct',
        ])
    },
    mounted() {
        this.getOrder(this.orderId);
    }
};