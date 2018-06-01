import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    computed: {
        ...mapGetters('users/payment/invoice', [
            'isLoading',
            'businessEntities',
            'getBusinessEntitiyId'
        ]),
        'businessEntitiyId': {
            get () {
              return this.getBusinessEntitiyId
            },
            set (id) {
              this.updateBusinessEntitiyId(id)
            }
        },
    },
    methods: {
        ...mapActions('users/payment/invoice', [
            'getInitialData',
            'updateBusinessEntitiyId'
        ]),
    },
    mounted() {
        this.getInitialData()
    }
};