import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    computed: {
        ...mapGetters('users/payment/invoice', [
            'businessEntities',
            'getOpf'
        ]),
        'opf': {
            get () {
              return this.getOpf
            },
            set (value) {
              this.updateOpf(value)
            }
        },
    },
    methods: {
        ...mapActions('users/payment/invoice', [
            'updateOpf'
        ]),
    },
    mounted() {
        //
    }
};