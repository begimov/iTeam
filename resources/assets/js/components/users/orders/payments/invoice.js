import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    computed: {
        ...mapGetters('users/payment/invoice', [
            'isLoading',
            'businessEntities',
            'getBusinessEntitiyId',
            'getCompanyName',
            'getUsername'
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
        'username': {
            get () {
              return this.getUsername
            },
            set (name) {
              this.updateUsername(name)
            }
        },
    },
    methods: {
        ...mapActions('users/payment/invoice', [
            'getInitialData',
            'updateBusinessEntitiyId',
            'updateCompanyName',
            'updateUsername'
        ]),
    },
    mounted() {
        this.getInitialData()
    }
};