import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    computed: {
        ...mapGetters('users/payment/invoice', [
            'isLoading',
            'businessEntities',
            'getBusinessEntitiyId',
            'getCompanyName'
        ]),
        'businessEntitiyId': {
            get () {
              return this.getBusinessEntitiyId
            },
            set (id) {
              this.updateBusinessEntitiyId(id)
            }
        },
        'companyName': {
            get () {
              return this.getCompanyName
            },
            set (name) {
              this.updateCompanyName(name)
            }
        },
    },
    methods: {
        ...mapActions('users/payment/invoice', [
            'getInitialData',
            'updateBusinessEntitiyId',
            'updateCompanyName'
        ]),
    },
    mounted() {
        this.getInitialData()
    }
};