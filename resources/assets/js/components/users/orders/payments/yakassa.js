import { mapActions } from 'vuex'

export default {
    props: ['order'],
    methods: {
        ...mapActions('users/payment/yakassa', [
            'buy'
        ]),
        purchase() {
            this.buy().then(res => {
                // redirect
            }).catch(err => {
                console.log(err)
            })
        }
    },
    mounted() {
        //
    }
};