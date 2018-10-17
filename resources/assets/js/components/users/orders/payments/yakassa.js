import { mapActions } from 'vuex'

export default {
    props: ['order'],
    methods: {
        ...mapActions('users/payment/yakassa', [
            'buy'
        ]),
        purchase() {
            this.buy({ id: this.order.id }).then(res => {
                console.log(res.data)
            }).catch(err => {
                console.log(err)
            })
        }
    },
    mounted() {
        //
    }
};